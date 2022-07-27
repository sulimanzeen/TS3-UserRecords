<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

require_once('setxzeen/TeamSpeak3/TeamSpeak3.php');
require_once('config.php');

//SYSTEM By SulimanZeen //




		
$ts3 = TeamSpeak3::factory("serverquery://{$ts['username']}:{$ts['password']}@{$ts['address']}:{$ts['tcp_port']}/?server_port={$ts['udp_port']}&nickname={$ts['botname']}");

		
		
$userecords = $ts3->clientcountdb();
		
		
$ch = $ts3->channelGetById($channelid);
			
			
			
$ch->modify(array(
 "channel_name"  => "[cspacer]User Records : ". $userecords ."",
 "channel_topic" => "Bot Made By SulimanZeen"
));  
		
		
		
		



// Github: https://github.com/sulimanzeen

//Bot Made On 2/7/2020 By SulimanZeen



//SYSTEM By SulimanZeen //
// END! //



 ?>
