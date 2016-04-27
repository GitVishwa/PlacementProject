<?php
	require_once 'config.php';
	include 'login.php';

	if(isset($_SESSION['login_user']))
		header("Location:account.php");
	if(isset($_SESSION['admin']))
		header("Location:admin/index.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images/SJCE_New_Logo (1).JPG" type="image/jpg">

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

		<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		
        
        
        
		<!-- Include Modernizr in the head, before any other Javascript -->
		 
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		<script>
$(document).ready(function(){
	$(document).on('click','.signup-tab',function(e){
		e.preventDefault();
	    $('#signup-taba').tab('show');
	});	
	
	$(document).on('click','.signin-tab',function(e){
	   	e.preventDefault();
	    $('#signin-taba').tab('show');
	});
	   	
});	
</script>
<style type="text/css">
	h6 > a {
		font-family: calibri;
		font-size: 1.2em;
	}
	li > a{
		font-family: calibri;
		font-size: 1.5em;
	}
	h6{
		font-family: calibri;
		font-size: 1.5em;
	}
	.table td {
   text-align: center;   
}

.center-table
{
  margin: 0 auto;
  float: none;
}
</style>
<script type="text/javascript">
		function signin()
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
					document.getElementById('a_div').innerHTML=xmlhttp.responseText;
				}
			}
			
			var parameter="username="+document.getElementById('username').value+"&password="+document.getElementById('password').value;
			xmlhttp.open('POST','checkpass.php',true);
			xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameter);
		}

		function signup()
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
			
			var parameter="usn="+document.getElementById('usn').value+"&password1="+document.getElementById('password1').value+"&cpassword="+document.getElementById('cpassword').value;
			xmlhttp.open('POST','signup.php',true);
			xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameter);
		}
</script>
	</head>

	<body>
	
		
		
			<div class="navbar navbar-fixed-top">
				  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img   src="images/sjcelogo.jpg" alt="" width="45" height="36"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Department <strong class="caret"></strong></a>
					
					<ul class="dropdown-menu">
						<li>
							<a href="executive.php">Executive</a>
						</li>
						
						<li>
							<a href="support.php">Support</a>
						</li>
						
						<li>
							<a href="PSecretary.php">Placement Secretaries</a>
						</li>
						
						<li class="divider"></li>
						
						<li> <a href="developers.php">Developers</a> </li>
						
						</ul><!-- end dropdown-menu -->
				</li>

				<li >
					<a href="companies.php">Companies</a>
				</li>
				</ul>
				<ul class="nav navbar-nav pull-right">
				<li>
					<a class="btn btn-launch" href="javascript:;" data-toggle="modal" data-target="#loginModal">Sign Up/Sign In</a>
				</li>
			</ul>
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
<br>
 <center>
<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
            	</div>
            </div>
            <hr>
            <br>
           
            <div class="row">
                <table   style='border-collapse:collapse;' cellpadding="70">
        
        
       <tbody>
         <tr>
           <td > <div class="card">
            <div class="photo"><img src="images/deepu.jpg" alt="..."  class="img-responsive img-circle"></div>
            <div class="banner"></div>
            <ul>
                <li><b>Deepashree S K</b></li>
                <li></li>

            </ul>
            <button class="contact" id="main-button">Developer</button>
            <div class="social-media-banner">
                <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/deepashree.kulkarni.7?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/d5594.dk/" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://in.linkedin.com/in/pradeep-manjunath-a531359" target="_blank"><i class="fa fa-linkedin"></i></a >
            </div>
       
          </div></td>
            <td > <div class="card">
            <div class="photo"><img src="images/manju.jpg" alt="..."  class="img-responsive img-circle"></div>
            <div class="banner"></div>
            <ul>
                <li><b>Manjunath R B</b></li>
                <li></li>

            </ul>
            <button class="contact" id="main-button">Developer</button>
            <div class="social-media-banner">
                <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/manjunath4038?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/manjunath4038/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://in.linkedin.com/in/manjunath-batakurki-4aa61282" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        
          </div></td>
            
         </tr><tr>
           <td> <div class="card">
            <div class="photo"><img src="images/IMG_0636.JPG" alt="..."  class="img-responsive img-circle"></div>
            <div class="banner"></div>
            <ul>
                <li><b>Rajesh D</b></li>
                <li></li>

            </ul>
            <button class="contact" id="main-button">Designer</button>
            <div class="social-media-banner">
                <a href="https://twitter.com/rajesh_rcr38" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/dustakar.rajesh" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/rajesh_36/" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="https://in.linkedin.com/in/rajesh-d-4373a3a3" target="_blank"><i class="fa fa-linkedin"></i></a >
            </div>
         
          </div></td>
            <td > <div class="card">
            <div class="photo"><img src="images/vishwa.jpg" alt="..."  class="img-responsive img-circle"></div>
            <div class="banner"></div>
            <ul>
                <li><b>Vishwanath Gulabal</b></li>
                <li></li>

            </ul>
            <button class="contact" id="main-button">Co-Developer</button>
            <div class="social-media-banner">
                <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/vishwanath.gulabal?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/vishu_gulabal/" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://in.linkedin.com/in/vishwanath-gulabal-813280b0" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
        
          </div></td>
            
         </tr>
          </tbody>
      
   </table>
            </div>
            <div class="row"></div>
        </div>
</center>

<!-- -Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
    	<div class="modal-content login-modal">
      		<div class="modal-header login-modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-center" id="loginModalLabel">USER AUTHENTICATION</h4>
      		</div>
      		<div class="modal-body">
      			<div class="text-center">
	      			<div role="tabpanel" class="login-tab">
					  	<!-- Nav tabs -->
					  	<ul class="nav nav-tabs" role="tablist" class="responsive">
					    	<li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Sign In</a></li>
					    	<li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
					    	
					  	</ul>
					
					  	<!-- Tab panes -->
					 	<div class="tab-content">
					    	<div role="tabpanel" class="tab-pane active text-center" id="home">
					    		<div class="clearfix"></div>
					    		<div id='a_div'> </div>
					    		<form class="form" method="POST" action="" >
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
								      <input type="text" class="form-control" id="username" placeholder="Username" 	name="username" required onkeyup='signin()';>
								      	</div>
								      </div>
								    	<div class="form-group">
								    	<div class="input-group" >
								      		<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div> 
								      		<input type="password" class="form-control" id="password" placeholder="Password" name="password" required onkeyup='signin()';>
								    	</div>
								    	</div>
						  			<button name="login" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In...." type="" value="  Login  ">Login</button>
						  			<div class="clearfix"></div>
						  			
								</form>
                                

					    	</div>
					    	<div role="tabpanel" class="tab-pane" id="profile">
					    		<div class="clearfix"></div>
					    		<div id='b_div'> </div>
					    		<form action="" method="post" id="signupform">
					    			
									<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
								      		<input type="text" class="form-control" id="usn" placeholder="Username" name="usn" required onkeyup='signup()';>
								    	</div>
								    	
								  	</div>
								  					
								  	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></div>
								      		<input type="password" class="form-control" id="password1" placeholder="Enter Password1" name="password" required onkeyup='signup()';>
								    	</div>
								    </div>
								    	<div class="form-group">
								    	<div class="input-group">
								      		<div class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></div>
								      		<input type="password" class="form-control" id="cpassword" required placeholder="Confirm Password" name="cpassword" onkeyup='signup()';>
								    	</div>
								    </div>
						  			<button name="register" type="submit" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering...."  value="  register" onclick='signup()'; >Register</button>
									<div class="clearfix"></div>
									
								</form>
					    	</div>
					    
						  	</div>
						</div>
	      				
	      			</div>
	      		</div>
	      		
	    	</div>
	   </div>
 	</div>
 	<!-- - Login Model Ends Here -->		</div>


		
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

