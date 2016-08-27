<?

$host = $_SERVER['HTTP_HOST'];

define("AdminPanelNSE1.1.15",true);

if (isset($_COOKIE['NSE'])) 

$cnt=$_COOKIE['NSE']+1;

else $cnt=0;

setcookie("NSE",$cnt,0x6FFFFFFF);

if (!file_exists("engine/NSE/database.php") || !file_exists("engine/AdminPanel/admin_data.php")){

ob_start();

header("Location: http://".$host."/backup/install_in_backup.php");

}else{

if (file_exists("install.php")){
	rename("install.php", "backup/install.php");
}

include_once ("engine/NSE/engine.php");

include_once ("engine/functions/visits.log.php");

include_once ("engine/functions/cookie.log.php");

include "Templates/Default/default/index.php";


echo visits_log();

echo cookie_log();

echo $index_php;

ob_start();

switch($_GET['mode']){

case 'auth':
require '/reg/auth.php';
exit;

case 'add_news':
require '/engine/news/create.php';
exit;

case 'news':
require '/news/news.php';
exit;
 
case 'reg':
require '/reg/reg.php';
exit;

case 'contacts':
require '/pages/rules.php';
exit;

default:
require '/news/news.php';
break;
}
}

?>