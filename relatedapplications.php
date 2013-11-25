<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  Related Applications</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="red">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="resources">Related Applications</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="resources">Related Applications</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-8 large-offset-2 small-12 columns text-justify">
		<p>
        	Below are some applications that in some way relate to WISDM (Wireless Sensor Data Mining). 
            Some of the applications clearly could be put into several categories, but we have tried to 
            associate each with the most relevant category. Note that many of the applications are related 
            to health, but we have not yet made that into a standalone category.
		</p>
        
        <h2>Activity Monitoring</h2>
        <ul>
        	<li>
            <a href="http://www.fitbit.com/" name="fitbit">Fitbit</a> is a $99 commercial product that uses a 
            clip-on accelerometer-based sensor to track your daily activity levels. Its main purpose is to 
            track fitness related activities as well as the amount of sleep that you get. It requies a base-station, 
            connected to your PC, to periodically collect the accelerometer data.
            </li>

            <li>
            <a href="http://www.worksmartlabs.com/">WorkSmart Labs</a> has a product called
            <a href="http://www.worksmartlabs.com/cardiotrainer/about.php">CardioTrainer</a>
            that runs on Android phones and tracks your exercise activities. It also lets
            you <a href="http://www.worksmartlabs.com/blog/2010/09/15/google-health-and-cardiotrainer/">
            upload your data to Google Health</a>.
			</li>

            <li>
            A video of the <a href="http://droidsensors.com/2010/01/activity-recognition-with-mobile-phone-and-sensors/">
            MotionBands</a> cell phone-based activity recognition system is provided. A paper describing this system is 
            available from our related work page (search for MotionBand).
			</li>

            <li>
            GE Health Care has a product called
            <a href="http://www.gehealthcare.com/usen/telehealth/quietcare/proactive_eldercare_technology.html">QuietCare</a>
            which is deployed in Nursing Homes to monitor the elderly. However, it requires
            specialized equipment. They say that
            "Small wireless and camera-free sensors strategically located in the
            resident's apartment learn their routine. The sensors capture data and
            transmit the information to an off-site server for analysis. Information
            provided allows immediate response to potential emergencies, or improvements
            in the care plan related to behavioural changes and indication of possible
            emerging health trends." There is a
            <a href="http://www.youtube.com/watch?v=DIs5M-TQH9c">YouTube video of the
            system in action</a>.
			</li>

            <li>
            Researchers have developed an
            <a href="http://www.smartplanet.com/blog/bulletin/lifesaving-smart-cane-designed-for-seniors/13872">
            electronic "smart" cane</a> that is embedded with
            sensors, a computer, and wireless networking technology. The SmartCane can,
            among other things, detect usage patterns, predicts outcomes, such as a
            fall, and inform the patient or caregiver about how the device is being
            used in the first place. 
			</li>

            <li>
            <a href="http://www.apple.com/ipod/nike/run.html">Nike + iPod</a> lets your
            sneaker talk to your iPod. You put a sensor in your sneaker and data is sent to
            your iPod, which will tell you your pace, distance, and calories burned.
			</li>

            <li>
            The short article
            <a href="http://www.unwiredview.com/2009/05/21/google-wants-to-make-your-android-phone-much-smarter-with-accelerometer-and-other-sensors/">Google wants to make
            your Android Phone much Smarter with Acclerometer and other Sensors</a>
            discusses how your phone can figure out what you are doing and then exploit
            that (e.g., play music when you start your 6am run).
			</li>
		</ul>
        
        <h2>GPS / Location Data Mining</h2>
        <ul>
        	<li>
            <a href="http://www.sensenetworks.com/">Sense Networks</a> is a company that
            gathers location data from mobile devices and then applies predictive analytics
            to it. Their first application is
            <a href="http://www.sensenetworks.com/citysense.php">Citysense</a>, which is
            an application for real-time nightlife discovery and social navigation. It can
            answer questions like "Where is everyone going right now"?
			</li>
            <br />
            <li>
            <a href="http://www.google.com/lattitude">Google Latitude</a> tracks the GPS data
            from users and allows you to see the locations of your friends and also summarizes
            location data about you for your own use. At present there does not seem to be much
            data mining, but certainly this application shares much in common with possible GPS
            data mining applications.
			</li>
		</ul>
    </div>    
    </div>
<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
