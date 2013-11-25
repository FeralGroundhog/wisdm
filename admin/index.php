<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>WISDM Lab: Administrative CP</title>
	<link rel="stylesheet" href="../includes/css/foundation.css">
	<link rel="stylesheet" href="../includes/css/wisdm.css">
	<script src="../includes/js/vendor/custom.modernizr.js"></script>
<!-- jQuery UI Datepicker -->
	<link rel="stylesheet" href="jquery-ui/css/jquery-ui-datetimepicker.css" />
	<script src="jquery-ui/js/jquery-1.9.1.js"></script>
	<script src="jquery-ui/js/jquery-ui-datetimepicker.js"></script>
	<script>
	jQuery(function($) {
		$( "#date" ).datetimepicker({
			format: 'm/d/Y',
			timepicker: false
		});
		$( "#time" ).datetimepicker({
			format: 'H:i',
			step: 30,
			datepicker: false
		});
	});
	</script>
<!-- END Datepicker Resources -->
</head>
<body>
    <!-- Header and Nav -->
    <header>        
<div class="sticky">
    <nav class="top-bar">
        <ul class="title-area">
            <!-- Title Area -->
            <li class="name"><a href="../index.php">WISDM<span class="show-for-medium-up">: WIreless Sensor Data Mining</span></a></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>
    
        <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="main-nav right">
            <li><a href="../index.php">Return Home</a></li>
        </ul>
        </section>
    </nav>
    </div>
        
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title">WISDM Administrative CP</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title">WISDM Administrative CP</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-10 large-offset-1 small-12 columns">
		<div class="section-container vertical-tabs" data-section="vertical-tabs">
			<section class="active">
				<p class="title" data-section-title><a href="#">Meeting Times</a></p>
				<div class="content" data-section-content>
					<p>
							<form method="POST" action="updateMtg.php">
								<div class="row">
								<div class="large-6 small-12 columns">
									<label for="date"><h4>Enter the new meeting time:</h4></label>
									<div class="row text-center">
										<div class="large-6 columns"><input type="text" class="text-center" id="date" name="date" placeholder="Required" required /></div>
										<div class="large-6 columns"><input type="text" class="text-center" id="time" name="time" placeholder="Not Required" /></div>
									</div>
									<button type="submit" class="right radius secondary" value="Update">Update</button>
								</div>
								</div>
							</form>
					</p>
				</div>
			</section>
		</div>
    </div>    
    </div>

<!-- Footer -->
<footer class="row">
<div class="large-12 columns">
    <hr />
    <div class="row">
        <div class="large-6 columns">
            <p>&copy;2013 WISDM Lab, All Rights Reserved<br />Department of Computer & Information Science, Fordham University, Bronx, NY</p>
        </div>
        <div class="large-6 columns">
        <div class="row">
        	<div class="large-12 columns">
                <ul class="inline-list right" id="footer-nav">
                    <li><a href="../index.php">Return Home</a></li>
                </ul>
			</div>
		</div>
        <div class="row">
        	<div class="large-12 columns text-right">
				<ul class="inline-list right">
                	<li><a href="https://www.facebook.com/actitracker">Facebook</a></li>
                	<li><a href="http://www.twitter.com/actitracker">Twitter</a></li>
                	<li><a href="http://www.linkedin.com/company/wisdm-lab/actitracker-20111091/product">LinkedIn</a></li>
                	<li><a href="https://plus.google.com/105766712847037079253">Google+</a></li>
                </ul>
            </div>
        </div>
        </div>
    </div>
</div>
</footer>

  <script>
  document.write('<script src=../' +
  ('__proto__' in {} ? 'includes/js/vendor/zepto' : 'includes/js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <!--<script src="../includes/js/foundation.min.js"></script> -->
 
  <script src="../includes/js/foundation/foundation.js"></script>
  <script src="../includes/js/foundation/foundation.dropdown.js"></script>
  <script src="../includes/js/foundation/foundation.placeholder.js"></script>
  <script src="../includes/js/foundation/foundation.forms.js"></script>
  <script src="../includes/js/foundation/foundation.reveal.js"></script>
  <script src="../includes/js/foundation/foundation.tooltips.js"></script>
  <script src="../includes/js/foundation/foundation.section.js"></script>
  <script src="../includes/js/foundation/foundation.topbar.js"></script>
    
  <script>
    $(document).foundation();
  </script>

</body>
</html>
