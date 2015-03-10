<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");
//$cat_name = $_GET['cat_name'];

$q=mysql_query("SELECT\n".
"vocabulary.voc_name,\n".
"action_video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"action_video\n".
"WHERE\n".
"vocabulary.action_video_id = action_video.id\n".
"ORDER BY RAND()\n".
"LIMIT 1");

$r=mysql_query("SELECT\n".
"vocabulary.voc_name\n".
"FROM\n".
"vocabulary\n".
"ORDER BY RAND()\n".
"LIMIT 1");

while(($e=mysql_fetch_assoc($q)) && ($f=mysql_fetch_assoc($r))){

	$game = array();
	/* $randdom_key1=array_rand($e,10);
	$game[$randdom_key["id"]]; */
	//$game["id"]=$e["id"];
	$game["vid_name"]=$e["vid_name"];
	$game["correct"]=$e["voc_name"];
	$game["wrong"]=$f["voc_name"];
	print jsonRemoveUnicodeSequences($game);
}
       //$output[]=$e;

function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

mysql_close();
?>