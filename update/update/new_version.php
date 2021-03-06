<?

$new_version = "1.1.15 Stable";

$update_info = "Update for NSE, the first update for NSE 1.1.15";

$version_required = array(
'1' => '1.1.15',
'2' => '1.1.16',
 );

$updated_files = array(
	'1' => 'engine.php', 
	'2' => 'admin.php', 
	'3' => 'functions.php', 
	'4' => 'templates/default/default/index.php', 
	'5' => 'templates/default/default/version.php',	
	'6' => 'main.css', 
);

$beta_status = "false";

$change_notes = <<<notes

<ul>
<li>Updated Engine</li>
<li>Updated Style</li>
<li>Updated Templates Service</li>
<li>Updated AdminPanel</li>
<li>Updated Default Template</li>
<li>Updated functions for AdminPanel</li>
<li>Added DnDConnect Version Required: $dnd_connect_version_required[1], $dnd_connect_version_required[2], $dnd_connect_version_required[3], $dnd_connect_version_required[4] </li>
</ul>

notes;
?>