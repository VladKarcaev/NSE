<?php

$host = $_SERVER['HTTP_HOST'];

if ($_SERVER['HTTP_REFERER'] != "http://".$host."/install.php"){
	Exit ("Go back to the 1 Step of install");
}

	$db_connect = mysql_connect($_POST['servmysql'], $_POST['usermysql'], $_POST['dbpassmysql'])
	or die ("Error");

echo $db_connect;

$db_select = mysql_select_db($_POST['dbnamemysql'], $db_connect);

echo $db_select;

$DataBase1 = fopen("../../../engine/NSE/database.php", "w+");

$text1 = '<?
';
$text2 = 'define("BEZ_DBSERVER",'.'"'.$_POST['servmysql'].'"'.')'.";";

$text3 = '
define("BEZ_DBUSER",'.'"'.$_POST['usermysql'].'"'.")".";";

$text4 = '
define("BEZ_DBPASSWORD",'.'"'.$_POST['dbpassmysql'].'"'.")".";";

$text5 = '
define("BEZ_DATABASE",'.'"'.$_POST['dbnamemysql'].'"'.")".";";

$text6 = '
define("BEZ_DBPREFIX","bez_");';

$text7 = '
define("BEZ_MAIL_AUTOR",'.'"'.'<'.$_POST['hostingmail'].'>'.'"'.")".";";

$text8 = "
?>";

$DataBase2 = fopen("../../../engine/NSE/database.php", "a+");

$DataBase3 = fopen("../../../engine/NSE/database.php", "a+");

$DataBase4 = fopen("../../../engine/NSE/database.php", "a+");

$DataBase5 = fopen("../../../engine/NSE/database.php", "a+");

$DataBase6 = fopen("../../../engine/NSE/database.php", "a+");

$DataBase7 = fopen("../../../engine/NSE/database.php", "a+");

$DataBase8 = fopen("../../../engine/NSE/database.php", "a+");

$File1 = fwrite($DataBase1, $text1);

$File2 = fwrite($DataBase2, $text2);

$File3 = fwrite($DataBase3, $text3);

$File4 = fwrite($DataBase4, $text4);

$File5 = fwrite($DataBase5, $text5);

$File6 = fwrite($DataBase6, $text6);

$File7 = fwrite($DataBase7, $text7);

$File8 = fwrite($DataBase8, $text8);

mysql_query("CREATE TABLE IF NOT EXISTS `bez_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(200) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `active_hex` varchar(32) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;")
or die("Invalid query:" . mysql_error());

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
		<h3 style="float:left;" class="hn">DnDInstaller with DnDConnect!!!</h3>
<div>
Progress Installation: 25% 
<progress style="float:left;" value="25" max="100"></progress>
</div>
	<h3 style="color:blue;"><b>Step 2:Database connect and License</b></h3>
<hr>

<b style="font-size:25px;">MySQL connect:<strong>Ok!</strong></b>

<br>

<h3>License</h3>

<h4>

On the engine is allowed to install unauthorized NSE updates <br>
Are not issued by the company DnDPrograms, <br>
Do not remove the information about the developer of the engine NSE!<br>
Copyright DnDPrograms (c) 2015-2016<br>
<br>
<button class="submit"><a href="installer.php">Confirm</a></button>

</h4>


	<hr>

<h5>Copyright <b style="color:#B23256;">DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style="color:#B23256;">NSE</b> (R) 2016<br>
</h5>


</body>

html;

?>