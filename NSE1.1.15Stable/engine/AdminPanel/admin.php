
<?php

define("AdminPanelNSE1.1.15",true);

if(file_exists("../functions/visits.log.php")){

	$btn_logs= "<button class='btn_logs1 submit' style='float:left;'>Show</button> &nbsp &nbsp &nbsp";

	$btn_logs.= "<button class='btn_logs2 submit' style='float:left;'>Hide</button> &nbsp &nbsp &nbsp";

}elseif(file_exists("../functions/cookie.log.php")){

	$btn_logs= "<button class='btn_logs1 submit' style='float:left;'>Show</button>";

	$btn_logs.= "<button class='btn_logs2 submit' style='float:left;'>Hide</button>";

}else{
	$btn_logs= "UnAvailable";
}

if(file_exists("../../backup/install.php") && file_exists("../../backup/install_in_backup.php")){

	$btn_reinst= "<h3>NSE</h3> <button class='submit'><a href='../../backup/install_in_backup.php'>ReInstall NSE</a></button>";

}else{
	$btn_reinst= "UnAvailable";
}

include_once ("options/functions.php");

    echo "
    <html>
	
    <head>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' type='text/css' href='../../../Templates/Default/bootstrap/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='../../../Templates/Default/bootstrap/css/style.css'>
	<link rel='stylesheet' type='text/css' href='../../../Templates/Default/styles/main.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>

	<script type='text/javascript'>

	$(document).ready(function(){

		$('.logs').hide();

		$('.eng').hide();

		$('.btn_eng1').click(function(){

			$('.eng').show();
});

        $('.btn_eng2').click(function(){

			$('.eng').hide();
});

		$('.btn_logs2').click(function(){

			$('.logs').hide();

	});
});

	</script>

	<script type='text/javascript'>

	$(document).ready(function(){

		$('.logs').hide();

		$('.btn_logs1').click(function(){

			$('.logs').show();
	});
});

	</script>

<title>AdminPanel</title>

    </head>
	
<body>

<br>
<h1 style='text-align:center;'>AdminPanel</h1>
<h2 style='text-align:center;'>System</h2>
<h3>Logs</h3>
$btn_logs
$btn_reinst
<h3>Engine</h3>
<button class='btn_eng1 submit' style='float:left;'>Show</button>
<button class='btn_eng2 submit' style='float:left;'>Hide</button>
<br>
<br>
<p class='logs'>
$logs
</p>
<br>
";
$logs = logs();
$engine_check = engine_check();
echo"
<br>
<p class='eng'>
$engine_check
</p>
<h2 style='text-align:center;clear:both;'>Profile</h2>
<br>
<br>
";
$profile = profile();
echo "
<p class='profile'>
$profile
</p>
<br>
<h2 style='text-align:center;clear:both;'>Updater</h2>
<br>
$updates
";
$updates = check_updates();
echo "
<br>
<hr>
<h5>Copyright <b style='color:#B23256;'>DnDPrograms</b> (c) 2015-2016<br>
Powered by <b style='color:#B23256;'>NSE</b> (R) 2016<br>
</h5>

</body>

</html>
    ";

?>


