<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Tuition Calculator">
	<meta name="description" content="Tuition Calculator">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>A-1 Sunshine Window Cleaning</title>
</head>

<body>
	<h1>A-1 Sunshine Window Cleaning</h1>

<?php
$fname = substr(filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING),0,6);
$lname = substr(filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING),0,2);
$street = substr(filter_input(INPUT_POST, 'street', FILTER_SANITIZE_STRING),0,2);
$zip = substr(filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_NUMBER_INT),0,3);
$phone = substr(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT),0,3);
$email = substr(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL),0,3);
$type = substr(filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING),0,3);
$date = substr(filter_input(INPUT_POST, 'date', FILTER_SANITIZE_STRING),0,3);
$desc = substr(filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING),0,3);
$timecl = substr(filter_input(INPUT_POST, 'timecl', FILTER_SANITIZE_STRING),0,3);

$myfile = fopen("appointmentlist.txt", "w") or die("Unable to open file!");
	$txt = $fname\n;
	fwrite($myfile, $txt);
	$txt = $lname\n;
	fwrite($myfile, $txt);
	fclose($myfile);
?>
</body>
</html>
