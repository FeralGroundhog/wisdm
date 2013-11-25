<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  Resources</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="red">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="resources">Resources</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="resources">Resources</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-12 small-12 columns">
		<h2>Developing With WISDM</h2>
        
        <h3>Getting Started</h3>
    	<div class="row">
            <div class="large-10 large-offset-1 columns text-justify">
                <p>
                    To understand more about the WISDM Lab, begin by reading some of our papers 
                    found on the <a href="publications.php">publications page</a>. Specifically, our 
                    <a href="public_files/btas10.pdf">biometrics paper</a>, our <a href="public_files/sensorKDD-2010.pdf">
                    activity recognition paper</a>, and our <a href="public_files/Lockhart-Design-SensorKDD11.pdf">WISDM 
                    architecture paper</a>.
                    Be sure to check out <a href="http://www.ibm.com/developerworks/java/tutorials/j-introtojava1/index.html">
                    this helpful link</a> for new java developers for an introduction to java programming.
                    Also, please download our mobile app for the Android&trade; OS (2.3+), 
                    <a href="https://play.google.com/store/apps/details?id=edu.fordham.cis.wisdm.actitracker.client">
                    Actitracker</a>, from the Android Marketplace.
                </p>
            </div>
        </div>
        
		<h3>Android Development</h3>
        <div class="row">
            <div class="large-9 small-12 columns text-justify">
                <p>
                    One of the most useful resources is the <a href="http://developer.android.com">
                    Home page for Android Developers</a>. It has a great deal of information and everything you need to 
                    start developing. To start developing follow these 3 steps:<br />
                    <ol>
                        <li>Download the SDK using the link below for the appropriate operating system:<br />
                            <ul>
                                <li><a href="http://developer.android.com/sdk/download.html?v=android-sdk_r04-windows.zip">Windows</a></li>
                                <li><a href="http://developer.android.com/sdk/download.html?v=android-sdk_r04-mac_86.zip">Mac</a></li>
                                <li><a href="http://developer.android.com/sdk/download.html?v=android-sdk_r04-linux_86.tgz">Linux</a></li>
                            </ul>
                            You will need to unzip the files into one folder and then open the folder and run SDK Setup.exe. 
                            Be sure your firewall is open (or add the exe file to the permision list set to allow. Press Update 
                            All. Let it fetch updates and when it asks which to install, select Accept All and Install Selected.</li>
                        <li>Download <a href="http://www.eclipse.org/downloads/">Eclipse</a>. You want the "Eclipse IDE for Java Developers", second from the top. Unzip and install. </li>
                        <li>Configure Eclipse by running it and following the directions for <a href="http://developer.android.com/sdk/installing/installing-adt.html"> installing and updating the Android Development Tools</a>.</li>
                        <li>Start a new project. With Eclipse open, hit the button to the right of the phone icon on the top toolbar labled "Opens a wizard to help create a new Android project. Use the <a href="http://developer.android.com/guide/index.html">Developer's Guide</a> to help start your app.</li>
                    </ol>
                </p>
            </div>
            <div class="large-3 columns hide-for-small"><img src="includes/img/phone_N4.png" alt="Actitracker, Available on Google Play!" border="0" /></div>    
        </div>
        
        <div class="row">
            <div class="large-3 columns hide-for-small"><img src="includes/img/reading.png" alt="Android Reading" border="0" /></div>
            <div class="large-9 columns">
            <br /><br />
            <h3>WISDM Library</h3>
                <ul>
                    <li>Hello, Android: Introducting Google's Mobile Development Platform, 3rd Ediition, Ed Burnette.</li>
                    <li>Android Application Development for Dummies, Donn Felker</li>
                    <li>Android Wireless Application Development, Shane Conder and Lauren Darcy</li>
                    <li>Pro Android 2, Sayed Hashimi, Satya Kromatineni, Dave Maclean</li>
                    <li>Pro Android 3, Satya Kromatineni, Dave Maclean, Sayed Hashimi</li>
                </ul>
            </div>
            
        </div>
    </div>
    </div>
<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
