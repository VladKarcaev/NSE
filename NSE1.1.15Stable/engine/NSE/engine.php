
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
	exit ("<h1>Engine invalid</h1> <button class='submit'><a style='color:red;' href='mailto:lesters1@bk.ru'>Send a message to Company DnDPrograms</a></button>");
}
?>

