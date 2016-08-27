<?
function visits_log(){
// записываем текущее время в строку, 
$er_time=date("H:i:s d M Y");

// получаем URL, с которого пришёл посетитель 
$H=getenv("HTTP_REFERER");

// получаем IP посетителя 
$R=getenv("REMOTE_ADDR");

// получаем относительный адрес странички, которую запросил посетитель 
$W=getenv("REQUEST_URI");

$f = fopen("engine/logs/visits.log",'a');
// дальше - понятно, пишем всё это в файл 

flock ($f,2);
//Блокируем

fwrite($f,"     $er_time\n Rf: $H\n IP: $R\n Rq: $W\n|||");
//Пишем

fclose($f);
// и закрываем
}
?>