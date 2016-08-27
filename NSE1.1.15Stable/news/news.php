<?

switch($_GET['news']){

case "updated":
require "page/nse_updated.php";
exit;

case "installed":
require "page/nse_installed.php";
exit;

case "your_news":
require "page/your_news.php";
exit;
}

function date_check(){
	$data = date("Y/m/d H:i:s");
    $number = "1";
    $file = fopen("news/cache/$number".".dsq","w+");
}

echo "

<div id='news'>

<span>
<h3><a href=''>Your_News</a></h3>
<h4>Info:</h4>
<b>Undefined</b><br>
";
date_check();
echo "
<br>
<button><a href='?news=your_news'>Full</a></button>
</span>
<hr>
<span>
<h3><a href=''>NSE was updated</a></h3>
<h4>Info:</h4>
<b>New Version: $nse_version</b><br>
";
date_check();
echo "
<br>
<button><a href='?news=updated'>Full</a></button>
</span>
<hr>
<span>
<h3><a href=''>NSE was installed</a></h3>
<h4>Info:</h4>
<b>NSE Version: $nse_version</b><br>
";
date_check();
echo "
<br><button><a href='?news=installed'>Full</a></button>
</span>

</div>

<hr>

<h5>Copyright <b style='color:#B23256;'>Your_Company</b> (c) 2015-2016<br>
Powered by <b style='color:#B23256;'>NSE</b> (R) 2016<br>
</h5>
";

?>