<?php
 if(!defined('BEZ_KEY'))
 {
     header("HTTP/1.1 404 Not Found");
     exit(file_get_contents('404.html'));
 }

 include_once ("../NSE/database.php");

 define('BEZ_ERROR_CONNECT','Немогу соединится с БД');

 define('BEZ_NO_DB_SELECT','Данная БД отсутствует на сервере');

 define('BEZ_HOST','http://'. $_SERVER['HTTP_HOST'] .'/');
 
 ?>