<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  Funding</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>
</head>
<body id="blue">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="about">Funding</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="about">Funding</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-8 large-offset-1  columns">
    	<h2>Total WISDM Funding: $616,955</h2>
    </div>    
    </div>
    
    <div class="row">
    <div class="large-8 large-offset-2 columns">
    	<h3>WISDM Faculty Funding: $499,955</h3>
			<?php
                $path = dirname(__FILE__) . "/includes/files/funding-faculty.csv";
                if( ($handle = fopen( $path, 'r' )) !== false) {
                    $output = '<table><thead><tr>
                                <th width="375">Title</th>
                                <th width="145">Recipient</th>
                                <th width="110">Date</th>
                                <th width="85">Amount</th>
                            </tr></thead><tbody>';
                    while(($data = fgetcsv( $handle )) !== false){
                        $output .= '<tr>';
                        foreach( $data as $value )
                            $output .= sprintf( '<td>%s</td>', $value );
                        $output .= '</tr>';                    
					}
                    fclose( $handle );
                    $output .= '</tbody></table>';
                }
                echo $output;
            ?>
    </div>    
    </div>
    
    <div class="row">
    <div class="large-8 large-offset-2 columns">
    	<h3>WISDM Direct Student Funding: $117,000</h3>
			<?php
                $path = dirname(__FILE__) . "/includes/files/funding-student.csv";
                if( ($handle = fopen( $path, 'r' )) !== false) {
                    $output = '<table><thead><tr>
                                <th width="375">Title</th>
                                <th width="145">Recipient</th>
                                <th width="110">Date</th>
                                <th width="85">Amount</th>
                            </tr></thead><tbody>';
                    while(($data = fgetcsv( $handle )) !== false){
                        $output .= '<tr>';
                        foreach( $data as $value )
                            $output .= sprintf( '<td>%s</td>', $value );
                        $output .= '</tr>';                    
					}
                    fclose( $handle );
                    $output .= '</tbody></table>';
                }
                echo $output;
            ?>
    </div>    
    </div>
<?php require_once ('includes/php/include-footer.php'); ?>

</body>
</html>
