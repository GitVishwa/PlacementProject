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
			
            
            <!--carousel -->
	 <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/image2.jpg)"></div>
                <div class="carousel-caption">
                    <h2>SJCE PLACEMENT CELL</h2> SJCE is one of the best institutions in  karnataka 
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/wpid-261764_384741621644975_63277969_n.jpg)"></div>
                <div class="carousel-caption">
                    <h2>SJCE PLACEMENT CELL</h2>The first thing that comes to mind when you land in Mysore is SJCE
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/campus.jpg);"></div>
                <div class="carousel-caption">
                    <h2>SJCE PLACEMENT CELL</h2>Building College-Industry Relations
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <!-- end myCarousel -->
			
			
			
			
			<div class="container" id="main">
			
			
			
			<div class="row" id="features">
			
	   
				<div class="col-sm-8 feature">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">About SJCE Placement and Training</h3>
						</div><!-- end panel-heading -->
						
						
						<p align="justify" style = "font-family:calibri;">SJCE Sri Jayachamarajendra College of Engineering is one of the most sought after destinations amongst the students. Located in the southern part of Karnataka, SJCE is one of the dream destinations and attracts highly meritorious students from various parts of Karnataka and also abroad. This is mainly attributed to many factors; one of them being in SJCE’s efforts to get the students placed in various organizations through campus placements organized by the Placement and Training Cell. SJCE has been in the forefront of activities bringing both corporate and companies close to the campus and encouraging then to establish facilities to cater to the needs of both faculty and students.SJCE was granted autonomy and is presently one of the 17 engineering colleges which are granted autonomy in 2006-2007.
                        Placement and Training department took initiative to provide adequate training to students to enable them to have better employability skills compared to other colleges.
                        There are lot of initiative from companies in providing full time internship to our P.G students in the final year itself. These internships after their performance over six months / One Year would be converted to full time employment. Most coveted internship the selection for which was multi level will have  tough competition from various colleges across India.

                        The Placement and Training Center of our institution is headed by Deputy Director Prof B. Mahananda , Other Members of the Placement team includes Dr.Srinidhi R Acharya-Placement Officer and Mr.Pradeep.M-Placement Co-ordinator. The placement department arranges campus interviews from various national and multi-national companies for campus recruitment and also helps various Head of Departments in placing the students for project work at industries and other research and development organizations. The placement centre has an impressive track record of both placements and participating industries. Besides this, the placement centre organises mock interviews, personality development courses, seminars, group discussions, invited talks and road shows of prospective employers. Skill tests are also conducted to prepare the students for tests and interviews.</p>
				</div><!-- end panel -->
				</div><!-- end feature -->
				  <div class="col-sm-4 feature">
			  <div style="border-radius:5px;height:420px;text-align:center;font-family:lucida handwriting;border:1px solid #1d1d1f;"> 
	<div style="font-weight:600;font-size:18px;border-bottom:5px solid black;font-family:algerian;"><b>Notice board</b></div> 
	        <marquee hspace = "10 " vspace = "25" behaviour = "alternate" direction="up" height="200" scrolldelay="1" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="4"> 
	        <div>
	        	<?php
 				
$flag=0;

			@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect.');
			@mysql_select_db(DB_DATABASE) or die("Could not connect.");

			$uquery1=mysql_query("SELECT * FROM recent_updates  ORDER BY id DESC LIMIT 5");

			if(!$uquery1)
                die("Could not Connect. Please try again later.");
            while($row=mysql_fetch_assoc($uquery1))
			{

				echo "->{$row['notice']}<br><br> ";
			}
			

               ?>	
            </div>
	</marquee>
	</div>
	</div>
				
				
				
			</div><!-- end features -->


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
 	<!-- - Login Model Ends Here -->		
		
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

