<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  News</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="blue">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="about">News</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="about">News</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-8 large-offset-2 small-12 text-justify columns">
    	<div class="section-container vertical-tabs" id="tumblrFeed" data-section="vertical-tabs">

        <!-- tumblr feed -->
        </div>
    </div>    
    </div>
<?php require_once ('includes/php/include-footer.php'); ?>
<!-- Begin scripts for importing news items -->
<script src="includes/js/vendor/jquery.js"></script>
<script src='includes/js/jquery.expander.min.js'></script>
<script src='includes/js/jsproblem.js'></script>
<!-- Formats news date -->
<script src='includes/js/date.js'></script>
<!-- End scripts for importing news items -->
</body>
</html>
