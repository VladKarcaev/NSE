<?php

if(!file_exists("update/new_version.php")){
	exit ("File New_Version.php not found");
}

include_once("update/new_version.php");

function update()
{

    $host = $_SERVER['HTTP_HOST'];

    $open1 = fopen("../engine/NSE/engine.php", "w+");

    $open2 = fopen("../engine/AdminPanel/admin.php", "w+");

    $open3 = fopen("../engine/AdminPanel/options/functions.php", "w+");

    $open4 = fopen("../Templates/Default/default/index.php", "w+");

    $open5 = fopen("../Templates/Default/default/version.php", "w+");

    $open6 = fopen("../Templates/Default/styles/main.css", "w+");

    $open7 = fopen("../Templates/Default/styles/default.css", "w+");

    $open7 = fopen("../Templates/Default/styles/default.css", "w+");

    $text1 = '
<?php

$nse_version = "1.1.15 Stable";//not change!

$build_version = "70";

$build_name = "One Pack";

$build_developer = "DnDPrograms";

$full_engine_name = "NewSuperEngine(NSE)";

$engine_name = "NSE";

$dnd_connect_type = "DnD1.0";

$developer_company = "DnDPrograms";//not change!!!

$status = "Official";

$updated_status = "Updated";

$language = "English";

$dnd_connect_version_required = array
(
"1"=> "1.0", 
"2"=> "1.1", 
"3"=> "1.2", 
"4"=> "1.3", 
);

$dsquare = "Not Installed";

$console = "Not Installed";

$wigle_protect = "Not Available";

if(file_exists("Templates/Default/default/index.php")){
	$template_install = "Installed";
}elseif (file_exists("../../Templates/Default/default/index.php")) {
	$template_install = "Installed";
}elseif(file_exists("../Templates/Default/default/index.php")){
	$template_install = "Installed";
}elseif(file_exists("../../../Templates/Default/default/index.php")){
	$template_install = "Installed";
}else{
	$template_install = "Not Installed";
}

if (file_exists("update/updater.php") && file_exists("update/file_updater.php")) {
	$update = "In stock";
}elseif(file_exists("../../update/updater.php") && file_exists("../../update/delete_update.php") && file_exists("../../update/dnd.php")){
	$update = "Installed";
}else{
	$update = "Not available";
}

if(file_exists("engine/NSE/engine.php") || file_exists("engine/NSE/config.php")) {
	$engine_files = "Engine was installed";
}elseif (file_exists("../../NSE/engine.php") || file_exists("../../NSE/config.php")){
	$engine_files = "Engine was installed";
}elseif (file_exists("../NSE/engine.php") || file_exists("../NSE/config.php")){
	$engine_files = "Engine was installed";
}elseif (file_exists("../engine/NSE/engine.php") || file_exists("../engine/NSE/config.php")){
	$engine_files = "Engine was installed";
}elseif (file_exists("../../engine/NSE/engine.php") || file_exists("../../engine/NSE/config.php")){
	$engine_files = "Engine was installed";
} else {
	exit ("<h1>Engine invalid</h1> <button class=\'submit\'><a style=\'color:red;\' href=\'mailto:lesters1@bk.ru\'>Send a message to Company DnDPrograms</a></button>");
}
?>
';

    $text2 = '
<?php

define("AdminPanelNSE1.1.15",true);

if(file_exists("../functions/visits.log.php")){

	$btn_logs= "<button class=\'btn_logs1 submit\' style=\'float:left;\'>Show</button> &nbsp &nbsp &nbsp";

	$btn_logs.= "<button class=\'btn_logs2 submit\' style=\'float:left;\'>Hide</button> &nbsp &nbsp &nbsp";

}elseif(file_exists("../functions/cookie.log.php")){

	$btn_logs= "<button class=\'btn_logs1 submit\' style=\'float:left;\'>Show</button>";

	$btn_logs.= "<button class=\'btn_logs2 submit\' style=\'float:left;\'>Hide</button>";

}else{
	$btn_logs= "UnAvailable";
}

if(file_exists("../../backup/install.php") && file_exists("../../backup/install_in_backup.php")){

	$btn_reinst= "<h3>NSE</h3> <button class=\'submit\'><a href=\'../../backup/install_in_backup.php\'>ReInstall NSE</a></button>";

}else{
	$btn_reinst= "UnAvailable";
}

include_once ("options/functions.php");

    echo "
    <html>
	
    <head>
	<link href=\'https://fonts.googleapis.com/css?family=Open+Sans\' rel=\'stylesheet\' type=\'text/css\'>
		<link rel=\'stylesheet\' type=\'text/css\' href=\'../../../Templates/Default/bootstrap/css/bootstrap.css\'>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'../../../Templates/Default/bootstrap/css/style.css\'>
	<link rel=\'stylesheet\' type=\'text/css\' href=\'../../../Templates/Default/styles/main.css\'>
		<script src=\'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\'></script>

	<script type=\'text/javascript\'>

	$(document).ready(function(){

		$(\'.logs\').hide();

		$(\'.eng\').hide();

		$(\'.btn_eng1\').click(function(){

			$(\'.eng\').show();
});

        $(\'.btn_eng2\').click(function(){

			$(\'.eng\').hide();
});

		$(\'.btn_logs2\').click(function(){

			$(\'.logs\').hide();

	});
});

	</script>

	<script type=\'text/javascript\'>

	$(document).ready(function(){

		$(\'.logs\').hide();

		$(\'.btn_logs1\').click(function(){

			$(\'.logs\').show();
	});
});

	</script>

<title>AdminPanel</title>

    </head>
	
<body>

<br>
<h1 style=\'text-align:center;\'>AdminPanel</h1>
<h2 style=\'text-align:center;\'>System</h2>
<h3>Logs</h3>
$btn_logs
$btn_reinst
<h3>Engine</h3>
<button class=\'btn_eng1 submit\' style=\'float:left;\'>Show</button>
<button class=\'btn_eng2 submit\' style=\'float:left;\'>Hide</button>
<br>
<br>
<p class=\'logs\'>
$logs
</p>
<br>
";
$logs = logs();
$engine_check = engine_check();
echo"
<br>
<p class=\'eng\'>
$engine_check
</p>
<h2 style=\'text-align:center;clear:both;\'>Profile</h2>
<br>
<br>
";
$profile = profile();
echo "
<p class=\'profile\'>
$profile
</p>
<br>
<h2 style=\'text-align:center;clear:both;\'>Updater</h2>
<br>
$updates
";
$updates = check_updates();
echo "
<br>
<hr>
<h5>Copyright <b style=\'color:#B23256;\'>DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style=\'color:#B23256;\'>NSE</b> (R) 2016<br>
</h5>

</body>

</html>
    ";

?>

';

    $text3 = '
<?php

if(!defined("AdminPanelNSE1.1.15")){
	exit("Error!");
}

function logs(){
	
	define ("HOST", $_SERVER[\'SERVER_NAME\']);
function get_filesize($file)
{
    if(!file_exists("$file")) return "File not found";
  $filesize = filesize($file);
       return $filesize." Bytes";   
}

$file = "../logs/visits.log";
$size = get_filesize ("$file");
    echo "<b class=\'logs\'>File Visits.log:</b><br>";
echo "<b class=\'logs\'>Size visits.log: <strong>".$size."</strong></b><br>";
if ($size>=100000){
	echo "<b class=\'logs\'>File visits.log take up too much space</b><br>";
	if (unlink("../logs/visits.log")){
		echo "<b class=\'logs\'>Log File Visits.log was deleted</b><br>";
	}else{
		echo "<b class=\'logs\'>Error, log file was not deleted</b><br>";
	}
}else{
	echo "";
}
$file = "../logs/cookie.log";
$size = get_filesize ("$file");
  echo "<b class=\'logs\'>File Cookie.log:</b><br>";
echo "<b class=\'logs\'>Size cookie.log: <strong>".$size."</strong></b><br>";
if ($size>=50000){
	echo "<b class=\'logs\'>File cookie.log take up too much space</b><br>";
	if (unlink("../logs/cookie.log")){
		echo "<b class=\'logs\'>Log File Cookie.log was deleted</b>";
	}else{
		echo "<b class=\'logs\'>Error, log file was not deleted</b><br>";
	}
}else{
	echo "";
}
}
function engine_check(){
	Include("../NSE/engine.php");
	include("admin_data.php");
	echo "<br><b class=\'eng\'>NSE Version: $nse_version<br>";
	echo "Build: $build_version<br>";
	echo "Build Name: $build_name<br>";
	echo "Developer Build: $build_developer<br>";
	echo "Full Engine Name: $full_engine_name<br>";
	echo "Engine Name: $engine_name<br>";
	echo "DnDConnectType: $dnd_connect_type<br>";
	echo "Developer: $developer_company<br>";
	echo "Status: $status<br>";
	echo "Installed Language: $language<br>";
	echo "DnDConnect Version Required: $dnd_connect_version_required[1], $dnd_connect_version_required[2], $dnd_connect_version_required[3], $dnd_connect_version_required[4]<br>";
	echo "DSquare: $dsquare<br>";
	echo "Console: $console<br>";
	echo "Template: $template_install<br>";
	echo "Updater: $update<br>";
	echo "Updater Status: $updater<br>";
	echo "NSE Update: $updated_status<br>";
	echo "Engine Files: $engine_files<br>";
	echo "Wigle Protect: $wigle_protect<br>";
	echo "</b>
	<br>";
}
function profile(){
	include("admin_data.php");
	echo "<b style=\'float:left;\'>Admin First Name: $admin_first_name<br>";
	echo "Admin Second Name: $admin_second_name<br>";
	echo "Admin Age: $admin_age<br>";
	echo "Admin Gender: $admin_gender</B><br>
	<br>
	";
}
function check_updates(){
	if(!file_exists("../../update/update/update.php") || !file_exists("../../update/update/new_version.php")){
		echo "";
	}else{
		include ("../../update/update/new_version.php");
		include ("../NSE/engine.php");
		echo "<h4>New Version: <strong>$new_version</strong></h4>";
		echo "<h4>Your Version: <strong>$nse_version</strong></h4>";
		echo "<button class=\'submit\'><a href=\'../../update/updater.php\'>Update</a></button><br>";
		echo "<button class=\'submit\'><a href=\'../../update/delete_update.php\'>Delete Update</a></button><br>";
	}
}

?>

';

    $text4 = '
<?php

include ("version.php");

$version_required = array(
"1" => "1.1.15",
"2" => "1.1.15 Stable",
"3" => "1.1.16",
"4" => "1.1.17",
);

switch ($nse_version){

	case "$version_required[1]":
	$index_php_title = "NSE";

	$index_php = "
<head>
<title>$index_php_title</title>
<link media=\'screen\' rel=\'stylesheet\' href=\'Templates/Default/bootstrap/css/style.css\'>
<link media=\'screen\' rel=\'stylesheet\' href=\'Templates/Default/bootstrap/css/bootstrap.css\'>
<link media=\'screen\' rel=\'stylesheet\' href=\'Templates/Default/styles/main.css\'>
</head>  
<body>


</body>
";

	break;

	case "$version_required[2]":
	$index_php_title = "Site_Name";

	$SITE_NAME = "DnDPrograms";

	$index_php = "
	
<head>
<title>$index_php_title</title>
<link media=\'screen\' rel=\'stylesheet\' href=\'Templates/Default/bootstrap/css/style.css\'>
<link media=\'screen\' rel=\'stylesheet\' href=\'Templates/Default/bootstrap/css/bootstrap.css\'>
<link media=\'screen\' rel=\'stylesheet\' href=\'Templates/Default/styles/default.css\'>
</head>  
<body>

<div id=\'head\'>
	<img alt=\'your_logo\' src=\'Templates/Default/default/images/your_logo.gif\'>
	<h2>$SITE_NAME</h2>
	<button class=\'reg_btns\'><a href=\'?mode=reg\'>Register</a></button>
	<button class=\'reg_btns\'><a href=\'?mode=auth\'>Login</a></button>
<hr>
</div>
<div id=\'head_btn\'>
<button><a href=\'?mode=news\'>MainPage</a></button>

<button>Contacts</button>
</div>
<hr>

</body>
";

	break;
	
	default:	
	
	echo "Для поддержки данного шаблона, требуется версия NSE: <br>
	$version_required[0],<br>
	$version_required[1],<br>
	$version_required[2],<br>
	$version_required[3],<br>
	$version_required[4],<br>
	У вас установлена версия NSE: $nse_version<br> 
	";

}

?>

';

    $text5 = '
<?php

$template_name = "Default";

$version_template = "1.0.1";

$developer = "DnDPrograms";

$Status = "Official";

?>

';

    $text6 = '

.important{
	color:red;
}

input{
	border-style:double;
    border-color:blue;
    color:black;
 }

.submit{
	background-color:cyan; 
	color:black; 
	border-style:solid; 
	border-color:blue;
	font-size:17px;
	border-width: 3.7px;

}
.submit:hover{
	background-color:cyan; 
	color:black; 
	border-style:solid; 
	border-color:red;
	border-width: 3.9px;
}

.img{
	width:100%;
	height:100%;
	float:left;
}

body{
	background-color:#F6C667;
	background-image: url("../bootstrap/img/logo.png");
	background-repeat:no-repeat;
	margin-left: 30px;
	margin-right: 30px;
}

.hn{
	margin-top:20px;
	margin-left:125px;
}

div {
    width: 300px;
    margin: 50px auto 0;
    padding: 10px;
    border-radius: 5px;
}

progress {
    border:0;
    width: 300px;
    height: 20px;
    background: #f1f1f1;
}

progress::-webkit-progress-bar {
    width: 300px;
    height: 20px;
    background: #f1f1f1;
}

progress::-webkit-progress-value {
    border-radius: 5px;
    background: #ffb76b;
}

progress::-moz-progress-bar {
    border-radius: 5px;
    background: #ffb76b;
}

';

    $text7 = '
	body{
		background-color:#D5FDFF;
		margin-left:23px;
	}
	button{
		background-color:#AC73FF;
		color:#E3F3AC;
		font-size:17px;
		border-style:solid;
		border-color:#F23A3A;
		display:inline;
	}
	button:hover{
		background-color:#700961;
		color:#E3F3AC;
		font-size:17px;
		border-style:solid;
		border-color:#C9182B
	}
	.submit{
		background-color:#AC73FF;
		color:#E3F3AC;
		font-size:17px;
		border-style:solid;
		border-color:#F23A3A;
		display:inline;
	}
	.submit:hover{
		background-color:#700961;
		color:#E3F3AC;
		font-size:17px;
		border-style:solid;
		border-color:#C9182B
	}
	#head{
		color:#145374;
		margin-top:23px;
	}
	#head_btn{
		display:block;
	}
	.reg_btns{
		background-color:#FF7C38;
		color:#E3F3AC;
		font-size:17px;
		border-style:solid;
		border-color:#B80D57;
		display:inline;
	}
	.reg_btns:hover{
		background-color:#E03E36;
		color:#E3F3AC;
		font-size:17px;
		border-style:solid;
		border-color:#B80D57;
		display:inline;
	}
';

    $write1 = fwrite($open1, $text1 . PHP_EOL);

    $write2 = fwrite($open2, $text2 . PHP_EOL);

    $write3 = fwrite($open3, $text3 . PHP_EOL);

    $write4 = fwrite($open4, $text4 . PHP_EOL);

    $write5 = fwrite($open5, $text5 . PHP_EOL);

    $write6 = fwrite($open6, $text6 . PHP_EOL);

    $write7 = fwrite($open7, $text7 . PHP_EOL);
}
?>