<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab: Dataset</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="purple">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="dataset">Dataset</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="dataset">Dataset</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-12 columns">
    	<div class="section-container vertical-tabs" data-section="vertical-tabs" data-options:"deep_linking: true">
        	<section class="active">
            <p class="title" data-section-title><a href="#activityprediction">Activity Prediction</a></p>
				<div class="content" data-slug="activityprediction" data-section-content>
                	<div class="row">
                    <div class="large-6 small-12 columns">
                    	<h6>Last Updated: Dec. 2, 2012</h6>
                        <p class="dataset-text">
                        This dataset contains data collected through controlled, laboratory conditions. If you are interested in "real world" data, please consider our <a href="#actitracker">Actitracker Dataset</a>.<br /><br />
                        The data in this file corresponds with the data used in the following paper:<br />
                        <blockquote>
                        Jennifer R. Kwapisz, Gary M. Weiss and Samuel A. Moore (2010).
                        Activity Recognition using Cell Phone Accelerometers, 
                        <i>Proceedings of the Fourth International Workshop on Knowledge
                        Discovery from Sensor Data (at KDD-10)</i>, Washington DC. 
                        <a href="includes/files/sensorKDD-2010.pdf">[PDF]</a>
						</blockquote>
                        <p class="dataset-text">
                        When using this dataset, we request that you cite this paper. <br />
                        You may also want to cite our other relevant articles,
                        which can be found <a href="publications.php">here</a>.
                        <br /><br />
                        When sharing or redistributing this dataset, we request that the readme.txt file is always included. 
                        
                        <h3>Statistics</h3>
                        <ul class="dataset-text">
                        	<li><h6>Raw Time Series Data</h6>
                        	<ul>
                            	<li>Number of examples: 1,098,207</li>
                        		<li>Number of attributes: 6</li>
                        		<li>Missing attribute values: None</li>
                        		<li>Class Distribution
                        		<ul>
                                	<li>Walking: 424,400 (38.6%)</li>
                        			<li>Jogging: 342,177 (31.2%)</li>
                        			<li>Upstairs: 122,869 (11.2%)</li>
                        			<li>Downstairs: 100,427 (9.1%)</li>
                        			<li>Sitting: 59,939 (5.5%)</li>
                        			<li>Standing: 48,395 (4.4%)</li>
                        		</ul>
                                </li>
							</ul>
                            </li>
                            <li><h6>Transformed Examples</h6>
                        	<ul>
                            	<li>Number of transformed examples: 5,424</li>
                        		<li>Number of transformed attributes: 46</li>
                        		<li>Missing attribute values: None</li>
                        		<li>Class Distribution
                        		<ul>
                                	<li>Walking: 2,082 (38.4%)</li>
                        			<li>Jogging: 1,626 (30.0%)</li>
                        			<li>Upstairs: 633 (11.7%)</li>
                        			<li>Downstairs: 529 (9.8%)</li>
                        			<li>Sitting: 307 (5.7%)</li>
                        			<li>Standing: 247 (4.6%)</li>
								</ul>
                                </li>
							</ul>
                            </li>
						</ul>
					</p>
                    </div>
                    
                    <div class="large-6 small-12 columns">
                    <a href="includes/datasets/latest/WISDM_ar_latest.tar.gz" class="button radius">Download Latest Version</a><br />
                    
                    <ul class="dataset-text">
                    	<li><h6>Changelog:</h6>
                            <ul>
                                <li><a href="includes/dataset/latest/WISDM_ar_v1.1.tar.gz">(v1.1)</a>
								<ul>
                                	<li>about files updated with summary information</li>
                        			<li>file naming convention updated to include version numbers</li>
                        			<li>readme.txt updated to include relevant papers</li>
                        			<li>WISDM_ar_v1.1_trans_about.txt updated with citation to paper describing the attributes.</li>
								</ul>
                        		</li>
                                <li>(v1.0)
                                <ul>
                                	<li>user names masked with ID numbers 1-36</li>
									<li>dataset initialized</li>
								</ul>
                                </li>
							</ul>
                            </li>
                            <br />
                        	<li><h6>Files:</h6>
								<ul>
                                	<li>readme.txt</li>
                        			<li>WISDM_ar_v1.1_raw_about.txt</li>
                        			<li>WISDM_ar_v1.1_trans_about.txt</li>
                        			<li>WISDM_ar_v1.1_raw.txt</li>
                        			<li>WISDM_ar_v1.1_transformed.arff</li>
                        		</ul>
                            </li>
						</ul>
						
                    </div> <!-- END INNER COLUMNS -->
				</div> <!-- END INNER ROW -->
                </div> <!-- END TAB CONTENT -->
            </section>
            
            <section>
            <p class="title" data-section-title><a href="#actitracker">Actitracker</a></p>
                <div class="content" data-slug="actitracker" data-section-content>
                	<div class="row">
                    <div class="large-6 small-12 columns">
                    	<h6>Last Updated: Oct. 22, 2013</h6>
                        <p class="dataset-text">
						This dataset contains "real world" data. If you are interested in controlled testing data, please consider our <a href="#activityprediction">Actitivty Prediction Dataset</a>.<br /><br />
                        
                        This data has been released by the Wireless Sensor Data Mining  			
                        (WISDM) Lab. <http://www.cis.fordham.edu/wisdm/>

                        The data in this set were collected with our Actitracker system,
                        which is available online for free at <http://actitracker.com>
                        and in the Google Play store.  The system is described in the 
                        following paper: <br />
                        <blockquote>
                        Jeffrey W. Lockhart, Gary M. Weiss, Jack C. Xue, Shaun T. Gallagher, 
						Andrew B. Grosner, and Tony T. Pulickal (2011). "Design Considerations
						for the WISDM Smart Phone-Based Sensor Mining Architecture," <i>Proceedings 
						of the Fifth International Workshop on Knowledge Discovery from Sensor 
						Data (at KDD-11)</i>, San Diego, CA.  
                        <a href="includes/files/Lockhart-Design-SensorKDD11.pdf">[PDF]</a>
						</blockquote>
                        <p class="dataset-text">
                        When using this dataset, we request that you cite this paper. <br />
                        You may also want to cite our other relevant articles,
                        which can be found <a href="publications.php">here</a>, specifically:<br />
                        <blockquote>
                        Gary M. Weiss and Jeffrey W. Lockhart (2012). "The Impact of
                        Personalization on Smartphone-Based Activity Recognition,"
                        Proceedings of the AAAI-12 Workshop on Activity Context
                        Representation: Techniques and Languages, Toronto, CA.
                		<br /><br />
                		Jennifer R. Kwapisz, Gary M. Weiss and Samuel A. Moore (2010).
                     	"Activity Recognition using Cell Phone Accelerometers,"
                        Proceedings of the Fourth International Workshop on
                        Knowledge Discovery from Sensor Data (at KDD-10), Washington
                        DC.</blockquote>
                        <br />
                        When sharing or redistributing this dataset, we request that the 
                        readme.txt file is always included. 
					</p>
                    </div>
                    
                    <div class="large-6 small-12 columns">
                    <a href="includes/datasets/latest/WISDM_at_latest.tar.gz" class="button radius">Download Latest Version</a><br />
                    	<ul class="dataset-text">
                            <li><h6>Changelog:</h6>
                            <ul>
                                <li><a href="includes/dataset/latest/WISDM_at_v2.0.tar.gz">(v2.0)</a>
								<ul>
                                	<li>activity label predictions added to unlabeled_transformed</li>
								</ul>
                        		</li>
							</ul>
                            </li>
                            <br />
                        	<li><h6>Files:</h6>
								<ul>
                                	<li>readme.txt</li>
                                    <li>WISDM_at_v2.0_raw_about.txt
									<ul>
                                    	<li>WISDM_at_v2.0_transformed_about.arff</li>
                                        <li>WISDM_at_v2.0_unlabeled_raw_about.txt</li>
                                        <li>WISDM_at_v2.0_unlabeled_transformed_about.arff</li>
									</ul>
                                    </li>
                                    <li>WISDM_at_v2.0_demographics_about.txt</li>
                                    <li>WISDM_at_v2.0_raw.txt</li>
                                    <li>WISDM_at_v2.0_transformed.arff</li>
                                    <li>WISDM_at_v2.0_unlabeled_raw.txt</li>
                                    <li>WISDM_at_v2.0_unlabeled_transformed.arff</li>
                                    <li>WISDM_at_v2.0_demographics.txt</li>
                        		</ul>
                            </li>
                            <br /><br />
                            Both labeled and unlabeled data are contained in this dataset.

                            Labeled data is from when the user trained Actitracker with "Training Mode" 
                            The user physically specifies which activity is being performed.
                            In both the raw and transformed files for labeled data, the 
                            activity label is determined by the user's input.
                        
                            Unlabeled data is from when the user was running Actitracker for 
                            regular use.  The user does not specify which activity is being performed.
                            In the unlabeled raw data file, the activity label is "NoLabel" 
                            In the unlabeled transformed file, the activity label is the activity
                            that our system predicted the user to be performing.
						</ul>
                    </div>
				</div> <!-- END ROW -->
                </div> <!-- END TAB CONTENT -->
            </section>
		</div>
	</div>
	</div>
<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
