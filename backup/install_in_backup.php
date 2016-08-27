<?
$host = $_SERVER['HTTP_HOST'];

rename("install.php", "../install.php");

ob_start();

header("Location: http://".$host."/install.php");

?>