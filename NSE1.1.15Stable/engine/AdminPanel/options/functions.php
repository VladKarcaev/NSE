
<?php

if(!defined("AdminPanelNSE1.1.15")){
	exit("Error!");
}

function logs(){
	
	define ("HOST", $_SERVER['SERVER_NAME']);
function get_filesize($file)
{
    if(!file_exists("$file")) return "File not found";
  $filesize = filesize($file);
       return $filesize." Bytes";   
}

$file = "../logs/visits.log";
$size = get_filesize ("$file");
    echo "<b class='logs'>File Visits.log:</b><br>";
echo "<b class='logs'>Size visits.log: <strong>".$size."</strong></b><br>";
if ($size>=100000){
	echo "<b class='logs'>File visits.log take up too much space</b><br>";
	if (unlink("../logs/visits.log")){
		echo "<b class='logs'>Log File Visits.log was deleted</b><br>";
	}else{
		echo "<b class='logs'>Error, log file was not deleted</b><br>";
	}
}else{
	echo "";
}
$file = "../logs/cookie.log";
$size = get_filesize ("$file");
  echo "<b class='logs'>File Cookie.log:</b><br>";
echo "<b class='logs'>Size cookie.log: <strong>".$size."</strong></b><br>";
if ($size>=50000){
	echo "<b class='logs'>File cookie.log take up too much space</b><br>";
	if (unlink("../logs/cookie.log")){
		echo "<b class='logs'>Log File Cookie.log was deleted</b>";
	}else{
		echo "<b class='logs'>Error, log file was not deleted</b><br>";
	}
}else{
	echo "";
}
}
function engine_check(){
	Include("../NSE/engine.php");
	include("admin_data.php");
	echo "<br><b class='eng'>NSE Version: $nse_version<br>";
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
	echo "<b style='float:left;'>Admin First Name: $admin_first_name<br>";
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
		echo "<button class='submit'><a href='../../update/updater.php'>Update</a></button><br>";
		echo "<button class='submit'><a href='../../update/delete_update.php'>Delete Update</a></button><br>";
	}
}

?>


