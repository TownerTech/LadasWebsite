<!DOCTYPE html>
<html>
	<head>
		<title>Ladas Law Firm</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<!-- <meta charset="UTF-8">  -->
		<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css">
		<link href="css/normalize.css" rel="stylesheet" type="text/css">
		<link href="css/main.css" rel="stylesheet" type="text/css">
		<link href="favicon.ico" rel="icon" type="image/x-icon" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	    	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
		<script type="text/javascript" src="js/map.js"> </script>
	</head>
	<body onload="initialize()">
		<!--<div id="socialMediaBar"></div>-->
		<!--Dropdowns-->
		<div id="header">
			<div class="contentWrapper">			
				<div id="titleWrapper">
					<img src="img/icon_256.png"/>
					<div id="titlebox">
					<h1 id="title">Ladas Law Firm</h1>
					<h2>Attorneys At Law</h2>
					</div>
				</div>
				<div id="topContact">
					<h2>(781) 829-9191</h2>
				</div>
			</div>
			<div id="nav">
				<div class="contentWrapper">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="attorneys.php">Attorneys</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
<!-- MOM's stuff - BEGIN-->
		<div id="practiceMenuWrap">		
           <div class="boxWrap">            
            	<div class="box">
                	<h1><a href="#" class="practiceHeader">Worker's Compensation</a></h1>
                    	<div><a href="#"><img src="img/workcomp.jpg"/></a></div>
                </div>
                <div class="box">
                	<h1><a href="#" class="practiceHeader">Social Security Disability</a></h1>
                    	<div><a href="#"><img src="img/ssdins.jpg"/></a></div>
                </div>
                <div class="box">
                	<h1><a href="#" class="practiceHeader">Motor Vehicle Accidents</a></h1>
                    	<div><a href="#"><img src="img/motorvehicleaccident.jpg"/></a></div>
                </div>
                <div class="box" id="last">
                	<h1><a href="motorcycle.php" class="practiceHeader" >Motorcycle Accidents</a></h1>
                    	<div><a href="motorcycle.php"><img src="img/motorcycleaccident.jpg"/></a></div>
                </div>
			</div>	
		</div>			
		<div id="mainContent">
			<div class="contentWrapper">
				<img src="img/sladas.jpg" alt="Stephen Ladas">
				<p>In today's competitive legal environment you must have an attorney who is experienced, 
					knowledgeable, and capable. We work closely with our clients in order to gain a complete
					understanding of their goals and objectives. 
				</p>	
				<p>Whether you are seeking workers compensation benefits or Social Security Disability Insurance 
					benefits, or both, an experienced lawyer may make the difference between receiving the benefits 
					you need or being denied. At Ladas Law Firm, P.C., we represent individuals who have been injured 
					on the job and individuals disabled by illness or injury, and will help you through the complicated 
					process of filing for and obtaining benefits. For a free initial consultation with Attorney J. 
					Stephen Ladas, please call <span class="phone">(781) 829-0099</span> or contact us online.
				</p>	
			</div>
		</div>
		<div id="footer">
			<div class="contentWrapper">	
				<div id="columnWrapper-1">
					<p class="company">Ladas Law Firm</p>
					<p class="address">90 Rockland Street, Suite 4 <br>Hanover, MA 02339</p>
					<p class="email"><a href="mailto:sladas@ladaslaw.com;">Email: sladas@ladaslaw.com</a></p>
					<br>
					<p class="phone">Local: 781-829-9191<br>Toll Free: 800-339-3332<br>Fax: 781-829-2161</p>
				</div>
				<div id="columnWrapper-2">
					<div id="mapCanvas"></div>
				</div>
			</div>
			<div id="rowWrapper-1">
				<div class="contentWrapper">
					<a href="http://www.mass.gov/portal/" class="resource" alt="The Official Website of the Commonwealth of Massachusetts"><img src="img/mass.gov.gif"></a>
					<a href="http://www.socialsecurity.gov" class="resource" alt="Official Social Security Website"><img src="img/ssa.gif"></a>
					<a href="http://www.mass.gov/courts/index.html" class="resource" alt="The Official Website of the Massachusetts Judicial Branch"><img src="img/masscourt.jpg"></a>
					<a href="http://www.nosscr.org/" class="resource" alt="National Organization of Social Security Claimants' Representatives website"><img src="img/nosscr.png"></a>
				</div>
			</div>
	<!-- <?php include("inc/footer.php"); ?> -->
	<!-- MOM's stuff - END -->
	</body>
</html>