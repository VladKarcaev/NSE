<?php

require_once("update/update.php");

include ("../engine/NSE/engine.php");

include ("../engine/AdminPanel/admin_data.php");

echo update();

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
	<h3 class="hn">Your Version: <strong>$nse_version</strong></h3>

<hr>

	<b style="font-size:25px;">NSE Engine was updated!</b>

	<h4>
Hello $admin_first_name, 
This Update was installed on your NSE!
Change Notes:<br>
$change_notes
<h4>Restart page!</h4>
<button class="submit"><a href="../admin.php">AdminPanel</a></button>

	</h4>

	<br>

	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>

</body>
html;

?>