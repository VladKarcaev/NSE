<?php

$host = $_SERVER['HTTP_HOST'];

if ($_SERVER['HTTP_REFERER'] != "http://".$host."/engine/installer/install/installer-next.php"){
	Exit ("Go back to the 1 Step of install".$_SERVER['HTTP_REFERER']);
}

$name1 = $_POST['name1'];

$name2 = $_POST['name2'];

$DataBase1 = fopen("../../AdminPanel/admin_data.php", "w+");

$text1 = '<?
';
$text2 = '$admin_first_name = '.'"'.$_POST['name1'].'"'.";";

$text3 = '
$admin_second_name = '.'"'.$_POST['name2'].'"'.";";

$text4 = '
$admin_age = '.'"'.$_POST['age'].'"'.";";

$text5= '
$admin_gender = '.'"'.$_POST['gender'].'"'.";";

$text6 = '
$updater = '.'"'.$_POST['updater'].'"'.";";

$text7 = "
?>";

$File1 = fwrite($DataBase1, $text1);

$DataBase2 = fopen("../../AdminPanel/admin_data.php", "a+");

$DataBase3 = fopen("../../AdminPanel/admin_data.php", "a+");

$DataBase4 = fopen("../../AdminPanel/admin_data.php", "a+");

$DataBase5 = fopen("../../AdminPanel/admin_data.php", "a+");

$DataBase6 = fopen("../../AdminPanel/admin_data.php", "a+");

$DataBase7 = fopen("../../AdminPanel/admin_data.php", "a+");

$File2 = fwrite($DataBase2, $text2);

$File3 = fwrite($DataBase3, $text3);

$File4 = fwrite($DataBase4, $text4);

$File5 = fwrite($DataBase5, $text5);

$File6 = fwrite($DataBase6, $text6);

$File7 = fwrite($DataBase7, $text7);

rename("../../../install.php", "../../../backup/install.php");

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

	<h3 style="color:blue; float:left"><b>Step 5:Final</b></h3>

	<div>

Progress Installation: 100% 
<progress style="float:left;" value="100" max="100"></progress>

</div>

<hr>

<h4>

Hello, $name1 $name2<br>

We installed NSE engine on your server!<br>
Thank you for using NSE engine!<br>

</h4>

<button class="submit"><a href="../../AdminPanel/">Go to AdminPanel!</a></button>

<br>
	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>


</body>

html;

?>