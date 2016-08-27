<?PHP

require_once ("../engine/NSE/database.php");

$db = mysql_connect (BEZ_DBSERVER,BEZ_DBUSER,BEZ_DBPASSWORD);
    mysql_select_db (BEZ_DATABASE,$db);

?>