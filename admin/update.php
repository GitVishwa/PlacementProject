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
		<link rel="stylesheet" href="../includes/css/adminstyle.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/placement/Final/Font-Awesome-master/css/font-awesome.min.css">
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="../includes/js/modernizr-2.6.2.min.js"></script>
		<style type="text/css">
             .mid
             {
               margin-left: 275px;

             }
             .center
             {
             	text-align: center;
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
		function change1()
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
					document.getElementById('udiv').innerHTML=xmlhttp.responseText;
				}
			}
			parameter="usn="+document.getElementById('usn').value;
			xmlhttp.open('POST','setupdate.php',true);
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
				<li >
					<a href="company.php">Company</a>
				</li>
				
				<li >
					<a href="register.php">Register</a>
				</li>
				<li >
					<a href="search.php">Search</a>
				</li>
				<li class="active">
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


<h1 class="text-center">UPDATE</h1>
</div>
<form class="form-horizontal" role="form" method="post" action="writeupdate.php">
 
<div class="form-group ">
<label for="name" class="col-sm-2 control-label">USN</label>
<div class="col-sm-4 ">
<input type="text"  class="form-control" name='usn' id="cname"  placeholder="USN" onkeyup="change1();">
</div>
</div>
<div id='udiv'>
	</div>
 
<div class="form-group">
<label for="name" class="col-sm-2 control-label">SSLC:</label>
<div class="col-sm-4">
<input type="number" name="sslc" class="form-control"  id="sslc" placeholder="SSLC" min='0' max='100' step='0.01' autocomplete='off' onkeyup='change1();'>
</div>
</div>
 
<div class="form-group">
<label for="name" class="col-sm-2 control-label">PUC:</label>
<div class="col-sm-4">
<input type="number" name="puc" class="form-control"  id="puc" placeholder="PUC" min='0' max='100' step='0.01' autocomplete='off'>
</div>
</div>


<div class="form-group">
<label for="name" class="col-sm-2 control-label">UG:</label>
<div class="col-sm-4">
<input type="number" name="ug" class="form-control"  id="ug" placeholder="UG"  step='any' autocomplete='off'>
</div>
</div>

<div class="form-group">
<label for="name" class="col-sm-2 control-label">PG:</label>
<div class="col-sm-4">
<input type="number" name="pg" class="form-control"  id="pg" placeholder="PG"  step='any' autocomplete='off'>
</div>
</div>
<div class="form-group">
<label for="name" class="col-sm-2 control-label">Backs:</label>
<div class="col-sm-4">
<input type="number" name="backs" class="form-control"  step='any' id="backs" placeholder="Backlogs" autocomplete='off'>
</div>
</div>



</div>

<div class="form-group">
<div class="mid col-sm-2 ">
<input type="submit" class="form-control" value="submit ">
</div>
</div>
</form>
<?php
			if(isset($_SESSION['updatemsg']))
			{
				@mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Could not connect.");
				@mysql_select_db(DB_DATABASE) or die("Could not connect.");
				$uquery=mysql_query("SELECT * FROM test1 WHERE usn='{$_SESSION['updatemsg']}'");
				?>
				<div class = "table-responsive">
  <table class = "table" ; style= "background-color: #84ed86; color: #761a9b;  " >
      <thead>
        <tr>
        
          <th>Name</th>
          <th>SSLC</th>
          <th>PUC</th>
          <th>UG</th>
          <th>PG</td>
           <th>BACKS</td>
        </tr>
      </thead>
      <tbody>	
      	<?php
				if($uquery && mysql_num_rows($uquery)==1)
				{
					$row1=mysql_fetch_assoc($uquery);
				   echo
            "<tr>
              <td>{$row1['name']}</td>
              <td>{$row1['sslc']}</td>
              <td>{$row1['puc']}</td>
              <td>{$row1['ug']}</td>
              <td>{$row1['pg']}</td>
              <td>{$row1['backs']}</td> 
            </tr>\n";
				}
			}
			unset($_SESSION['updatemsg']);
		?>
</tbody>
</table>
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

