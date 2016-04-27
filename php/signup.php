<?php
require_once 'config.php';
 	 if(empty($_POST['usn'] )) 
       echo "<span style='color:red'>Please Enter USN</span>";
       else if (strlen($_POST['usn'])!=10)
        echo "<span style='color:red'>Invalid USN</span>";
      else if( empty($_POST['password1'])) 
          echo "<span style='color:red'>Please Enter Password</span>";
		else  if($_POST['password1'] != $_POST['cpassword']){
			echo "<span style='color:red'>Passwords do not match</span>";
        }
		else
		{
			mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
			mysql_select_db(DB_DATABASE);
			$usn=strtoupper($_POST['usn']);
			$password=$_POST['password1'];
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
                if($validation==1)
                {
                    echo "<span style='color:red'>Your account is already created</span>";
                }
                else if($validation==2)
                {
                    echo "<span style='color:red'>You are banned from placements</span>";
                }
				 else if($validation==0)
				{
                    if(isset($_POST['register'])){
					$query="UPDATE test1 SET validation=1,password='$password' WHERE usn='$usn'";
					if(mysql_query($query))
						echo 'Your account has been created successfully.<br>Please click <a href="index.php">here</a> to login.';
					else
						echo  "<span style='color:red'>Sorry,try again later.</span>";
                }
				}
				 
			}
			else
				echo "<span style='color:red'>Invalid USN.</span>";
		}
	

	//exit();
?>