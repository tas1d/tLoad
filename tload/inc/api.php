<?php
	$id = $_GET["steamid"];
	
	$url = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=' . $apikey . '&steamids=' . $id;
	$json = file_get_contents($url);
	$table2 = json_decode($json, true);
	$table = $table2["response"]["players"][0];
	
	if (empty($id) || $id <= "76000000") {
		$uname = "No SteamID Set";
		$pp = '<img src="inc/img/alt.jpg" style="border: 1px solid #AAA;"></img>'; 
	} else {
		$uname = $table['personaname'];
		$pp = '<img src="'.$table['avatarfull'].'" alt="N/A"></img>'; 
	}
	
?>
