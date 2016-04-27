<?php
require_once 'config.php';
if(empty($_POST['username']) || empty($_POST['password']))
		{
			//$error = 'All feilds required';
			unset($_POST['username']);
			unset($_POST['password']);
		}
		else
		{
			if (preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/", "{$_POST['username']}") || strlen($_POST['username'])!=10)
            {
			echo "<span style='color:red'>Invalid Username or Password</span>";
               
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
			$query="SELECT * FROM test1 WHERE usn='$username' && password='$password' ";
			$query_run=mysql_query($query);
			$rows=mysql_num_rows($query_run);
			if($rows==1)
			{
			}
			else
			echo "<span style='color:red'>Invalid Username or Password</span>";
			}
		}
		?>