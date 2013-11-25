<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab: Wireless Sensor Data Mining</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="green">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?>      
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="home">Wireless Sensor<br />Data Mining</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="home">Wireless Sensor Data Mining</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->

    <div class="row">
        <div class="small-12 columns show-for-small text-center">
			<div class="panel radius callout">
				<?php require ('includes/php/global-announcements.php'); ?>
			</div>
            
            <h6>Click the button below to <br />register for our mailing list</h6>
            <a href="http://www.dsm.fordham.edu/mailman/listinfo/wisdm" class="button radius">Sign Up!</a>
        </div>
        
        <div class="large-8 large-offset-1 small-12 columns text-justify"> <!-- MAIN CONTENT AREA -->
        	<p>The WISDM (Wireless Sensor Data Mining) Lab is concerned with collecting the sensor data from smart phones and other modern 
            mobile devices (e.g., tablet computers, music players, etc.) and mining this sensor data for useful knowledge. Currently our efforts are 
            mainly focused on the acclerometer and GPS sensor data from these devices, but in the future we will mine the audio sensors (microphones), 
            image sensors (cameras), light sensors, proximity sensors, temperature sensors, pressure sensors, direction sensors (compasses) and 
            various other sensors that reside on these devices.</p>
			
            <p>Our work on activity recognition allows us to recognize many of the physical activities that a smart phone user is performing (walking, 
            jogging, sitting, etc.) based on the user's movements, as measured by the smart phone's tri-axial accelerometer. This work is described in 
            a <a href="includes/files/sensorKDD-2010.pdf">publication</a> and will soon result in the public deployment of our 
            <a href="https://www.actitracker.com">Actitracker</a> service, which will permit a user to track the activities that they or their family perform, 
            via a web-based interface, by downloading our smartphone app. Our work on accelerometer-based biometric identification is also detailed 
            in <a href="includes/files/btas10.pdf">another publication</a>, which describes how we can identify a user based on his or her acclerometer 
            data. We are in the process of exploring how GPS data can be mined to provide valuable services and have made a lot of progress in this 
            area since the summer of 2012.</p>
        	<hr />
            <p>The WISDM Lab is led by <a href="http://storm.cis.fordham.edu/~gweiss">Dr. Gary Weiss</a>, a faculty member in the department 
            of <a href="http://www.cis.fordham.edu">Computer and Information Science</a> at <a href="http://www.fordham.edu">Fordham University</a>. 
            The WISDM Lab includes <a href="members.php">over a dozen members</a>, most of which are Fordham undergraduates. Our project is 
            currently based on the Android platform and Android-based smartphones. This research has been generously supported by Fordham 
            University, Fordham's Undergraduate College at Rose Hill, the National Science Foundation, and Google Inc.</p>
        	<hr />
			<p>Join us at one of our meetings! The WISDM Lab usually meets once a week in John Mulcahy Hall at Fordham University's 
            Rose Hill Campus. If interested, please contact <a href="http://storm.cis.fordham.edu/gweiss">Dr. Weiss</a> for the latest updates.</p>
        </div> <!-- END MAIN CONTENT AREA -->
        
        <div class="large-3 columns show-for-medium-up">
        	<div class="panel radius callout text-center">
            	<?php require ('includes/php/global-announcements.php'); ?>
            </div>
            
            <div class="panel radius text-center">
                <?php include_once ('includes/php/include-twitter.php'); ?>
            </div>
            
            <div  class="panel radius text-center">
            	<h6>Click the button below to <br />register for our mailing list</h6>
            	<a href="http://www.dsm.fordham.edu/mailman/listinfo/wisdm" class="button radius">Sign Up!</a>
            </div>
        </div>
    
    </div>

<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
