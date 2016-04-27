<?php
	require_once '../config.php';
    
	include 'session.php';

?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="C:\Users\Manju\Desktop\mywebsite\05 - Final Website\images\SJCE_New_Logo (1).JPG" type="image/jpg">


		<!-- Website Title & Description for Search Engine purposes -->
		<title>SJCE Placement and Training</title>
		<meta name="description" content="SJCE Placement Cell">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="../includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="../includes/js/modernizr-2.6.2.min.js"></script>

<style type="text/css">
	
	.mid{
		margin-left: 275px;
	}
	.center
	{margin-left: 290px;

	}
</style>	

<script type="text/javascript">function changepass()
		{
			var xmlhttp;
			if(window.XMLHttpRequest)
			{
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
			xmlhttp.onreadystatechange=function()
			{
				if(xmlhttp.readyState==4 && xmlhttp.status==200 )
				{
					document.getElementById('b_div').innerHTML=xmlhttp.responseText;
				}
			}
			
			var parameter="opassword="+document.getElementById('opassword').value+"&password1="+document.getElementById('password1').value+"&cpassword="+document.getElementById('cpassword').value;
			xmlhttp.open('POST','check.php',true);
			xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameter);
		}
</script>





		
	</head>
<body>
	
		<div class="container" id="main">
		
			<div class="navbar navbar-fixed-top">
				<nav class="navbar navbar-inverse">
	<div class="container">
		
		<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
		<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<div class="nav-collapse collapse navbar-responsive-collapse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="notify.php">Add Notify</a>
				</li>
				<li >
					<a href="company.php">Company</a>
				</li>
				
				<li >
					<a href="register.php">Register</a>
				</li>
				<li >
					<a href="search.php">Search</a>
				</li>
				<li >
					<a href="update.php">Update</a>
				</li>
						<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Analysis <strong class="caret"></strong></a>
                    
                    <ul class="dropdown-menu">
                        <li>
                            <a  href="statistics.php">Category Wise</a>
                        </li>
                        
                        <li>
                            <a href="statistics2.php">Electrical vs Non-Electrical</a>
                        </li>
                        
                        <li>
                            <a href="statistics3.php">Placed vs Non-Placed</a>
                        </li>
                       <li> <a href="statistics4.php">Department Wise(Electrical)</a> </li>
                          <li> <a href="statistics5.php">Department Wise(Non-Electrical)</a> </li>
                           <li> <a href="statistics6.php">Department and Category Wise(B.E)</a> </li>
                        
                        </ul><!-- end dropdown-menu -->
                </li>
			</ul>

			<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
								<li> Hi,  Admin</li>
									<li>
										<a href="password.php"><span class="glyphicon glyphicon-wrench"></span> Change Password</a>
									</li>
									<li>
										<a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign out</a>
									</li>
								</ul>
							</li>

						</ul><!-- end nav pull-right -->
			
	    </div><!-- end nav-collapse -->
	
	</div><!-- end container -->
</nav>
</div><!-- end navbar -->
<br>
<br>
<br>
<br>
<br>
<?php
 if(isset($_POST['register'])){
		
	if(isset($_POST['opassword']) && isset($_POST['password']) && isset($_POST['cpassword']))
	{
		if(empty($_POST['opassword']) || empty($_POST['password']) || empty($_POST['cpassword']) )
			{}
		else if($_POST['password'] != $_POST['cpassword'])
			{}
			else
		{
			mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
			mysql_select_db(DB_DATABASE);
			$password=$_POST['password'];
			
			$password=addslashes($password);
			
			$password=mysql_real_escape_string($password);
			$password=md5($password);
         		$query="UPDATE test1 SET password='$password' WHERE usn='{$_SESSION['admin']}'";
					if(mysql_query($query))
						echo 'Your Password has been Changed successfully.<br>';
					else
						echo 'Sorry,try again later.';
				
			}
			
		}
	else
				echo "Sorry !!! U could not change";
}
?>

<?php
 if(isset($_POST['reset'])){
		
	if(isset($_POST['usn']) )
	{
		if(empty($_POST['usn'])  )
			{}
			else
		{
			mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
			mysql_select_db(DB_DATABASE);
			$usn=$_POST['usn'];
			
			$usn=addslashes($usn);
			
			$usn=mysql_real_escape_string($usn);
			$rquery=mysql_query("SELECT name FROM test1 WHERE usn='{$_POST['usn']}'");
		if($rquery && mysql_num_rows($rquery)==1)
		{
			
         		$pass=md5('12345');
				$setquery=mysql_query("UPDATE `test1` SET `password` = '$pass' WHERE usn='{$_POST['usn']}'");
				if($setquery)
					echo "<span id='msg1'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp The password has been reset.<br><br></span>";

				
			}
			else
						echo 'Sorry,try again later.';
			$usn ='';
		}
	
}}
?>
<div class="container">
<div class="row">
<div class="page-header">
<h1>Change P***word</h1>
</div>

<div id='b_div'> </div>
<form class="form-horizontal" role="form" method="post" action="">
 <div class="form-group ">
<label for="name" class="col-sm-2 control-label">Enter password</label>
<div class="col-sm-4 ">
<input type="password"  class="form-control" name='opassword' id="opassword" autocomplete='off' placeholder="Current Password" onkeyup='changepass()'; >
</div>
</div>
 
 <div class="form-group">
<label for="name" class="col-sm-2 control-label">New Password</label>
<div class="col-sm-4">
<input type="password" name="password" class="form-control"  id="password1" placeholder="New Password" autocomplete='off'  onkeyup='changepass()';>
</div>
</div>
 
<div class="form-group">
<label for="name" class="col-sm-2 control-label">Confirm password</label>
<div class="col-sm-4">
<input type="password" name="cpassword" class="form-control"  id="cpassword" placeholder="Re-enter new password" autocomplete='off' onkeyup='changepass()'; >
</div>
</div>

</div>
<div class="form-group">
<div class="mid col-sm-6">
<button name="register" type="submit" class="col-sm-4" class="btn btn-primary" data-loading-text="Registering...."  value="  register" onclick='changepass()'; >Change Password</button>
</div>
</div>
</form>

<div class="page-header">
<h1>Reset P***word</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="">

<div class="form-group">
<label for="name" class="col-sm-2 control-label">Enter USN</label>
<div class="col-sm-4">
<input type="text" name="usn" class="form-control"  id="usn" placeholder="Enter USN" autocomplete='off' required >
</div>
</div>

<div class="form-group">
<div class="center col-sm-6" >
<button name="reset" type="submit" class="col-sm-4" class="btn btn-primary" data-loading-text="Registering...."  value="  reset">Reset Password</button>
</div>
</div>


</form>
 
</div><!-- end for class "row" -->
</div>

<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<h6>Copyright &copy; 2016 {name}</h6>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
					<h6><a href="#">Home</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<h6><a href="https://sjcemysore.org">SJCE</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<h6><a href="https://www.sjceresults.com">SJCE Results</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<h6><a href="https://sjcealumni.org">SJCE Alumni</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
						<h6>Follow Us</h6>
						<ul class="unstyled">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google Plus</a></li>
						</ul>
					</div><!-- end col-sm-2 -->
					
					<div class="col-sm-2">
						<h6 class="align-centre">Coded with <span class="glyphicon glyphicon-heart"></span> by SJCE</h6>
					</div><!-- end col-sm-2 -->
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
	



	
	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="../includes/js/script.js"></script>
	
	</body>
</html>

