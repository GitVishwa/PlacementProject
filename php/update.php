<?php
	require_once 'config.php';
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
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
	
	.mid{
		margin-left: 275px;
	}
	.center
	{margin-left: 290px;

	}
</style>		
<script type="text/javascript">
	function validatePhone() {
    
    var phone=document.getElementById('phonenum').value;
    

   if (phone == "") {
        alert("You didn't enter a phone number");
    } else if (isNaN(parseInt(phone))) {
       
        alert("The phone number contains illegal characters");
}
     else if (!(phone.length == 10)) {
        
        alert("The phone number is of wrong length!!");

     }
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
					<a href="account.php">Home</a>
				</li>
				<li >
					<a href="noticeboard.php">Notice Board</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Curriculum Vitae <strong class="caret"></strong></a>
					
					<ul class="dropdown-menu">
						<li>
							<a href="view.php">View</a>
						</li>
						<li> <a href="update.php">Update Info</a> </li>
						
						<li class="divider"></li>
						
						<li>
							<a href="upload.php">Upload CV</a>
						</li>
						
				</ul><!-- end dropdown-menu -->
				</li>
				<li >
					<a href="register.php">Register</a>
				</li>
				<li >
					<a href="downloads.php">downloads</a>
				</li>
			</ul>
			<ul class="nav navbar-nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
								
								<ul class="dropdown-menu">
									
									<li>
										<a href="changepic.php"><span class="glyphicon glyphicon-camera"></span> Change Picture</a>
									</li>
									<li>
										<a href="changepass.php"><span class="glyphicon glyphicon-wrench"></span> Change Password</a>
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


<div class="container">
<div class="row">
<div class="page-header">
<h1 class="text-center">UPDATE INFO</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="">
 
<div class="form-group ">
<label for="name" class="col-sm-2 control-label">Email Id:</label>
<div class="col-sm-4 ">
<input type="email"  class="form-control" name='emailid' id="emailid" autocomplete='off' placeholder="Email Id">
</div>
</div>
 

 


<div class="form-group">
<label for="name" class="col-sm-2 control-label">Phone Number:</label>
<div class="col-sm-4">
<input type="text" name="phonenum" class="form-control"  id="phonenum" placeholder="Phone Number"  autocomplete='off'>
</div>
</div>
 


</div>


<div class="form-group">
<div class="mid col-sm-2">
<input type="submit" class="form-control" value="submit" onclick="validatePhone();">
</div>
</div>
<br>
<br>
<br>
<br>




</form>

 <div id='a_div'>
					<?php if(isset($_SESSION['msg1']))
					echo $_SESSION['msg1'];
					unset($_SESSION['msg1']) ?>
				</div>
</div><!-- end for class "row" -->
</div>








<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
					<h6>Copyright &copy; 2016 {name}</h6>
					</div><!-- end col-sm-2 -->
					
					
					<div class="col-sm-2">
					<h6><a href="index.php">Home</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<h6><a href="http://sjcemysore.org">SJCE</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<h6><a href="http://www.sjceresults.com">SJCE Results</a></h6>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<h6><a href="http://sjcealumni.org">SJCE Alumni</a></h6>
					</div><!-- end col-sm-2 -->

					
					
					
					<div class="col-sm-2">
						<h6>Follow Us</h6>
						<ul class="unstyled">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google Plus</a></li>
						</ul>
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
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>
