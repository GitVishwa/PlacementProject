<?php
    require_once '../config.php';
    include 'session.php';
    @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect.');
    @mysql_select_db(DB_DATABASE) or die('Could not connect.');
    echo "<br><br><br><br><br><br>";
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='ELECTRONICS & COMMUNICATION'");
$ecopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!='' and branch ='ELECTRONICS & COMMUNICATION'");
$ecdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='ELECTRONICS & COMMUNICATION'");
$eccore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='ELECTRONICS & COMMUNICATION'");
$ecmass=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='ELECTRONICS & COMMUNICATION'");
$ecopenmass=mysql_fetch_array($result); 

//CS

$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='COMPUTER SCIENCE'");
$csopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='COMPUTER SCIENCE'");
$csdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='COMPUTER SCIENCE'");
$cscore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='COMPUTER SCIENCE'");
$csmass=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='COMPUTER SCIENCE'");
$csopenmass=mysql_fetch_array($result); 

//IS

$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='INFORMATION SCIENCE AND ENGINEERING'");
$isopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='INFORMATION SCIENCE AND ENGINEERING'");
$isdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='INFORMATION SCIENCE AND ENGINEERING'");
$iscore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='INFORMATION SCIENCE AND ENGINEERING'");
$ismass=mysql_fetch_array($result); 
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='INFORMATION SCIENCE AND ENGINEERING'");
$isopenmass=mysql_fetch_array($result);  
//EE
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='ELECTRICAL & ELECTRONICS'");
$eeopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='ELECTRICAL & ELECTRONICS'");
$eedream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='ELECTRICAL & ELECTRONICS'");
$eecore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='ELECTRICAL & ELECTRONICS'");
$eemass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='ELECTRICAL & ELECTRONICS'");
$eeopenmass=mysql_fetch_array($result);

//IT
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='ELECTRONICS & INSTRUMENTATION'");
$itopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='ELECTRONICS & INSTRUMENTATION'");
$itdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='ELECTRONICS & INSTRUMENTATION'");
$itcore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='ELECTRONICS & INSTRUMENTATION'");
$itmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='ELECTRONICS & INSTRUMENTATION'");
$itopenmass=mysql_fetch_array($result);
//ME
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='MECHANICAL ENGINEERING'");
$meopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='MECHANICAL ENGINEERING'");
$medream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='MECHANICAL ENGINEERING'");
$mecore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='MECHANICAL ENGINEERING'");
$memass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='MECHANICAL ENGINEERING'");
$meopenmass=mysql_fetch_array($result);

//IP
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='INDUSTRIAL PRODUCTION'");
$ipopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='INDUSTRIAL PRODUCTION'");
$ipdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='INDUSTRIAL PRODUCTION'");
$ipcore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='INDUSTRIAL PRODUCTION'");
$ipmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='INDUSTRIAL PRODUCTION'");
$ipopenmass=mysql_fetch_array($result);

//CTM
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='CONSTRUCTION TECHNOLOGY MGMT'");
$ctmopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='CONSTRUCTION TECHNOLOGY MGMT'");
$ctmdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='CONSTRUCTION TECHNOLOGY MGMT'");
$ctmcore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='CONSTRUCTION TECHNOLOGY MGMT'");
$ctmmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='CONSTRUCTION TECHNOLOGY MGMT'");
$ctmopenmass=mysql_fetch_array($result);

//CV
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='CIVIL'");
$cvopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='CIVIL'");
$cvdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='CIVIL'");
$cvcore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='CIVIL'");
$cvmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='CIVIL'");
$cvopenmass=mysql_fetch_array($result);

//PS
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='POLYMER SCIENCE & ENGINEERING'");
$psopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='POLYMER SCIENCE & ENGINEERING'");
$psdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='POLYMER SCIENCE & ENGINEERING'");
$pscore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='POLYMER SCIENCE & ENGINEERING'");
$psmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='POLYMER SCIENCE & ENGINEERING'");
$psopenmass=mysql_fetch_array($result);

//BT
$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='BIOTECH'");
$btopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='BIOTECH'");
$btdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='BIOTECH'");
$btcore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='BIOTECH'");
$btmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='BIOTECH'");
$btopenmass=mysql_fetch_array($result);

//ENV

$result = mysql_query("SELECT COUNT(opendream) FROM test1  where opendream!= '' and branch ='ENVIRONMENTAL ENGINEERING'");
$envopendream=mysql_fetch_array($result);  

$result= mysql_query("SELECT COUNT(dream) FROM test1 where dream!= '' and branch ='ENVIRONMENTAL ENGINEERING'");
$envdream=mysql_fetch_array($result);  

$result = mysql_query("SELECT COUNT(core) FROM test1 where core !='' and branch ='ENVIRONMENTAL ENGINEERING'");
$envcore=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(mass) FROM test1 where mass !='' and branch ='ENVIRONMENTAL ENGINEERING'");
$envmass=mysql_fetch_array($result);  
$result = mysql_query("SELECT COUNT(openmass) FROM test1 where openmass !='' and branch ='ENVIRONMENTAL ENGINEERING'");
$envopenmass=mysql_fetch_array($result);
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
        <script>
    var ecopendream = <?php print $ecopendream[0]; ?>;
    var ecdream = <?php print $ecdream[0]; ?>;
      var eccore= <?php print $eccore[0]; ?>;
      var ecmass= <?php print $ecmass[0]; ?>;
     var ecopenmass= <?php print $ecopenmass[0]; ?>;

      var csopendream = <?php print $csopendream[0]; ?>;
    var csdream = <?php print $csdream[0]; ?>;
      var cscore= <?php print $cscore[0]; ?>;
      var csmass= <?php print $csmass[0]; ?>;
     var csopenmass= <?php print $csopenmass[0]; ?>;

      var isopendream = <?php print $isopendream[0]; ?>;
    var isdream = <?php print $isdream[0]; ?>;
      var iscore= <?php print $iscore[0]; ?>;
      var ismass= <?php print $ismass[0]; ?>;
     var isopenmass= <?php print $isopenmass[0]; ?>;

      var eeopendream = <?php print $eeopendream[0]; ?>;
    var eedream = <?php print $eedream[0]; ?>;
      var eecore= <?php print $eecore[0]; ?>;
      var eemass= <?php print $eemass[0]; ?>;
     var eeopenmass= <?php print $eeopenmass[0]; ?>;

      var itopendream = <?php print $itopendream[0]; ?>;
    var itdream = <?php print $itdream[0]; ?>;
      var itcore= <?php print $itcore[0]; ?>;
      var itmass= <?php print $itmass[0]; ?>;
     var itopenmass= <?php print $itopenmass[0]; ?>;

     var meopendream = <?php print $meopendream[0]; ?>;
    var medream = <?php print $medream[0]; ?>;
      var mecore= <?php print $mecore[0]; ?>;
      var memass= <?php print $memass[0]; ?>;
     var meopenmass= <?php print $meopenmass[0]; ?>;

     var ipopendream = <?php print $ipopendream[0]; ?>;
    var ipdream = <?php print $ipdream[0]; ?>;
      var ipcore= <?php print $ipcore[0]; ?>;
      var ipmass= <?php print $ipmass[0]; ?>;
     var ipopenmass= <?php print $ipopenmass[0]; ?>;

   var cvopendream = <?php print $cvopendream[0]; ?>;
    var cvdream = <?php print $cvdream[0]; ?>;
      var cvcore= <?php print $cvcore[0]; ?>;
      var cvmass= <?php print $cvmass[0]; ?>;
     var cvopenmass= <?php print $cvopenmass[0]; ?>;

     var ctmopendream = <?php print $ctmopendream[0]; ?>;
    var ctmdream = <?php print $ctmdream[0]; ?>;
      var ctmcore= <?php print $ctmcore[0]; ?>;
      var ctmmass= <?php print $ctmmass[0]; ?>;
     var ctmopenmass= <?php print $ctmopenmass[0]; ?>;

     var btopendream = <?php print $btopendream[0]; ?>;
    var btdream = <?php print $btdream[0]; ?>;
      var btcore= <?php print $btcore[0]; ?>;
      var btmass= <?php print $btmass[0]; ?>;
     var btopenmass= <?php print $btopenmass[0]; ?>;

     var psopendream = <?php print $psopendream[0]; ?>;
    var psdream = <?php print $psdream[0]; ?>;
      var pscore= <?php print $pscore[0]; ?>;
      var psmass= <?php print $psmass[0]; ?>;
     var psopenmass= <?php print $psopenmass[0]; ?>;

     var envopendream = <?php print $envopendream[0]; ?>;
    var envdream = <?php print $envdream[0]; ?>;
      var envcore= <?php print $envcore[0]; ?>;
      var envmass= <?php print $envmass[0]; ?>;
     var envopenmass= <?php print $envopenmass[0]; ?>;



    // Do things in JS with stuff and blah here, no more PHP mixed in
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
                <li class="dropdown active">
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
<!-- All Javascript at the bottom of the page for faster page loading -->
        
    <!-- First try for the online version of jQuery-->
    <script src="http://code.jquery.com/jquery.js"></script>
    
    <!-- If no online access, fallback to our hardcoded version of jQuery -->
    <script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
    var chart = new Highcharts.Chart({
        chart: {
            type: 'column',
             renderTo: 'container'
        },
        title: {
            text: 'Departmental Statistics'
        },
        subtitle: {
            text: 'Category Wise'
        },
        xAxis: {
            categories: [
                'E&C',
                'CS',
                'IS',
                'E&E',
                'IT',
                'ME',
                'IP',
                'CV',
                'CTM',
                'PS',
                'BT',
                'ENV',
                
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Placed'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Opendream',
            data: [ecopendream, csopendream, isopendream, eeopendream, itopendream, meopendream, ipopendream, cvopendream, ctmopendream, envopendream, btopendream, psopendream]

        }, {
            name: 'Dream',
            data: [ecdream, csdream, isdream, eedream, itdream, medream, ipdream, cvdream, ctmdream, envdream, btdream, psdream]

        }, {
            name: 'Core',
            data: [eccore, cscore, iscore, eecore, itcore, mecore, ipcore, cvcore, ctmcore, envcore, btcore, pscore]

        }, {
            name: 'Mass',
            data: [ecmass, csmass, ismass, eemass, itmass, memass, ipmass, cvmass, ctmmass, envmass, btmass, psmass]

        },{
            name: 'Openmass',
            data: [ecopenmass, csopenmass, isopenmass, eeopenmass, itopenmass, meopenmass, ipopenmass, cvopenmass, ctmopenmass, envopenmass, btopenmass, psopenmass]

        }]
    });
});


</script>

<div id='container' style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<!-- All Javascript at the bottom of the page for faster page loading -->
        
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
    <td colspan="5" style="color:#FFF"><center><br/>    <font size="-3"   color="#CCCCCC"> Copyright &copy; 2016 {Dept.Of ISE}
                    <br>Coded with <span class="glyphicon glyphicon-heart"></span> by SJCE
                    </center></font></td>
  </tr>
</table>

                
            </div><!-- end container -->
        </footer>
    



    
   
    
   
    
    </body>
</html>

