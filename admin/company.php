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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/placement/Final/Font-Awesome-master/css/font-awesome.min.css">
		
		<link rel="stylesheet" href="../includes/css/adminstyle.css">
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="../includes/js/modernizr-2.6.2.min.js"></script>
		<script type="text/javascript">
		function register()
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
			var element=document.getElementsByClassName('category');
			setcat='';
			for(i=0;i<element.length;i++)
				if(element[i].checked)
				{
					setcat=element[i].value;
					break;
				}
			var element2=document.getElementsByClassName('backs');
			setbacks='';
			for(i=0;i<element2.length;i++)
				if(element2[i].checked)
				{
					setbacks=element2[i].value;
					break;
				}
			var check1=document.getElementsByClassName('chkbox');
			var string1="";
			for(var i=0;i<check1.length;i++)
				if(check1[i].checked)
					string1=string1+check1[i].value+" | ";
			var parameter="cname="+document.getElementById('cname').value+"&category="+setcat+"&sslc="+document.getElementById('sslc').value+"&puc="+document.getElementById('puc').value+"&ug="+document.getElementById('ug').value+"&pg="+document.getElementById('pg').value+"&package="+document.getElementById('package').value+"&backs="+setbacks+"&date="+document.getElementById('date').value+"&branch="+string1+"&link="+document.getElementById('link').value;
			xmlhttp.open('POST','setcompany.php',true);
			xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
			xmlhttp.send(parameter);
		}
		function check()
		{
			var check=document.getElementsByClassName('chkbox');
			if(document.getElementById('selectAll').checked==true)
			{
				for(var i=0;i<check.length;i++)
					check[i].checked=true;
				return;
			}
			if(document.getElementById('selectAll').checked==false)
			{
				for(var i=0;i<check.length;i++)
					check[i].checked=false;
				return;
			}
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
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
						<li>
					<a href="index.php">Home</a>
				</li>
				<li >
					<a href="notify.php">Add Notify</a>
				</li>
				<li  class="active">
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
<br>
<br>
<div class="container">
<div class="row">
<div class="page-header">
<center><h1>Add Company</h1></center>
</div>
<form class="form-horizontal" role="form" method="post" action="setc.php">
 
<div class="form-group">
<label for="name" class="col-sm-2 control-label">Company Name:</label>
<div class="col-sm-6">
<input type="text"  class="form-control" name='cname' id="cname" autocomplete='off' placeholder="Company Name" onkeyup='register();'>
</div>
</div>
 

 
<div class="form-group">
<label for="" class="col-sm-2 control-label">Category:</label>
<div class="col-sm-6">
<label class="radio-inline">
<input type="radio" name="category" value="opendream" class='category' onclick="register();">Open Dream
</label>
<label class="radio-inline">
<input type="radio" name="category" value="dream"  class='category' onclick="register();">Dream
</label>
<label class="radio-inline">
<input type="radio" name="category" value="core" class='category' onclick="register();">Core
</label>
<label class="radio-inline">
<input type="radio" name="category" value="mass" class='category'  onclick="register();">Mass
</label>
<label class="radio-inline">
<input type="radio" name="category" value="openmass" class='category'  onclick="register();">Open Mass
</label>
</div>
</div>

<div class="form-group">
<label for="name" class="col-sm-2 control-label">SSLC:</label>
<div class="col-sm-2">
<input type="number" name="sslc" class="form-control"  id="sslc" placeholder="SSLC" min='0' max='100' step='0.01'onkeyup='register();'>
</div>
</div>
 
<div class="form-group">
<label for="name" class="col-sm-2 control-label">PUC:</label>
<div class="col-sm-2">
<input type="number" name="puc" class="form-control"  id="puc" placeholder="PUC" min='0' max='100' step='0.01' onkeyup='register();'>
</div>
</div>

<div class="form-group">
<label for="name" class="col-sm-2 control-label">UG(BE, BSc, BCA)</label>
<div class="col-sm-2">
<input type="number" name="ug" class="form-control" id="ug"  placeholder="UG(BE, BSc, BCA)" min='0' max='10' step='0.01' onkeyup='register();'>
</div>
</div>


<div class="form-group">
<label for="name" class="col-sm-2 control-label">PG(MCA, MTECH)</label>
<div class="col-sm-2">
<input type="number" name="pg" class="form-control" id="pg"  placeholder="PG(MCA, MTECH)" min='0' max='10' step='0.01' onkeyup='register();'>
</div>
</div>

<div class="form-group">
<label for="" class="col-sm-2 control-label">Backlogs:</label>
<div class="col-sm-2">
<label class="radio-inline">
<input type="radio" name="backs" class="backs" value="1" onclick="register();">Yes
</label>
<label class="radio-inline">
<input type="radio" name="backs" value="0" class="backs" onclick="register();">No
</label>
</div>
</div>

<div class="form-group">
<label for="package" class="col-sm-2 control-label">Package</label>
<div class="col-sm-2">
<input type="number" name="package"  class="form-control" id="package"   min='0' max='100' step='any' placeholder="Package" onkeyup='register();'>
</div>
</div>

<div class="form-group">
<label for="date" class="col-sm-2 control-label">Date</label>
<div class="col-sm-2">
<input type="date" name="date" class="form-control" id="date"  value="<?php echo date('Y-m-d');?>" placeholder="Date" onkeyup='register();'>
</div>
</div>

<div class="form-group">
<label for="link" class="col-sm-2 control-label">Link</label>
<div class="col-sm-2">
<input type="text" name="link" class="form-control" id="link" autocomplete='off' placeholder="Company link" onkeyup='register();'>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
<label class="checkbox">
  <input type="checkbox" id='selectAll' value='checkall' onclick='check();register();'>Check all
</label>
</div>
</div>
 


<div class="form-group">
<div class="container">
<div class="col-sm-4">
<center><h3> Circuit Branches </h3></center>
<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="ELECTRONICS & COMMUNICATION" onclick="register();">Electronics and Communication
</label>

<label class="checkbox">
  <input type="checkbox"class="chkbox" name="branch[]" value="COMPUTER SCIENCE" onclick="register();">Computer Science
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="INFORMATION SCIENCE AND ENGINEERING" onclick="register();">Information Science 
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="ELECTRONICS & INSTRUMENTATION" onclick="register();">Electronics and Instrumentation
</label>
<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="ELECTRICAL & ELECTRONICS" onclick="register();">Electrical and Electronics
</label>
</div>
<div class="col-sm-4">
<center><h3> Non-Circuit Branches </h3></center>
<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="MECHANICAL ENGINEERING" onclick="register();">Mechanical
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="INDUSTRIAL PRODUCTION" onclick="register();">Industrial Production
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="CIVIL" onclick="register();">Civil
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="CONSTRUCTION TECHNOLOGY MGMT" onclick="register();">Construction Technology
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="BIOTECH" onclick="register();">Biotechnology
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="POLYMER SCIENCE & ENGINEERING" onclick="register();">Polymer Science
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="ENVIRONMENTAL ENGINEERING" onclick="register();">Environmental 
</label>
</div>
<div class="col-sm-4"></div>
</div>
<div class="container">
<div class="col-sm-8"><center><h3>MTECH Branches</h3></center></div>
<div class="col-sm-4"></div>
</div>

</br>
<div class="container">
<div class="col-sm-4">
<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="AUTOMOTIVE ELECTRONICS" onclick="register();">Automative Electronics
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="BIOMEDICAL SIGNAL PROCESSING & INSTRUMENTATION" onclick="register();">Biomedical Signal Processing and Instrumentation
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="COMPUTER ENGINEERING" onclick="register();">Computer Engineering
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="SOFTWARE ENGINEERING" onclick="register();">Software Engineering
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox"  name="branch[]" value="ENERGY SYSTEMS & MANAGEMENT" onclick="register();">Energy System and Management
</label>




<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="INDUSTRIAL ELECTRONICS" onclick="register();">Industrial Electronics
</label>
</div>
<div class="col-sm-4">
<label class="checkbox">
  <input type="checkbox" class="chkbox"  name="branch[]" value="INDUSTRIAL STRUCTURES" onclick="register();">Industrial Structures
</label>

<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="MAINTENANCE ENGINEERING" onclick="register();">Maintainance Engineering
</label>


<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="MASTER OF ENGINEERING MANAGEMENT" onclick="register();">Master of Engineering Management
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="NETWORKING AND INTERNET" onclick="register();">Networking and Internet
</label>



<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="VLSI DESIGN & EMBEDDED SYSTEM" onclick="register();">VLSI Design and Embedded Systems
</label>

<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="POLYMER SCIENCE & ENGINEERING" onclick="register();">Polymer Science and Technology 
</label>
</div>
</div>
<div class="container">
<div class="col-sm-3"></div>
<div class="col-sm-9">
<h3>MCA</h3>
<label class="checkbox">
  <input type="checkbox" class="chkbox" name="branch[]" value="MCA" onclick="register();">MCA 
</label>
</div>
</div>
</div>

</div>

<div class="form-group">
<div class="col-sm-4">
<input type="submit" class="form-control btn btn-success" value="SUBMIT">
</div>
</div> 



</form>
 <div id='a_div'>
					<?php if(isset($_SESSION['msg1']))
					echo $_SESSION['msg1'];
					unset($_SESSION['msg1']) ?>
				</div>
</div><!-- end for class "row" -->
</div>
</div>
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
	<script src="../bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="../includes/js/script.js"></script>
	
	</body>
</html>

