<?php

unlink("update/update.php");

unlink("update/new_version.php");

$host = $_SERVER['HTTP_HOST'];

ob_start();

header("Location: http://".$host."/admin.php");

 ?>