<?php
	require_once 'config.php';
	include 'login.php';

	if(isset($_SESSION['login_user']))
		header("Location:account.php");
	if(isset($_SESSION['admin']))
		header("Location:admin/index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- Bootstrap CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://localhost/placement/Final/Font-Awesome-master/css/font-awesome.min.css">
        
    <title>Half Slider - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    

    <link rel="shortcut icon" href="images/SJCE_New_Logo (1).JPG" type="image/jpg">

        <!-- Website Title & Description for Search Engine purposes -->
        <title>SJCE Placement and Training</title>
        <meta name="description" content="SJCE Placement Cell">
        
        <!-- Mobile viewport optimized -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="includes/css/styles.css">
        
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
    });3
    3       
    $(document).on('click','.forgetpass-tab',function(e){
        e.preventDefault();
        $('#forgetpass-taba').tab('show');
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
</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

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
                <a class="navbar-brand" href="#"> SJCE Placement Cell</a>
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
				<li >
					<a href="stats.php">Placement Statistics</a>
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

    <!-- Half Page Image Background Carousel Header -->
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
                    <h2>Great dreams of great dreamers are always transcended
</h2> A. P. J. Abdul Kalam 
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/wpid-261764_384741621644975_63277969_n.jpg)"></div>
                <div class="carousel-caption">
                    <h2>Trust yourself.You know more than you think you do</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url(images/campus.jpg);"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               <br>
<br>
 <h3>About SJCE Placement and Training </h3><hr>
                <p align="justify" style = "font-family:calibri;">SJCE Sri Jayachamarajendra College of Engineering is one of the most sought after destinations amongst the students. Located in the southern part of Karnataka, SJCE is one of the dream destinations and attracts highly meritorious students from various parts of Karnataka and also abroad. This is mainly attributed to many factors; one of them being in SJCE’s efforts to get the students placed in various organizations through campus placements organized by the Placement and Training Cell. SJCE has been in the forefront of activities bringing both corporate and companies close to the campus and encouraging then to establish facilities to cater to the needs of both faculty and students.SJCE was granted autonomy and is presently one of the 17 engineering colleges which are granted autonomy in 2006-2007.
                        Placement and Training department took initiative to provide adequate training to students to enable them to have better employability skills compared to other colleges.
                        There are lot of initiative from companies in providing full time internship to our P.G students in the final year itself. These internships after their performance over six months / One Year would be converted to full time employment. Most coveted internship the selection for which was multi level will have  tough competition from various colleges across India.

                        The Placement and Training Center of our institution is headed by Deputy Director Prof B. Mahananda , Other Members of the Placement team includes Dr.Srinidhi R Acharya-Placement Officer and Mr.Pradeep.M-Placement Co-ordinator. The placement department arranges campus interviews from various national and multi-national companies for campus recruitment and also helps various Head of Departments in placing the students for project work at industries and other research and development organizations. The placement centre has an impressive track record of both placements and participating industries. Besides this, the placement centre organises mock interviews, personality development courses, seminars, group discussions, invited talks and road shows of prospective employers. Skill tests are also conducted to prepare the students for tests and interviews.</p>
            </div>
        </div>

        <hr>

        

    </div>
    <!-- /.container -->

    <!-- -Login Modal -->
   
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" >
    <div class="modal-dialog">
        <center><div class="modal-content login-modal" align="center" >
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
                            <li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Forgot Password</a></li>
                        </ul>
                    
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active text-center" id="home">
                                &nbsp;&nbsp;
                                <div>
                                    <?php 
                                    echo "<span style='color:red' id='error'>$error.<br></span>";
                                    ?>
                                </div>
                                <div class="clearfix"></div>
                                <form class="form" method="POST" action="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                      <input type="text" class="form-control" id="login_username" placeholder="Username"    name="username" required>
                                        </div>
                                      </div>
                                        <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div> 
                                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                        </div>
                                        </div>
                                    <button name="login" id="login_btn" class="btn btn-block bt-login" data-loading-text="Signing In...." type="" value="  Login  ">Login</button>
                                    <div class="clearfix"></div>
                                    
                                </form>


                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                &nbsp;&nbsp;
                               
                                <div class="clearfix"></div>
                                <form action="" method="post" id="signupform">
                                    <?php echo "<span id='error'>$error1</span>" ?>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                            <input type="text" class="form-control" id="usn" placeholder="Username" name="usn">
                                        </div>
                                        
                                    </div>
                                                    <?php echo "<span id='error'>$error2</span>" ?>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></div>
                                            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-wrench"></span></div>
                                            <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword">
                                        </div>
                                    </div>
                                    <button name="register" type="submit" id="register_btn" class="btn btn-block bt-login" data-loading-text="Registering...."  value="  register  ">Register</button>
                                    <?php echo "<span id='success'><br>$success<br></span>" ?>
                                    <div class="clearfix"></div>
                                    
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane text-center" id="forget_password">
                                &nbsp;&nbsp;
                                <span id="reset_fail" class="response_error" style="display: none;"></span>
                                    <div class="clearfix"></div>
                                    <form action="" method="post" id="forgotform">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon"><span> <strong>@</strong></span></div>
                                                <input type="text" class="form-control" name="femail" id="femail" placeholder="Email">
                                            </div>
                                            <span class="help-block has-error" data-error='0' id="femail-error"></span>
                                        </div>
                                        
                                        <button type="submit" name="forgot" id="reset_btn" class="btn btn-block bt-login" data-loading-text="Please wait...." value="forgot">Forgot Password</button>
                                        <div class="clearfix"></div>
                                    
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div></center>
       </div>
    </div>
    <!-- - Login Model Ends Here -->       

<!-- Footer -->
        <footer style="background-color:#000; margin-bottom:vmax;">
			<div class="container">
				<div class="row">
					
					
					<div class="col-sm-2">
					<center><h6><a href="#">Home</a></h6></center>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<center><h6><a href="https://www.sjce.ac.in">SJCE</a></h6></center>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-3">
					<center>
					<h6><a href="https://www.sjceresults.com">SJCE Results</a></h6>
					
					</center>
					</div><!-- end col-sm-2 -->

					<div class="col-sm-2">
					<center><h6><a href="https://sjcealumni.org">SJCE Alumni</a></h6></center>
					</div><!-- end col-sm-2 -->

					
					<div class="col-sm-3">
					<center>
						<h6>Follow Us</h6>
						<a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook fa-2x"></i></a>&nbsp&nbsp&nbsp
                  <a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter fa-2x"></i></a>&nbsp&nbsp&nbsp
                  <a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus fa-2x"></i></a>
					</center>
					</div>
					<br>
					<!-- end col-sm-2 -->
					<div class="col-sm-12">
					<center>
					<h6>Copyright &copy; 2016 {name}</h6>
					<h6 >Coded with <span class="glyphicon glyphicon-heart"></span> by SJCE</h6>
					</center>
					</div>
				</div><!-- end row -->
			</div><!-- end container -->
		</footer>
      
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
