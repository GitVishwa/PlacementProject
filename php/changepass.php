<?php
	require_once 'config.php';
	include 'session.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="C:\xampp\htdocs\placement\Final\images\SJCE_New_Logo (1).JPG" type="image/jpg" width = "20" height = "10">

		<!-- Website Title & Description for Search Engine purposes -->
		<title>SJCE Placement and Training</title>
		<meta name="description" content="SJCE Placement Cell">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/placement/Final/Font-Awesome-master/css/font-awesome.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		<link rel="stylesheet" href="includes/css/fourthstyle.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
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
		<style type="text/css">
	
	.table td {
   text-align: center;   
}
.center-table
{
  margin: 0 auto;
  float: none;
}
</style>
	</head>
<body>
	
			<div class="navbar navbar-fixed-top">
				  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
				<li class="active">
					<a href="account.php">Home</a>
				</li>
				<li >
					<a href="noticeboard.php">Notice Board</a>
				</li>
				
				<li >
					<a href="register.php">Register</a>
				</li>
				<li >
					<a href="downloads.php">E-Placement</a>
				</li>
				<li>
				<?php
				@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect.');
    			@mysql_select_db(DB_DATABASE) or die('Could not connect.');
  
				$result=mysql_query("SELECT COUNT(usn) FROM placed where usn='{$_SESSION['login_id']}'");
				$count=mysql_fetch_array($result); 

				if($count[0]>=1){
				 	
				echo "	<a href='http://goo.gl/forms/6YqRXOnVbi' target='_blank'>Feedback form</a>";
				}else 
				echo "<a href='#' >Feedback form</a>";
				 ?>
				</li>
			</ul>
			<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
								<li><?php echo "Hi,  $_SESSION[login_id]";?></li>
									<li>
										<a href="changepass.php"><span class="glyphicon glyphicon-wrench"></span> Change Password</a>
									</li>
									<li>
										<a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign out</a>
									</li>
								</ul>
							</li>
						</ul><!-- end nav pull-right -->

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</div><!-- end navbar -->
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
         		$query="UPDATE test1 SET password='$password' WHERE usn='{$_SESSION['login_id']}'";
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
<br>
<br>
<br>

		<footer>
			<div class="container">
            <table class="span5 center-table" width="100%" height="6" >
            
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td style="color:#FFF" align="center">Follow Us</td>
  </tr>
  <tr>
    <td><center><a href="index.php">Home</a></center></td>
    <td><center><a href="http://www.sjcemysore.org" target="_blank">SJCE</a></center></td>
    <td><center><a href="http://www.sjceresults.com" target="_blank">SJCE Results</a></center></td>
    <td><center><a href="http://sjcealumni.org" target="_blank">SJCE Alumni</a></center></td>
    <td><center>
						
						<a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook fa-1.5x"></i></a>&nbsp&nbsp&nbsp
                  <a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter fa-1.5x"></i></a>&nbsp&nbsp&nbsp
                  <a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus fa-1.5x"></i></a>
					</center></td>
  </tr>
  <tr>
    <td colspan="5" style="color:#FFF"><center><br/>	<font size="-3"   color="#CCCCCC"> Copyright &copy; 2016 {Dept.Of ISE}
					<br>Coded with <span class="glyphicon glyphicon-heart"></span> by SJCE
					</center></font></td>
  </tr>
</table>

				
			</div><!-- end container -->
		</footer>
	



	
	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>

