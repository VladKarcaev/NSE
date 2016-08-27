<?php
require_once ("engine/NSE/engine.php");

include ("engine/functions/visits.log.php");

$php_version =  phpversion();

$inst_version= "1.0.1 New";

$inst_developer = "DnDPrograms";

echo <<<html

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Installer</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="Templates/Default/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Templates/Default/bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="Templates/Default/styles/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="Templates/default/bootstrap/js/bootstrap.min.js"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	
	<h1 class="hn">NSE Installer $inst_version</h1>

	<h2 class="hn">DnDPrograms (c) 2015-2016</h2>
		<h3 style="float:left;" class="hn">DnDInstaller with DnDConnect!!!</h3>
<div>
Progress Installation: 0% 
<progress style="float:left;" value="0" max="100"></progress>
</div>
	<h3 style="color:blue;"><b>Step 1: Information and Data</b></h3>

<hr>

	<b style="font-size:25px;">Installer Information</b>
	<br>

<h3>Basic Components:</h3>
<h5>
	Installer Version:<strong>$inst_version</strong><br>
	Installer Developer: <strong>$inst_developer</strong><br>
	Engine Name: <strong>$engine_name</strong><br>
	Full Engine Name: <strong>$full_engine_name</strong><br>
	Developer Company: <strong>$developer_company</strong><br>
	Version: <strong>$nse_version</strong><br>
	Build Version: <strong>$build_version</strong><br>
	Build Name: <strong>$build_name</strong><br>
	Build Developer: <strong>$build_developer</strong><br>
	Language: <strong>$language</strong><br>
	</h4>
	<h3>Modules:</h3>
	<h5>
	Updater: <strong>$updater</strong><br>
	Engine Files: <strong>$engine_files</strong><br>
	</h5>
	<h5>PHP Version: <strong>$php_version</strong></h5>
<br>
	<form method="post" action="engine/installer/install/index.php">

	<fieldset>

	<legend>Complete data:</legend>
	Enter Mysql server <b class="important">*</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input type="text" name="servmysql" max="30">Example: mysql.hostinger.ru
    <br>
    <br>
    Enter DataBase user <b class="important">*</b> &nbsp &nbsp &nbsp &nbsp &nbsp
    <input type="text" name="usermysql" max="30">Example: u11111_1, dolfik_1
    <br>
    <br>
    Enter DataBase name <b class="important">*</b> &nbsp &nbsp &nbsp &nbsp
    <input type="text" name="dbnamemysql" max="30">Example: u1111341_1, dolfik_16564
    <br>
    <br>
    Enter Password Database <b class="important">*</b> &nbsp
    <input type="text" name="dbpassmysql" max="30">Example: 11wk2keo
    <br>
    <br>
    Enter Hosting email <b class="important">*</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input type="text" name="hostingmail" max="30">Example: dsx@yoursire.com
    <br>
    <br>
    <input class="submit" type="submit" value="Complete">
    <input class="submit" type="reset" name="Reset" value="Reset">

	</fieldset>

	</form>

	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>

</body>

html;
echo visits_log();
?>