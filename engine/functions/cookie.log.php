<?

function cookie_log(){

$cookiestat = $_COOKIE['NSE'];

$f = fopen("engine/logs/cookie.log",'a+');

flock ($f,2);

fwrite($f,"$cookiestat
");

fclose($f);

}

?>