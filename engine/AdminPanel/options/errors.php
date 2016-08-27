<?php
define ("HOST", $_SERVER['SERVER_NAME']);
define('BEZ_KEY', true);
function get_filesize($file)
{
    // идем файл
    if(!file_exists("$file")) return "File not found";
   // теперь определяем размер файла в несколько шагов
  $filesize = filesize($file);
   // Если размер больше 1 Кб
   if($filesize > 1024)
   {  
       $filesize = round($filesize, 1);
       return $filesize." bite";   
   }
}

$file = "../../logs/visits.log";
$size = get_filesize ("$file");
include_once "../scripts/auth/show.php";
  if(file_exists("../../functions/visits.log.php") || file_exists("../../functions/cookie.log.php")){
	$logs= "<button id='btnoption' class='submit' style='float:left;'><a href='options/errors.php'>Logs</A></button>";
}else{
	$logs= "";
}
     echo "
    <html>
	
    <head>
	<link rel='stylesheet' type='text/css' href='../../../Templates/Default/bootstrap/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='../../../Templates/Default/bootstrap/css/style.css'>
	<link rel='stylesheet' type='text/css' href='../../../Templates/Default/styles/main.css'>
<title>AdminPanel</title>

    </head>
	
<body>

<br>
<h1 style='text-align:center;'>AdminPanel</h1>
<center>
<br>
<br>
<br>
<br>
$logs
<br>
<br>
<br>
<br>
<button id='btnoption' class='submit' style='float:left;'><a href='options/template.php'>About Template</A></button>
<br>
<br>
<br>
<br>
<button id='btnoption' class='submit' style='float:left;'><a href='options/engine.php'>About Engine</A></button>
<br>
<br>
<br>
<br>
<button id='btnoption' class='submit' style='float:left;'><a href='../../update/'>Updater</A></button>
<br>
<br>
<br>
<br>
<button id='btnoption' class='submit' style='float:left;'><a href='options/.php'>Version Controller</A></button>
<br>
<br>
<br>
<br>
</center>
";

    echo "File Visits.log:<br>";
echo "Size visits.log: <strong>".$size."</strong><br>"; // выводим результат с размером
if ($size>=100000){
	echo "FIle visits.log take up too much space";
	if (unlink("../../logs/visits.log")){
		echo "Log File Visits.log was deleted";
	}else{
		echo "Error, log file was not deleted";
	}
}else{
	echo "";
}

echo "
<hr>
<h5>Copyright <b style='color:#B23256;'>DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style='color:#B23256;'>NSE</b> (R) 2016<br>
</h5>
</body>

</html>
    ";
   


?>