<?php
	require_once 'config.php';
	session_start();
	$error='';
	$error1='';
	$error2='';
	$success='';
	//echo "<pre>";print_r($_POST);exit;
	if(isset($_POST['login']))
	{
		if(empty($_POST['username']) || empty($_POST['password']))
		{
			$error = 'All feilds required';
			unset($_POST['username']);
			unset($_POST['password']);
		}
		else
		{
			if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/", "{$_POST['username']}") || strlen($_POST['username'])!=10)
            {
                $error = 'Invalid username or Password';
            }
            else
            {		
			$username=strtoupper($_POST['username']);
			$password=$_POST['password'];
			@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect to Database. Please try again later.');
			@mysql_select_db(DB_DATABASE) or die('Could not connect to Database. Please try again later.');
			$username=addslashes($username);
			$password=addslashes($password);
			$username=mysql_real_escape_string($username);
			$password=mysql_real_escape_string($password);
			$password=md5($password);
			$query="SELECT * FROM test1 WHERE usn='$username' && password='$password' && validation=1";
			$query_run=mysql_query($query);
			$rows=mysql_num_rows($query_run);
			if($rows==1)
			{
				$row=mysql_fetch_assoc($query_run);
				$_SESSION['login_user']=$row['name'];
				$_SESSION['login_id']=$row['usn'];
				header("location:account.php");
			}
			else
			{
				$query="SELECT * FROM test1 WHERE usn='$username' && password='$password' && validation=2";
				$query_run=mysql_query($query);
				$rows=mysql_num_rows($query_run);
				if($rows==1)
				{
					$_SESSION['admin']='redindians';
					header("location:admin/index.php");
				}
			}
			$error = 'Invalid Username or Password';
			}
		}
	}else if(isset($_POST['register'])){
		
	if(isset($_POST['usn']) && isset($_POST['password']) && isset($_POST['cpassword']))
	{
		if(empty($_POST['usn']) || empty($_POST['password']) || empty($_POST['cpassword']) || preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/", "{$_POST['usn']}") || strlen($_POST['usn'])!=10)
			$error1='<br>Invalid details.<br>';
		else if($_POST['password'] != $_POST['cpassword'])
			$error2='<br>Passwords do not match<br>';
		else
		{
			mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
			mysql_select_db(DB_DATABASE);
			$usn=strtoupper($_POST['usn']);
			$password=$_POST['password'];
			$usn=addslashes($usn);
			$password=addslashes($password);
			$usn=mysql_real_escape_string($usn);
			$password=mysql_real_escape_string($password);
			$password=md5($password);
			$query="SELECT validation FROM test1 WHERE usn='$usn'";
			$query_run=mysql_query($query);
			$rows=mysql_num_rows($query_run);
			if($rows==1)
			{
				$query_rows=mysql_fetch_assoc($query_run);
				$validation=$query_rows['validation'];
				if($validation==0)
				{
					$query="UPDATE test1 SET validation=1,password='$password' WHERE usn='$usn'";
					if(mysql_query($query))
						$success='Your account has been created successfully.<br>Please click <a href="index.php">here</a> to login.';
					else
						$success='Sorry,try again later.';
				}
				else if($validation==1)
				{
					$success='Your account is already created.';
				}
				else if($validation==2)
				{
					$success='You are banned from placements.';
				}
			}
			else
				$error1='Invalid USN.';
		}
	}
}
	else if(isset($_POST['forgot'])){
		extract($_POST);
		@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect to Database. Please try again later.');
		@mysql_select_db(DB_DATABASE) or die('Could not connect to Database. Please try again later.');
		$email_check=mysql_query("SELECT password FROM test1 WHERE email='$femail'");
		$count=mysql_num_rows($email_check);
		$email = "savitac10@gmail.com";
		$subject="Login Info";
		$message="Your password is .$count";
		$from="From: savitac10@gmail.com";
		echo mail($email, $subject, $message, $from);
		echo "your password has been email to you";

	}else{
		
	}
	//exit();
?>