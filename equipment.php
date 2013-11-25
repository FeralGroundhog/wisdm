<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  Equipment</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="blue">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="about">Equipment</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="about">Equipment</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-8 large-offset-2 columns text-justify">
        <p>Our platform currently relies on Android-based cell phones for collecting and 
        transmitting sensor data. While the various Android cell phones will largely share
         common capabilities (at least the ones that we rely on for this project), there may be 
         some differences and our projects uses a variety of these devices. Below are the Android 
         cell phones that we are actively using and who is responsible for them. Some of the cell
          phones have cellular service while some do not (we can still retrieve data from the ones 
          without cellular service via a WiFi connection to our server or via a USB connection to the 
          phone).</p>
    </div>    
    </div>
    
    <div class="row">
    <div class="large-8 large-offset-2 columns">
		<?php
			$path = dirname(__FILE__) . "/includes/files/phone-list.csv";
			if( ($handle = fopen( $path, 'r' )) !== false) {
				$output = '<table><thead><tr>
							<th width="50">ID</th>
							<th width="200">Manufacturer</th>
							<th width="200">Model</th>
							<th width="100">Carrier</th>
							<th width="150">Primary Use</th>
						</tr></thead><tbody>';
				$counter = 1;
				while(($data = fgetcsv( $handle )) !== false){
					$output .= '<tr><td>'.$counter.'</td>';
					foreach( $data as $value )
						$output .= sprintf( '<td>%s</td>', $value );
					$output .= '</tr>';
					$counter++;
				}
				fclose( $handle );
				$output .= '</tbody></table>';
			}
			echo $output;
		?>
	</div>
    </div>
    
    <div class="row">
    <div class="large-8 large-offset-2 columns text-justify">
    	<h2>Our Hardware</h2>
        <p>
        	<ul>
            	<li>
                    Lenovo Thinkserver, Fedora 19 x64
                    <ul>
                        <li>2 x Quad-Core Intel Xeon Processors @ 2.16GHz, each</li>
                        <li>24GB RAM</li>
                        <li>4 x 250GB HDD, RAID 5</li>
					</ul>
                </li>
                <li>
                	HP ProLiant Blade Server, Fedora 19 x64
                    <ul>
                    	<li>2 x Eight-Core AMD Processors @ 2.60 GHz, each</li>
                        <li>34GB RAM</li>
                    </ul>
				</li>
                <li>Fitbit Ultra (2) - <a href="relatedapplications.php#fitbit">Click here to learn how we use them</a></li>
                <li>
                	Zeyphr HxM
                	<ul><li>A bluetooth sensor that delivers heart rate, speed, and distance to supported smartphone fitness applications About Our Hardware</li></ul>
                </li>
        	</ul>
		</p>
        
        <h2>Mobile Sensors</h2>
        <h3>Accelerometers and Electronic Compasses</h3>
        <p>
        	Some general information on accelerometers is available below:
            <ul>
                <li><a href="http://www.dimensionengineering.com/accelerometers.htm">A Beginner's Guide to Accelerometers</a>, by Dimension Engineering, LLC (2009)</li>
                <li><a href="http://www2.usfirst.org/2005comp/Manuals/Acceler1.pdf">Accelerometers and How They Work</a> by Texas Instruments (2009)</li>
                <li><a href="http://en.wikipedia.org/wiki/Accelerometer">Wikipedia entry for accelerometers</a></li>
            <br />
                <li>The <a href="http://storm.cis.fordham.edu/~gweiss/wisdm-papers/BMA150-accelerometer.pdf">Bosch Sensortec's 3-axis BMA150</a> is used for the HTC Hero.</li>
                <li>The <a href="http://storm.cis.fordham.edu/~gweiss/wisdm-papers/G1specs.jpg">T-Mobile G1 Specs</a> shows that is uses an AKM #AK89761 6-Axis Electronic Compass.</li>
                <li>Apple uses an <a href="http://storm.cis.fordham.edu/~gweiss/wisdm-papers/Ipod-accelerometer.pdf">LIS302DL accelerometer</a> in its iPhone, iPod Touch, and 4th and 5th generation iPod Nano.</li>
                <li>The <a href="http://www.asahi-kasei.co.jp/akm/en/product/ak8973nbs/ak8973nbs.html">Asahi Kasei's AK8973</a> digital compass is used in the HTC Hero as well as in newer iPhones.</li>
			</ul>
        </p>
    </div>
    </div>
    
<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
