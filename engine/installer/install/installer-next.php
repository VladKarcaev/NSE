<?php

$host = $_SERVER['HTTP_HOST'];

if ($_SERVER['HTTP_REFERER'] != "http://".$host."/engine/AdminPanel/index.php?mode=reg"){
	Exit ("Go back to the 1 Step of install");
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
	<link rel="stylesheet" type="text/css" href="../../../Templates/Default/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../../Templates/Default/bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../../Templates/Default/styles/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	<h1 class="hn">NSE Installer $inst_version</h1>

	<h2 class="hn">DnDPrograms (c) 2015-2016</h2>

		<h3 class="hn">DnDInstaller with DnDConnect!!!</h3>

	<h3 style="color:blue; float:left"><b>Step 4:Activation Account and Admin Data</b></h3>

	<div>

Progress Installation: 75% 
<progress style="float:left;" value="75" max="100"></progress>

</div>

<hr>

<h4>

Please go to your email
and confirm your account

</h4>

<form action="installer-final.php" method="post">

<fieldset>

	<legend>Complete data:</legend>
	Enter your First name <b class="important">*</b>&nbsp &nbsp &nbsp
    <input type="text" name="name1" max="30">
    <br>
    <br>
    Enter your Second name<b class="important">*</b>
    <input type="text" name="name2" max="30">
    <br>
    <br>
    Enter your age <b class="important">*</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input type="number" name="age">
    <br>
    <br>
    <b>Gender:</b><br>
    Man<input type="radio" value="Man" name="gender" Checked>
    <br>
    Woman<input type="radio" value="Woman" name="gender">
    <br>
    <br>
    <b>Updater:</b><br>

    Enabled<input type="radio" value="enable" name="updater" Checked>
    <br>
    Disabled<input type="radio" value="disable" name="updater">
    <br>
    <input class="submit" type="submit" value="Complete">
    <input class="submit" type="reset" name="Reset" value="Reset">


	</fieldset>

</form>

<br>

	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>


</body>

html;

?>