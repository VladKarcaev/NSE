<?php
 
 //Ключ защиты
 if(!defined('BEZ_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('../../404.html'));
 }
 
 //Проверяем зашел ли пользователь
 if($user === false)
 	echo '<h3>Error!!! You not login to the AdminPanel</h3>'."\n";

 if($user === true)
 {
 	$host = $_SERVER['HTTP_HOST'];
	 header("Location: http://".$host."/engine/AdminPanel/admin.php");
 } 
?>
