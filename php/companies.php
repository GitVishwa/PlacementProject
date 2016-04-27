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
		<link rel="stylesheet" href="http://localhost/placement_deepa/Final/Font-Awesome-master/css/font-awesome.min.css">

		<!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="includes/css/styles.css">
		<link rel="stylesheet" href="includes/css/recruiters1.css">
        
        
        
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

<a href="stats.php"> <h3>CLICK HERE TO DOWNLOAD THE PLACEMENT STATISTICS<h3></a>
<table class = 'table'>
   <caption><center><h4>Our Recruiters</h4></center></caption><tbody>
				<tr>
					<td><a name="opendream"></a>
						<div id="texthover">
							<img src="images/google.png" height="100px" width="300px">
							<div id="overlay">Google is an American multinational technology company specializing in internet related services and products.These include online advertizing technologies,search,cloud computing,and software. Most of its profits are derived from Adwords - an online advertizing service that places advertising near the list of search results. The corporatin has estimated to run more than one million servers in data centers around the world. It processes over one million search results and about 24 petabytes of user generated data each day.</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/microsoft.png" height="100px" width="300px">
							<div id="overlay">Microsoft corporation is an American multinational company headquartered in Redmond,Washington that develops,manufactures,licenses,supports and sells computer software,consumer electronics, personnel computers and services. Its best known software products are Microsoft Windows line of operating systems, Microsoft office suite and Internet explorer web browser. Its flagship hardware products are XBox game console and microsoft surface tablet lineup. It is the world's largest software maker measured by revenues. It is aslo one of the worlds most valuable companies</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/linkedin.png" height="100px" width="300px">
							<div id="overlay">LinkedIn is a business oriented social networking service. Founded in december 2002 and launched on may 5,2003. It is mainly used for professional networking. In 2006, LinkedIn increased to 20 million members. As of march 2015, LinkedIn reports more than 364 million acquiredbusers in more than 200 countries and territories. The site is available in 24 languages.Linked in filed for an initial public offering in january 2011 and traded its first shares on may 19,2011, under the NYSE symbol "LNKD".</div>
						</div>						
					</td>
				</tr>
				<tr>
					<td>
						<div id="texthover">
							<img src="images/intuit.gif" height="100px" width="300px">
							<div id="overlay">Intuit is an American software company that develops financial and tax preparation software and related services for small businesses, accountants and individuals. It is incorporated in Delaware and headquartered in Mountain View, California.Intuit makes the personal finance programs Quicken and TurboTax, as well as the small business accounting program QuickBooks. In addition, they produce QuickBooks Point of Sale solution for small retailers, professional tax solutions ProSeries and Lacerte, and the Web-based corporate workgroup productivity solution QuickBase.</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/commvault.gif" height="100px" width="300px">
							<div id="overlay">CommVault Systems,is a publicly traded data management and information management software company headquartered in Tinton Falls, New Jersey. It was formed as a development group in Bell Labs, and later became a business unit of AT&T Network Systems.CommVault’s signature product is Simpana software, a scalable, unified data and information management software designed to replace several products. The Simpana software platform provides one management console for administering integrated, licensable modules for backup and recovery, archive, replication, resource management and search capabilities in virtualized and physical IT environments.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/flipkart.gif" height="100px" width="300px">
							<div id="overlay">Flipkart is an e-commerce company founded in 2007 by Sachin Bansal and Binny Bansal. It is registered in Singapore and it operates in India, where it is headquartered in Bangalore, Karnataka.[4] Flipkart has launched its own product range under the name "DigiFlip" with products including tablets, USBs, and laptop bags.In May 2014, Flipkart received $210 million from DST Global, in July 2014 it raised $1 billion led by existing investors Tiger Global and South Africa's media group Naspers and in May 2015 it raised $550 million from some of its existing investors.</div>
						</div>						
					</td>
				</tr>
				<tr>
					<td>
						<div id="texthover">
							<img src="images/netapp.png" height="100px" width="300px">
							<div id="overlay">NetApp,formerly Network Appliance, is an American computer storage and data management company headquartered in Sunnyvale,California.It was ranked on the Fortune 500 for the first time in 2012.NetApp was founded in 1992 by David Hitz,James Lau,and Michael Malcolm. In 1994, NetApp received venture capital funding fromSequoia Capital.NetApp thrived in the internet bubble years of the mid 1990s to 2001, during which the company grew to $1 billion in annual revenue. After the bubble burst, NetApp's revenues quickly declined to $800 million in its fiscal year 2002. Since then, the company's revenues have steadily climbed.</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/myntra.jpeg" height="100px" width="300px">
							<div id="overlay">Myntra.com is an Indian e-commerce company of fashion and casual lifestyle products, headquartered in Bangalore, Karnataka. The company was founded in 2007 by Indian Institutes of Technology graduates Mukesh Bansal, Ashutosh Lawania and Vineet Saxena with a focus on personalisation of gift items. By 2010, Myntra shifted its focus to the online retailing of branded apparel.In May 2014, Myntra.com merged with Flipkart to compete against Amazon which entered the Indian market in June 2013 and other established offline retailers like Future Group, Aditya Birla Group and Reliance Retail.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/cisco.png" height="100px" width="300px">
							<div id="overlay"> The Cisco Systems,Inc is a multinational technology corporation headquartered in San Jose,California, United States that designs, manufactures and sells networking equipments. The stock was added to Dow Jones Industrial average on june 8,2009 and is also included in in S&p 500 index, the Russel 1000 index, NASDAQ-100 index and the russel 1000 growth stock index.Cisco products most notably IP phones and Telepresence are frequently sighted in movies and TV series. It has also developed varion operating systems like IOS,CatOS,NX-OS and IOS-XR.</div>
						</div>						
					</td>
				</tr>


				<tr>
					<td>
						<div id="texthover">
							<img src="images/ni.png" height="100px" width="300px">
							<div id="overlay">National Instruments Corporation, or NI, is an American company with international operation. Headquartered in Austin, Texas, it is a producer of automated test equipment and virtual instrumentation software. Common applications include data acquisition, instrument control and machine vision.In 2012, the company sold products to more than 35,000 companies with revenues of $1.12 billion USD.</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/Motorola.jpg" height="100px" width="300px">
							<div id="overlay">Motorola,.was a multinational telecommunications company based in Schaumburg, Illinois, United States (U.S.). After having lost $4.3 billion from 2007 to 2009, the company was divided into two independent public companies, Motorola Mobility and Motorola Solutions on January 4, 2011.Motorola Solutions is generally considered to be the direct successor to Motorola, Inc.,as the reorganization was structured with Motorola Mobility being spun off.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/sap.gif" height="100px" width="300px">
							<div id="overlay">SAP SE(Systems, Applications & Products in Data Processing) is a German multinational software corporation that makes enterprise software to manage business operations and customer relations. SAP is headquartered in Walldorf, Baden-Württemberg, with regional offices in 130 countries.The company has over 291,000 customers in 190 countries.</div>
						</div>						
					</td>
				</tr>



				<tr>
					<td>
						<div id="texthover">
							<img src="images/oracle.png" height="100px" width="300px">
							<div id="overlay">The Oracle corporation is a multinational technology corporation headquartered in Redwood city,California, United States. The company specializes in developing and marketing computer hardware systems and enterprise software products, particularly in its own brands of database management systems. As of 2011, Oracle is the second largest software maker by revenue, after Microsoft.The company also builds tools for database development and systems of middle-tier software, Enterprice Resourse Planning(ERP) software, Customer Relationship Management(CRM) and Supply Chain Management(SCM).</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/avaya.png" height="100px" width="300px">
							<div id="overlay">Avaya is an American IT company.In 1995, the company that would become Avaya was part of Lucent Technologies. Before that it had been part of AT&T.The objective was to give the people who knew the business best the flexibility and focus to accelerate innovation and improve operations.Avaya became an independent company and started trading on the New York Stock Exchange on October 2,2000. In October 2007, Avaya became a privately-held company when it was acquired by Silver Lake and TPG Capital.The company has sold and acquired several companies to support its current product set, including VPNet Technologies, VISTA Information Technologies Inc,RouteScience, Tenovis, Spectel, NimCat Networks, Traverse Networks, Ubiquity Software Corporation, Agile Software NZ Limited, Konftel, Sipera, Aurix and Radvision.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/novell.gif" height="100px" width="300px">
							<div id="overlay">Novell,is an American multinational software and services company headquartered in Provo, Utah. It has been instrumental in making the Utah Valley a focus for technology and software development. Novell technology contributed to the emergence of local area networks, which displaced the dominant mainframe computing model and changed computing worldwide. Today, a primary focus of the company is on developing software for enterprise clients. Novell was purchased by The Attachmate Group as a wholly owned subsidiary, but due to ongoing litigation with former shareholders, the company is still listed at the Delaware Division of Corporations as "Novell, Inc." pending resolution of a shareholders suit filed against the company.</div>	
						</div>						
					</td>
				</tr>

				<tr>
					<td><a name="core"></a>
						<div id="texthover">
							<img src="images/hp.jpg" height="100px" width="300px">
							<div id="overlay">Hewlett-Packard Company or HP is an American multinational information technology company headquartered in Palo Alto, California, United States. It provides hardware,software and services to consumers, small-and medium-sized businesses and large enterprises,including customers in the government,health and education sectors.HP was the world's leading PC manufacturer from 2007 to Q2 2013.It specializes in developing and manufacturing computing, data storage, and networking hardware, designing software and delivering services. Major product lines include personal computing devices, enterprise and industry standard servers, related storage devices, networking products, software and a diverse range of printers and other imaging products.</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/sprinklr.png" height="100px" width="300px">
							<div id="overlay">Sprinklr is a company that develops and markets a social software platform called Sprinklr. Sprinklr's software helps very large enterprises manage consumer experiences in social media.Sprinklr helps large enterprises with social media marketing, social advertising, content management, collaboration, advocacy and social media monitoring among other capabilities.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/dell.jpeg" height="100px" width="300px">
							<div id="overlay">Dell is an American privately owned multinational computer technology company based in Round Rock, Texas, United States, that develops, sells, repairs and supports computers and related products and services. Bearing the name of its founder, Michael Dell, the company is one of the largest technological corporations which sells personal computers,servers, data storage devices, network switches, software, computer peripherals, HDTVs,cameras, printers, MP3 players and also electronics built by other manufacturers. The company is well known for its innovations in supply chain management and electronic commerce, particularly its direct-sales model and its "build-to-order" or "configure to order" approach to manufacturing—delivering individual PCs configured to customer specifications.</div>
						</div>						
					</td>
				</tr>


				<tr>
					<td>
						<div id="texthover">
							<img src="images/deloitte.png" height="100px" width="300px">
							<div id="overlay">Deloitte Touche Tohmatsu Limited commonly referred to as Deloitte, isa UK private company, limited .It is one of the "Big Four" professional services firms along with PwC, EY, and KPMG. Its global headquarters are located in the United States.Deloitte is the largest professional services network in the world by revenue and by the number of professionals. Deloitte provides audit, tax, consulting, enterprise risk and financial advisory services with more than 200,000 professionals in over 150 countries.n FY 2013–14, it earned a record $34.2 billion USD in revenues.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/capco.png" height="100px" width="300px">
							<div id="overlay">The Capital Markets Company N.V.referred to as Capco, is a global business and technology consultancy based in Antwerp, Belgium with offices in financial centers across North America, Europe, Asia, and Africa. Capco is a subsidiary of FIS company based in Jacksonville, Florida.Capco works only in the financial services industry, unlike the Big Four professional services firms.As of September 1, 2013, Capco had approximately 2,000 employees internationally, and 20 offices.Capco specializes in six financial services sectors: banking; capital markets; finance, risk and compliance; insurance; technology; and wealth and investment management. The company claims its current and past clients include about 75% of the world’s global financial services institutions.</div>
						</div>						
					</td>
				
					<td>
						<div id="texthover">
							<img src="images/nokia.jpeg" height="100px" width="300px">
							<div id="overlay">Nokia Oyj is a Finnish multinational communications and information technology company. Nokia is headquartered in Espoo, Uusimaa, in the greater Helsinki metropolitan area.In 2014, Nokia employed 61,656 people across 120 countries, conducts sales in more than 150 countries and reported annual revenues of around €12.73 billion.Nokia is a public limited-liability company listed on the Helsinki Stock Exchange and New York Stock Exchange.It is the world's 274th-largest company measured by 2013 revenues according to the Fortune Global 500.</div>
						</div>						
					</td>
				</tr>


				<tr>
					<td>
						<div id="texthover">
							<img src="images/titan-cms.jpg" height="100px" width="300px">
							<div id="overlay">Titan CMS is a web content management system (CMS)for building public websites, intranets and extranets.Version 5.8 was released on September 1, 2011.Titan CMS is built on Microsoft C#.NET 4.0, SQL 2008 R2.Titan CMS is developed and supported by Northwoods Software. The company was founded in 1997 and is based in Brown Deer, Wisconsin. Northwoods CEO is Patrick Bieser.Titan CMS offers web and data management, e-commerce, SEO, third-party code integration, site analytics, workflow and security.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/unisys.jpeg" height="100px" width="300px">
							<div id="overlay">Unisys Corporation is an American global information technology company based in Blue Bell, Pennsylvania, that provides a portfolio of IT services, software, and technology.Unisys traces its roots back to the founding of American Arithmometer Company (later Burroughs Corporation) in 1886 and the Sperry Gyroscope Company in 1910. Unisys predecessor companies also include the Eckert–Mauchly Computer Corporation, which developed the world's first commercial digital computers, the BINAC, and the UNIVAC.</div>
						</div>						
					</td>
				
					<td>
						<div id="texthover">
							<img src="images/airwatch.jpg" height="100px" width="300px">
							<div id="overlay">AirWatch is an Atlanta-based provider of enterprise mobility management (EMM) software and standalone management systems for content, applications and email.In July 2013, the company acquired Motorola Solutions's MSP (Mobility Services Platform) and extended management capabilities to ruggedized devices.AirWatch was founded in 2003 as Wandering WiFi by John Marshall, who currently serves as president and CEO. Since 2006 Alan Dabbiere is the chairman.In February 2013, AirWatch received its first round of funding, a $200 million investment from Insight Venture Partners and Accel.On February 24, 2014 VMware acquired AirWatch for approximately $1.181B in cash and approximately $364M of installment payments and assumed unvested equity. </div>
						</div>						
					</td>
				</tr>



				<tr>
					<td>
						<div id="texthover">
							<img src="images/yokogawa.gif" height="100px" width="300px">
							<div id="overlay">Yokogawa Electric Corporation is a Japanese electrical engineering and software company, with businesses based on its measurement, control, and information technologies.It has a global workforce of over 19,000 employees, 84 subsidiary and 3 affiliated companies operating in 55 countries.The company is listed on the Tokyo Stock Exchange and is a constituent of the Nikkei 225 stock index.Yokogawa pioneered the development of distributed control systems and introduced its Centum series DCS in 1975.Some of Yokogawa's most recognizable products are production control systems, test and measurement instruments, pressure transmitters, flow meters, oxygen analyzers, and fieldbus instruments.</div>
						</div>						
					</td>

					<td>
						<div id="texthover">
							<img src="images/benz.jpeg" height="100px" width="300px">
							<div id="overlay">Mercedes-Benz is a German automobile manufacturer, a multinational division of the German manufacturer Daimler AG. The brand is used for luxury automobiles, buses, coaches, and trucks. The headquarters of Mercedes-Benz is in Stuttgart, Baden-Württemberg, Germany.The name first appeared in 1926 under Daimler-Benz, but traces its origins to Daimler-Motoren-Gesellschaft's 1901 Mercedes and to Karl Benz's 1886 Benz Patent-Motorwagen, which is widely regarded as the first gasoline powered automobile. Mercedes-Benz's slogan is "Das Beste oder nichts". Mercedes-Benz is part of the "German Big 3" luxury automakers, along with Audi and BMW, which are the best-selling luxury automakers in the world.</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/subex.jpg" height="100px" width="300px">
							<div id="overlay">Subex Limited is a global provider of Business Support Systems (BSS) for Communications Service Providers (CSPs) headquartered in Bangalore, India.The company pioneered an integrated approach to the monitoring, measurement and control of a communications service provider's revenues through an end-to-end infrastructure which it calls the Revenue Operations Centre (ROC).Subex Ltd was founded by Subash Menon and Alex PJ in 1992 with $400 primarily as a fibre optics company. However, the company soon shifted focus into telecom fraud prevention software.Since its inception, Subex has expanded both organically and through multiple acquisitions.</div>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div id="texthover">
							<img src="images/mindtree.jpeg" height="100px" width="300px">
							<div id="overlay">Mindtree is a multinational information technology and outsourcing company headquartered in Bengaluru, India and New Jersey. Founded in 1999, the company employs approximately 14,000 employees with annual revenue of $583 million.Mindtree sells technology services. The company deals in e-commerce, mobile applications, cloud computing, digital transformation, business intelligence, data analytics, testing, infrastructure, EAI and ERP, with more than 200 clients and offices in 14 countries.Its largest operations are in India and major markets are United States and Europe. The company was formed on 18th August 1999 by ten IT professionals, who formerly worked for Cambridge Technology Partners, Lucent Technologies, and Wipro.</div>
						</div>						
					</td>
				
					<td>
						<div id="texthover">
							<img src="images/vmware_logo.gif" height="100px" width="300px">
							<div id="overlay">VMware,is a US software company that provides cloud and virtualization software and services,and claims to be the first to commercially successfully virtualize the x86 architecture.Founded in 1998, VMware is based in Palo Alto, California. In 2004 it was acquired by and became a subsidiary of EMC Corporation, then on August 14, 2007, EMC sold 15% of the company in a New York Stock Exchange IPO. The company trades under the symbol VMW.VMware's desktop software runs on Microsoft Windows, Linux, and Mac OS X,while its enterprise software hypervisors for servers, VMware ESX and VMware ESXi, are bare-metal hypervisors that run directly on server hardware without requiring an additional underlying operating system</div>
						</div>						
					</td>
					<td>
						<div id="texthover">
							<img src="images/yml_w.png" height="100px" width="300px">
							<div id="overlay">Y Media Labs, Inc. is an interactive digital agency specializing in mobile solutions headquartered in San Francisco, California.The company has been made well known for its work with PayPal, EMC, Symantec, Safeway, Bud Light, BBC, Sesame Street, the Intro To Letters series and many others. Established in 2009, its main goal is to provide end-to-end solutions in mobile app development. It created a niche in the industry with specialization in enterprise mobile applications across all major platforms including Apple iOS (iPad, iPhone, iPod Touch), RIM BlackBerry, Google Android, Microsoft Windows Mobile and Symbian</div>
						</div>						
					</td>
				</tr>


				<tr>
					<td>
						<div id="texthover">
							<img src="images/utc-logo.jpg" height="100px" width="300px">
							<div id="overlay">UTC Aerospace Systems (UTAS) was formed by United Technologies Corporation in August 2012 by combining two companies: Goodrich Corporation and Hamilton Sundstrand. UTC Aerospace Systems is headquartered in Charlotte, North Carolina.UTC Aerospace Systems is one of the world’s largest suppliers of aerospace and defense products. They are engaged in designing, manufacturing and servicing systems and components for commercial, regional, business and military aircraft, helicopters and other platforms. UTC Aerospace Systems is also a major supplier to international space programs.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/bosch.gif" height="100px" width="300px">
							<div id="overlay">Robert Bosch GmbH or Bosch, is a German multinational engineering and electronics company headquartered in Gerlingen, near Stuttgart, Germany. It is the world's largest supplier of automotive components measured by 2011 revenues.The company was founded by Robert Bosch in Stuttgart in 1886.Bosch's core products are automotive components, industrial products and building products.</div>
						</div>						
					</td>
				
					<td>
						<div id="texthover">
							<img src="images/aricent.jpg" height="100px" width="300px">
							<div id="overlay">Aricent is a pure-play product engineering service and software firm. It develops software, provides technology services, and works with networking, telecom, software, semiconductor, Internet, and industrial companies.Aricent is headquartered in Redwood City, California, with operations in 19 countries worldwide;investors are KKR & Co. L.P. and Sequoia Capital.The company claims to employ more than 10,000 consultants, designers, and engineers at over 30 locations worldwide. Aricent has been ranked as top exports in the Top 20 IT services export firms in India in terms of total revenue in the 24th annual survey conducted by Dataquest, CyberMedia group journal in July 2010.In 2011, Aricent Technologies was ranked top branded in Indian IT companies and ranked top in the Fortune India 500list.</div>
						</div>						
					</td>
				
				</tr>
				<tr>
					<td><a name="mass"></a>
						<div id="texthover">
							<img src="images/tata-consultancy-services.gif" height="100px" width="300px">
							<div id="overlay">Tata Consultancy Services Limited (TCS) is an Indian multinational information technology (IT) service, consulting and business solutions company headquartered in Mumbai, Maharashtra.TCS operates in 46 countries.It is a subsidiary of the Tata Group and is listed on the Bombay Stock Exchange and the National Stock Exchange of India. TCS is one of the largest Indian companies by market capitalization ($80 billion) and is the largest India-based IT services company by 2013 revenues.TCS is now placed among the ‘Big 4’ most valuable IT services brands worldwide. In 2013, TCS is ranked 57th overall in the Forbes World's Most Innovative Companies ranking, making it both the highest-ranked IT services company and the first Indian company.It is the world's 10th largest IT services provider, measured by the revenues.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/wipro.jpeg" height="100px" width="300px">
							<div id="overlay">Wipro Limited (Western India Products Limited) is a Global multinational IT Consulting and System Integration services company headquartered in Bangalore, India.As of March 2015, the company has 158,200 employees servicing over 900 of the Fortune 1000 corporations with a presence in 75 countries.On 31 January 2015, its market capitalization was approximately ₹1,65,000 crores, making it India's 10th largest publicly traded company and seventh largest IT services firm in the World.</div>
						</div>						
					</td>
						<td>
						<div id="texthover">
							<img src="images/Tech-Mahindra-jobs.jpg" height="100px" width="300px">
							<div id="overlay">Tech Mahindra Limited is an Indian multinational provider of information technology (IT), networking technology solutions and business support services (BPO) to the telecommunications industry.Tech Mahindra is a part of the Mahindra Group conglomerate. Anand Mahindra is the founder of Tech Mahindra. Earlier it was known as Mahindra British Telecom.It is headquartered at Pune, Maharashtra, India. Tech Mahindra was ranked #5 in India's software services (IT) firms and overall #111 in Fortune India 500 list for 2012.Tech Mahindra, on 25 June 2013, announced the completion of a merger with Mahindra Satyam.</div>
						</div>						
					</td>

					
				</tr>
				<tr>
					<td>
						<div id="texthover">
							<img src="images/accenture.jpg" height="100px" width="300px">
							<div id="overlay">Accenture plc is a multinational management consulting, technology services, and outsourcing company.Its incorporated headquarters have been in Dublin, Ireland since September 1, 2009. It is the world's largest consulting firm as measured by revenues and is a Fortune Global 500 company.As of 2014, the company reported net revenues of $30.0 billion with approximately 323,000 employees, serving clients in more than 200 cities in 56 countries.In 2012 Accenture had about 80,000 employees in India, more than in any other country, about 40,000 in the US, and about 35,000 in the Philippines. Accenture's current clients include 89 of the Fortune Global 100 and more than three-quarters of the Fortune Global 500.</div>
						</div>
					</td>
					<td>
						<div id="texthover">
							<img src="images/amazon.jpg" height="100px" width="300px">
							<div id="overlay">Amazon.com, Inc.is an American electronic commerce company with headquarters in Seattle, Washington. It is the largest Internet-based retailer in the United States.Amazon.com started as an online bookstore, but soon diversified, selling DVDs, Blu-rays, CDs, video downloads/streaming, MP3 downloads/streaming, software, video games, electronics, apparel, furniture, food, toys and jewelry. The company also produces consumer electronics—notably, Amazon Kindle e-book readers, Fire tablets, Fire TV and Fire Phone — and is a major provider of cloud computing services. Amazon also sells certain low-end products like USB cables under its inhouse brand AmazonBasics.</div>
						</div>						
					</td>
				</tr>
				</tbody>
			</table>


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
    <td></td>
    <td></td>
    <td></td>
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
