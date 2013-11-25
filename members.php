<?php require_once ('includes/php/include-header-meta.php'); ?>
    <title>WISDM Lab:  Members</title>
<?php require_once ('includes/php/include-header-ext.php'); ?>

<style>
/**** MOVE THIS TO PHP GENERATED FILE ****/
h4 + ul { margin-left: 0; }
	h4 + ul > li { list-style-type: none; }
.panel.member div > p { font-size: 0.875em; margin-bottom: 0.25em; }
.panel.member  div > p:first-child { font-weight: bold; }
.panel.member div > p:nth-child(2) { font-style: italic; }
</style>
</head>
<body id="gold">
    <!-- Header and Nav -->
    <header>        
    <?php require_once ('includes/php/include-nav.php'); ?> 
    
        <div class="row  hide-for-small" id="page-banner">
        	<div id="title-box"><h1 class="page-title" id="members">Members</h1></div>
    	</div>
        <div class="row hide-for-medium-up">
        	<div class="large-12 small-12 columns text-center"><h1 class="page-title" id="members">Members</h1></div>
		</div>
	 </header>
    <!-- End Header and Nav -->
    
    <div class="row">
    <div class="large-8 large-offset-2 columns">
        <div class="row">
        <div class="large-6 small-12 columns">
        	<h4>Director</h4>
            	<p><a href="#Gary_Weiss">Dr. Gary Weiss</a></p>
            
			<h4>Associated Members</h4>
				<p>
					Dr. Roger Tsai<br />
					<a href="#Joachim_Leonfellner">Joachim Leonfellner</a><br />
                    <a href="#Gregor_Pichler">Gregor Pichler</a><br />
				</p>
			
            <h4>WISDM Alumni</h4>
            	<p><a href="#WISDM-Alumni">Click for the full list</a></p>
        </div>
        
        <div class="large-6 small-12 columns">
        	<h4>Graduate Students (M.S.)</h4>
            	<p>
                	<a href="#Shaun_Gallagher">Shaun Gallagher</a><br />
                	<a href="#Jeff_Lockhart">Jeff Lockhart</a><br />
                    <a href="#Tony_Pulickal">Tony Pulickal</a><br />
                </p>
                
        	<h4>Undergraduate Students</h4>
            	<ul>
                	<li><a href="#Michael_Brown">Michael Brown</a></li>
                    <li><a href="#Tausif_Hasan">M. Tausif Hasan</a></li>
                    <li><a href="#Sean_Keegan">Sean Keegan</a></li>
                    <li><a href="#Sam_Koll">Sam Koll</a></li>
                    <li><a href="#Joseph_Leroy">Joseph Leroy</a></li>
                    <li><a href="#Meredith_Lukas">Meredith Lukas</a></li>
                    <li><a href="#Amell_Peralta-Ramos">Amell Peralta Ramos</a></li>
                    <li><a href="#Greg_Rigatti">Greg Rigatti</a></li>
                    <li><a href="#Isaac_Ronan">Isaac Ronan</a></li>
                    <li><a href="#Emily_Santo-Donato">Emily Santo-Donato</a></li>
                    <li><a href="#Jessica_Timko">Jessica Timko</a></li>
                    <li><a href="#Kedwein_Valdez">Kedwein Valdez</a></li>
                </ul>
        </div>
        <hr />
        <div class="panel callout text-center">
        <h5>More Info Below! And Pictures!</h5>
        </div>
        <hr />
	</div>
        
        <!-- Director -->
        <div class="row">
        <div class="large-12 columns">
        	<h3>Director</h3>
            <div class="panel">
                <a name="Gary_Weiss"><h3>Dr. Gary Weiss</h3></a>
                <div class="row">
                <div class="large-2 small-4 columns"><img src="includes/img/members/gary.png" /></div>
                <div class="large-10 small-8 columns"><p>
                    	Lab Director, WISDM Lab<br />
                    	Associate Professor, Department of Computer & Information Science                    
				</p></div>
                </div> <!-- END PANEL ROW -->
            </div> <!-- END PANEL -->
            
            <hr />
		</div>
        </div>
        
        <!-- Students -->
        <?php
			$path = dirname(__FILE__) . "/includes/files/members.csv";
			if( ($handle = fopen( $path, 'r' )) !== false) {
				$counter=1;
				$output = '<h3>Current Members</h3>';
				while(($data = fgetcsv( $handle, 1000, "|" )) !== false){
					if ($counter%2!=0) $output .= '<div class="row">';  # Begin Member Row

					$output .='<div class="large-6 small-12 columns"><div class="panel member">'; # ALL THE DIVS!
					$output .= '<a name="'.$data[0].'_'.$data[1].'"><h4>'.$data[0].'&nbsp;'.$data[1].'</h4></a>'; # name and anchor link
					$output .= '<div class="row"><div class="large-4 small-4 columns"><img src="includes/img/members/'.$data[2].'" /></div>'; # member headshot
					$output .= '<div class="large-8 small-8 columns"><p>'.$data[3].'</p><p>'.$data[4].'</p>'; # role and school year

					if (isset($data[5]) && isset($data[6])) {
						$output .= '<p class="text-right"><a data-reveal-id="'.$data[0].$data[1].'">More</a></p>'; # if detailed info exists, add it in
						$output .= '<div id="'.$data[0].$data[1].'" class="reveal-modal">
									  <h2 class="inline">'.$data[0].' '.$data[1].', '.$data[4].'</h2>
									  <h4>'.$data[3].'</h4>
									  <p class="lead"><a href="'.$data[5].'">'.$data[5].'</a></p>
									  <div class="row"><div class="large-4 small-12 columns">';
						if (file_exists('includes/img/members/bios/'.$data[1].'.png'))
							$output .= '<img src="includes/img/members/bios/'.$data[1].'.png">';
						else $output .= '<img src="includes/img/members/bios/nopicture.png">';
						$output .= '</div><div class="large-8 small-12 columns">
									  	<blockquote>'.$data[6].'</blockquote>
									  </div></div>
									  <a class="close-reveal-modal">&#215;</a>
									</div>';
					}
					
					$output .= '</div></div></div></div>'; # END ALL THE DIVS!!
					if ($counter%2==0) $output .= '</div>'; # Ends Member Row       
					$counter++;
				}
				fclose( $handle );
				if ($counter%2==0) $output .= '</div>';
			}
			echo $output;
			echo '<hr />';
			?>
            
            <?php
			# Associated Members
			$path = dirname(__FILE__)."/includes/files/members-assoc.csv";
			if( ($handle = fopen( $path, 'r' )) !== false) {
				$counter=1;
				$output = '<h3>Associated Members</h3>';
				while(($data = fgetcsv( $handle, 1000, "|" )) !== false){
					if ($counter%2!=0) $output .= '<div class="row">';  # Begin Member Row

					$output .='<div class="large-6 small-12 columns"><div class="panel member">'; # ALL THE DIVS!
					$output .= '<a name="'.$data[0].'_'.$data[1].'"><h4>'.$data[0].'&nbsp;'.$data[1].'</h4></a>'; # name and anchor link
					$output .= '<div class="row"><div class="large-4 small-4 columns"><img src="includes/img/members/'.$data[2].'" /></div>'; # member headshot
					$output .= '<div class="large-8 small-8 columns"><p>'.$data[3].'</p><p>'.$data[4].'</p>'; # role and school year

					if (isset($data[5]) && isset($data[6])) {
						$output .= '<p class="text-right"><a data-reveal-id="'.$data[0].$data[1].'">More</a></p>'; # if detailed info exists, add it in
						$output .= '<div id="'.$data[0].$data[1].'" class="reveal-modal">
									  <h2 class="inline">'.$data[0].' '.$data[1].', '.$data[4].'</h2>
									  <h4>'.$data[3].'</h4>
									  <p class="lead"><a href="'.$data[5].'">'.$data[5].'</a></p>
									  <div class="row"><div class="large-4 small-12 columns">';
						if (file_exists('includes/img/members/bios/'.$data[1].'.png'))
							$output .= '<img src="includes/img/members/bios/'.$data[1].'.png">';
						else $output .= '<img src="includes/img/members/bios/nopicture.png">';
						$output .= '</div><div class="large-8 small-12 columns">
									  	<blockquote>'.$data[6].'</blockquote>
									  </div></div>
									  <a class="close-reveal-modal">&#215;</a>
									</div>';
					}
					
					$output .= '</div></div></div></div>'; # END ALL THE DIVS!!
					if ($counter%2==0) $output .= '</div>'; # Ends Member Row       
					$counter++;
				}
				fclose( $handle );
				if ($counter%2==0) $output .= '</div>';
			}
			echo $output;
			echo '<hr />';
			
		?>
        
        <!-- Alumni -->
        <?php
			$path = dirname(__FILE__) . "/includes/files/members-alumni.csv";
			if( ($handle = fopen( $path, 'r' )) !== false) {
				$counter=1;
				$output = '<a name="WISDM-Alumni"><h3>WISDM Alumni</h3></a><h6>Members who made significant contributions over the course of at least one year</h6>';
				while(($data = fgetcsv( $handle, 1000, "|" )) !== false){
					if ($counter%2!=0) $output .= '<div class="row">';  # Begin Member Row

					$output .='<div class="large-6 small-12 columns"><div class="panel member">'; # ALL THE DIVS!
					$output .= '<h4>'.$data[0].'&nbsp;'.$data[1].'</h4>'; # name and anchor link
					$output .= '<div class="row"><div class="large-4 small-4 columns"><img src="includes/img/members/'.$data[2].'" /></div>'; # member headshot
					$output .= '<div class="large-8 small-8 columns"><p>'.$data[3].'</p><p><i>'.$data[4].'</i></p>'; # role and school year
					$output .= '</div></div></div></div>'; # END ALL THE DIVS!!
					if ($counter%2==0) $output .= '</div>'; # Ends Member Row       
					$counter++;
				}
				fclose( $handle );
				if ($counter%2==0) $output .= '</div>';
			}
			echo $output;
		?>
    </div>    
    </div>
<?php require_once ('includes/php/include-footer.php'); ?>

<!-- MODAL WINDOWS -->
<div id="gary_weiss" class="reveal-modal">
  <h2>Dr. Gary Weiss</h2>
  <p class="lead">Lab Director, WISDM Lab<br />Associate Professor, Computer & Information Science</p>
  <p>Website: <a href="</p>
  <a class="close-reveal-modal">&#215;</a>
</div>


</body>
</html>
