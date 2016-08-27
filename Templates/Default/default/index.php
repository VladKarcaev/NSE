
<?php

include ("version.php");

$version_required = array(
"1" => "1.1.15",
"2" => "1.1.16",
"3" => "1.1.17",
);

switch ($nse_version){

	case "$version_required[1]":
	$index_php_title = "NSE";

	$index_php = "
<head>
<title>$index_php_title</title>
<link media='screen' rel='stylesheet' href='Templates/Default/bootstrap/css/style.css'>
<link media='screen' rel='stylesheet' href='Templates/Default/bootstrap/css/bootstrap.css'>
<link media='screen' rel='stylesheet' href='Templates/Default/styles/main.css'>
</head>  
<body>


</body>
";

	break;

	case "$version_required[2]":
	$index_php_title = "Site_Name";

	$SITE_NAME = "DnDPrograms";

	$index_php = "
	
<head>
<title>$index_php_title</title>
<link media='screen' rel='stylesheet' href='Templates/Default/bootstrap/css/style.css'>
<link media='screen' rel='stylesheet' href='Templates/Default/bootstrap/css/bootstrap.css'>
<link media='screen' rel='stylesheet' href='Templates/Default/styles/default.css'>
</head>  
<body>

<div id='head'>
	<img alt='your_logo' src='Templates/Default/default/images/your_logo.gif'>
	<h2>$SITE_NAME</h2>
	<button class='reg_btns'><a href='?mode=reg'>Register</a></button>
	<button class='reg_btns'><a href='?mode=auth'>Login</a></button>
<hr>
</div>
<div id='head_btn'>
<button><a href='?mode=news'>MainPage</a></button>

<button>Contacts</button>
</div>
<hr>

</body>
";

	break;
	
	default:	
	
	echo "Для поддержки данного шаблона, требуется версия NSE: <br>
	$version_required[0],<br>
	$version_required[1],<br>
	$version_required[2],<br>
	$version_required[3],<br>
	$version_required[4],<br>
	У вас установлена версия NSE: $nse_version<br> 
	";

}

?>


