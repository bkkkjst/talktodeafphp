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
"vocabulary.id,\n".
"vocabulary.voc_name,\n".
"video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"video\n".
"WHERE\n".
"vocabulary.video_id = video.id ");

$r=mysql_query("SELECT\n".
"video.vid_name\n".
"FROM\n".
"video ");

while(($e=mysql_fetch_assoc($q)) && ($f=mysql_fetch_assoc($r))){

	$game = array();
	/* $randdom_key1=array_rand($e,10);
	$game[$randdom_key["id"]]; */
	$game["id"]=$e["id"];
	$game["voc_name"]=$e["voc_name"];
	$game["correct"]=$e["vid_name"];
	$game["wrong"]=$f["vid_name"];
	print jsonRemoveUnicodeSequences($game);
}
       //$output[]=$e;

function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

mysql_close();
?>