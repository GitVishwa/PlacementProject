<?php
require_once 'config.php';
include_once 'session.php';
if( empty($_POST['opassword']))
		{
			//$error = 'All feilds required';
			
			unset($_POST['opassword']);
		}
		else
		{
			$password=$_POST['opassword'];
			@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect to Database. Please try again later.');
			@mysql_select_db(DB_DATABASE) or die('Could not connect to Database. Please try again later.');
			$password=addslashes($password);
			$password=mysql_real_escape_string($password);
			$password=md5($password);
			$query="SELECT * FROM test1 WHERE   password='$password' && usn='{$_SESSION['login_id']}' ";
			$query_run=mysql_query($query);
			$rows=mysql_num_rows($query_run);
			if($rows==0)
			{
			echo "<span style='color:red'>Wrong Password</span>";
			}
		else if( empty($_POST['password1'])) 
          echo "<span style='color:red'>Please Enter  New Password</span>";
		else  if($_POST['password1'] != $_POST['cpassword']){
			echo "<span style='color:red'>Passwords do not match</span>";
        }
    }
		?>