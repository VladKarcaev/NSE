<?php
include ("update/new_version.php");

include ("../engine/NSE/engine.php");

if ($version_required[1] == $nse_version || $version_required[2] == $nse_version || $version_required[3] == $nse_version || $version_required[4] == $nse_version) {

if (!file_exists("update/new_version.php") || !file_exists("update/new_version.php")){

	echo <<<html

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Installer</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../Templates/Default/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Templates/Default/bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="../Templates/Default/styles/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="Templates/default/bootstrap/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	
	<h1 class="hn">NSE Updater</h1>

	<h2 class="hn">DnDPrograms (c) 2015-2016</h2>
	<h3 class="hn">Update files not found!</h3>
<hr>
	<br>

	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>

</body>

html;

}

include ("update/new_version.php");

function beta_check(){
	include ("update/new_version.php");
	if ($beta_status == "true"){
		echo "Warning!!! This Update is Beta Version! This Update can destroy your engine<br>
		<br>";
	}
}

echo <<<html

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Installer</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../Templates/Default/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../Templates/Default/bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="../Templates/Default/styles/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="Templates/default/bootstrap/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	
	<h1 class="hn">NSE Updater</h1>

	<h2 class="hn">DnDPrograms (c) 2015-2016</h2>
	<h3 class="hn">New Version: <strong>$new_version</strong></h3>

<hr>

	<b style="font-size:25px;">Update Information</b>

	<h4>

	Version: <strong>$new_version</strong><br>

	About Update: <strong>$update_info</strong><br>

	Version Required: <strong>$version_required[1] $version_required[2] $version_required[3] $version_required[4]</strong><br>

	File for update: <strong>$updated_files[1]<br> $updated_files[2]<br> $updated_files[3]<br> $updated_files[4]<br> $updated_files[5]<br> $updated_files[6]<br> $updated_files[7]<br> $updated_files[8]<br> $updated_files[9]<br> $updated_files[10]<br> $updated_files[11]<br> $updated_files[12]<br> $updated_files[13]<br> $updated_files[14]<br> $updated_files[15]<br> $updated_files[16]<br> $updated_files[17]<br>$updated_files[18]<br>$updated_files[19]<br>$updated_files[20]<br>
html;

beta_check();

echo <<<html1

<button class="submit"><a href="file_updater.php">Update</a></button>

	</h4>

	<br>

	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>

</body>

html1;

}else{
	exit ("We cannot update your NSE!");
}

?>