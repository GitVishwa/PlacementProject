<?php
    require_once '../config.php';
    include 'session.php';
    @mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die('Could not connect.');
    @mysql_select_db(DB_DATABASE) or die('Could not connect.');
    echo "<br><br><br><br><br><br>";
    $result=mysql_query("SELECT COUNT(usn) FROM placed where branch IN ('ELECTRONICS & COMMUNICATION','COMPUTER SCIENCE','INFORMATION SCIENCE AND ENGINEERING','ELECTRONICS & INSTRUMENTATION','ELECTRICAL & ELECTRONICS')");
    $Placed=mysql_fetch_array($result); 
     $result=mysql_query("SELECT COUNT(usn) FROM test1 where branch IN ('ELECTRONICS & COMMUNICATION','COMPUTER SCIENCE','INFORMATION SCIENCE AND ENGINEERING','ELECTRONICS & INSTRUMENTATION','ELECTRICAL & ELECTRONICS')");
    $total=mysql_fetch_array($result);
    
    $Nonplaced=$total[0] - $Placed[0];

     $result=mysql_query("SELECT COUNT(usn) FROM placed where branch='ELECTRONICS & COMMUNICATION'");
      $ecPlaced=mysql_fetch_array($result); 
      $result=mysql_query("SELECT COUNT(usn) FROM test1 where branch='ELECTRONICS & COMMUNICATION'");
      $ectotal=mysql_fetch_array($result);
       $ecNonplaced=$ectotal[0] - $ecPlaced[0];
   
$result=mysql_query("SELECT COUNT(usn) FROM placed where branch='COMPUTER SCIENCE'");
      $csPlaced=mysql_fetch_array($result); 
      $result=mysql_query("SELECT COUNT(usn) FROM test1 where branch='COMPUTER SCIENCE'");
      $cstotal=mysql_fetch_array($result);
       $csNonplaced=$cstotal[0] - $csPlaced[0];

$result=mysql_query("SELECT COUNT(usn) FROM placed where branch='INFORMATION SCIENCE AND ENGINEERING'");
      $isPlaced=mysql_fetch_array($result); 
      $result=mysql_query("SELECT COUNT(usn) FROM test1 where branch='INFORMATION SCIENCE AND ENGINEERING'");
      $istotal=mysql_fetch_array($result);
       $isNonplaced=$istotal[0] - $isPlaced[0];

$result=mysql_query("SELECT COUNT(usn) FROM placed where branch='ELECTRONICS & INSTRUMENTATION'");
      $itPlaced=mysql_fetch_array($result); 
      $result=mysql_query("SELECT COUNT(usn) FROM test1 where branch='ELECTRONICS & INSTRUMENTATION'");
      $ittotal=mysql_fetch_array($result);
       $itNonplaced=$ittotal[0] - $itPlaced[0];

$result=mysql_query("SELECT COUNT(usn) FROM placed where branch='ELECTRICAL & ELECTRONICS'");
      $eePlaced=mysql_fetch_array($result); 
      $result=mysql_query("SELECT COUNT(usn) FROM test1 where branch='ELECTRICAL & ELECTRONICS'");
      $eetotal=mysql_fetch_array($result);
       $eeNonplaced=$eetotal[0] - $eePlaced[0];


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
    var  Placed= <?php print $Placed[0]; ?>;
    var Nonplaced = <?php print $Nonplaced; ?>;
      var ecPlaced= <?php print $ecPlaced[0]; ?>;
      var csPlaced= <?php print $csPlaced[0]; ?>;
         var isPlaced= <?php print $isPlaced[0]; ?>;
          var itPlaced= <?php print $itPlaced[0]; ?>;
           var eePlaced= <?php print $eePlaced[0]; ?>;

var ecNonplaced = <?php print $ecNonplaced; ?>;
var csNonplaced = <?php print $csNonplaced; ?>;
var isNonplaced = <?php print $isNonplaced; ?>;
var itNonplaced = <?php print $itNonplaced; ?>;
var eeNonplaced = <?php print $eeNonplaced; ?>;
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
    
    <!-- Bootstrap JS -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Department wise Chart(Electrical)'
        },
        xAxis: {
            categories: ['EC', 'CS', 'IS', 'IT', 'EE']
        },
        labels: {
            items: [{
                html: 'Department Wise ',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'column',
            name: 'placed',
            data: [ecPlaced , csPlaced , isPlaced , itPlaced, eePlaced]
        }, {
            type: 'column',
            name: 'Non-placed',
            data: [ecNonplaced, csNonplaced, isNonplaced, itNonplaced, eeNonplaced]
        },  {
            type: 'pie',
             name: 'Total Count',
            data: [{
                name: 'Placed',
                y: Placed,
                color: Highcharts.getOptions().colors[0] 
            }, {
                name: 'Non-Placed',
                y: Nonplaced,
                color: Highcharts.getOptions().colors[1] 
            }],
            center: [100, 80],
            size: 100,
            showInLegend: true,
            dataLabels: {
                enabled: false,
            }
        }]
    });
});


</script>


<div id='container' style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

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

