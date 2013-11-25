<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
<title>WISDM Lab</title>
    <script type="text/javascript">
		window.onload = function() {
			document.onselectstart = function() {return false;} // ie
			document.onmousedown = function() {return false;} // mozilla
		}
	
		window.onload = function() {
			var element = document.getElementById('center');
			element.onselectstart = function () { return false; } // ie
			element.onmousedown = function () { return false; } // mozilla
		}
    </script>
    <link href="stylesheet.css" rel="stylesheet" type="text/css" />
    <style>
		#center { 
			position: absolute; 
			top: 50%; 
			width: 100%; 
			height: 1px; 
			overflow: visible;
		}
		#main { 
			position: absolute; 
			left: 50%; 
			width: 608px; 
			margin-left: -308px; 
			height: 397px; 
			top: -180px;
			z-index: 3;
		} 
		
		#text {
			position: absolute; 
			left: 50%; 
			width: 450px; 
			margin-left: -225px; 
			height: 397px; 
			top: 0px;
			text-align:center;
			font-family:Georgia;
			font-size: 20px;
			z-index: 5;
		}
	</style>
    
</head>

<body>

    <div class="header">
    	<img src="images/logo.png" align="left" />
        <span class="subtitle">
        	<span class="w">W</span><span class="i">I</span>reless
            <span class="s">S</span>ensor<br />
            <span class="d">D</span>ata
            <span class="m">M</span>ining Lab</span>
    </div>

    <div id="center">
	<div id="main">
    	<img src="images/error.png" />
    </div>
    <div id="text">
    	It seems as if you've somehow stumbled away from our main site.
        If you would like to go back to our homepage, please click <a href="index.php">HERE</a>.
    </div>
	</div>
    
</body>
</html>
