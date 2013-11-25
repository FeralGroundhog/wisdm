<?php
ini_set("log_errors", 1);
ini_set("error_log", "/home/students/wisdm/public_html/admin/phperror.log");

function CheckValidDate($sDate) {
    $sDate = str_replace(' ', '-', $sDate);
    $sDate = str_replace('/', '-', $sDate);
    $sDate = str_replace('--', '-', $sDate);
    preg_match('/^(\d{2})-(\d{2})-(\d{4})$/', $sDate, $xadBits);
    return checkdate($xadBits[1], $xadBits[2], $xadBits[3]);
}

function CheckValidTime($sTime) {
	return (preg_match("/(2[0-3]|[01][0-9]):[0-5][0-9]/", $sTime) ? true : false);
}

function FormatTime($sDate, $sTime) {
	$datetime = $sDate . $sTime;
	$fTime = date("g:i a", strtotime($datetime));
	return $fTime;
}

function jsPopup($string, $location) {
	echo '<script language="JavaScript" type="text/javascript">';
	echo "alert('$string');";
	if ($location == "back") {
		echo 'window.history.back()';
	} else {
		echo "window.location.replace('$location');";
		echo "window.location.href='$location';";
		echo "window.location='$location';";
	} echo '</script>';
}

if (isset($_POST['date']) && isset($_POST['time'])) {
	if (CheckValidDate($_POST['date'])) {
		$date = $_POST['date'];
		if (CheckValidTime($_POST['time']))
			$time = FormatTime($date, $_POST['time']);
	} else $errors = 1;

	if ($errors)
		jsPopup ("There is an error with the selected date and/or time. Please try again.", "back");
	else {
		// echo $date . "<br />" . $time;
		$file = "../includes/php/global-announcements.php";
		
		$text = "<h3>Next Meeting</h3><h6>" . $date;
		if (isset($time)) $text .= ", " . $time;
		$text .= "</h6><p>WISDM Lab</p>";

		file_put_contents($file, $text);
		jsPopup("The meeting time has been updated successfully", "index.php");
	}
}

?>