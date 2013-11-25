<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  About Us</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="blue">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="about">What is WISDM</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="about">What is WISDM</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <section class="row">
    <div class="small-12 columns show-for-small">
    	<div class="panel radius callout text-center">
        	<?php require_once ('includes/php/global-announcements.php'); ?>
        </div>
    </div>
    
    <div class="large-9 small-12 text-justify columns">
    	<h2>An Overview</h2>
        <p>Mobile wireless devices, such as cell phones, PDA's, music players, notebook computers, are 
        becoming increasingly powerful and sophisticated. Not only are their computing power and 
        communication abilities expanding, but they now routinely incorporate a variety of sensors, 
        including accelerometers, microphones, cameras, light sensors, and proximity sensors. Millions 
        of people now carry these sensor-enabled mobile devices, which can either transmit the sensor data 
        wirelessly to a server for remote processing or can process the data locally. This situation provides 
        dramatic new opportunities for data mining and also makes it possible to deploy intelligent data 
        mining applications on a scale not previously imaginable. This is where our WISDM (WIreless Sensor 
        Data Mining) Lab comes in.</p>
        
        <p>In this lab we collect and mine sensor data from these wireless devices. The scope of this 
        project is enormous and there will be many opportunities for us to make an impact on how these 
        smart mobile devices are used. Our initial focus was mainly on mining the accelerometer data, for 
        tasks such as 	biometric identification and activity recognition (summarized below), but while we 
        are continuing on in that area, we are now also actively looking into mining other sensor data, such 
        as GPS data. Our initial platform will be based on the phones running Google's Android operating 
        system. Our preliminary work, which was based on a research oriented mobile device from Sun 
        Microsystems, showed that we could accurately and reliably:
        
			<ul>
            	<li>Identify a user or verify the identity of a user based on his/her accelerometer data (behavioral biometric identification)</li>
                <li>Identify the physical task that a user is performing (e.g., walking, jogging) based on the accelerometer data (activity recognition)</li>
			</ul>
        
        </p>

        
		<p>This work overlaps with a related project that is jointly being conducted with Dr. Warren Tryon 
        from the Psychology department. While the WISDM project is quite general and spans all potential 
        data mining applications of all forms of wireless sensor data, the project with Dr. Tryon focuses 
        mainly on the 	accelerometer data and health care applications, leveraging Dr. Tryon's work on actigraphy.</p>
	</div>
    
    <div class="large-3 small-12 columns hide-for-small">
    	<br /><br /><br />
    	<div class="panel radius callout">
        	<h4>Upcoming Events</h4>
        	<p>
				<h6>11/18/2013 </h6>
                <p>General Meeting</p>
            </p>
        </div>
        
        <div class="panel radius">
        	<?php include_once('includes/php/include-twitter.php'); ?>
        </div>
        
        <!--
        <div class="panel radius">
        	Facebook Wall Coming Soon!
        </div>
        -->
    </div>
    </section>


    <section class="row">
    <div class="large-12 columns">
        <hr />
        <h2>Current Projects</h2>
    </div>
    </section>
    
    <section class="row text-center">
        <div class="large-3 columns"><br /><a href="https://www.actitracker.com"><img src="includes/img/actitracker.png" alt="Actitracker" border="0" /></a></div>
        
        <div class="large-9 text-justify columns">
            <p>Actitracker will be the first of the applications that we are working on that we hope to put into production. 
            It will allow researchers and everyday users to track their activities over time and see if they are receiving sufficient 
            physical activities to maintain proper health. By using the raw acceleromter values from an Android smartphone 
            along with a variety of other sensors, Actitracker will be able to provide real time results and detailed activity history 
            on smartphones running Android 2.2 and up.
            <br /><br />
            For more information, please visit the <a href="https://www.actitracker.com">Actitracker</a> website.</p>
        </div>    
    </section>
    
    <section class="row">
    	<div class="large-8 large-offset-2 text-justify columns">
        <hr />
            <p>The WISDM Lab is constantly expanding into new sectors in mobile application development. We are currently 
            working on a variety of projects and expanding upon our original scope to encompass areas such as healthcare, 
            architectural studies and urban analytics while also continuing and improving upon our soft biometric and biometric 
            research. As more details of these projects become public, this page will be updated to reflect the work that we have done.</p>
        </div>
    </section>
<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
