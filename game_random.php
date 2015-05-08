<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");


$game = array();

$q=mysql_query("SELECT\n".
"vocabulary.voc_name,\n".
"vocabulary.eng_voc_name,\n".
"action_video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"action_video\n".
"WHERE\n".
"vocabulary.action_video_id = action_video.id\n".
"ORDER BY RAND()\n".
"LIMIT 1");

$querySqlWrongAwnser = "SELECT\n".
"vocabulary.voc_name,\n".
"vocabulary.eng_voc_name\n".
"FROM\n".
"vocabulary\n".
"ORDER BY RAND()\n".
"LIMIT 1";

$r=mysql_query($querySqlWrongAwnser);

// compare data is equal ??
function isEqual($correct, $wrong){
	
	if($correct == $wrong){
		return true;
		}else {
			return false;
		}// end if
	}// end function isEqual()



// Query wrong awnser
function queryWrongAwnser(){
	global $game;
	global $querySqlWrongAwnser;
	
	$r=mysql_query($querySqlWrongAwnser);

		while($f=mysql_fetch_assoc($r)){
			$game["eng_wrong"]=$f["eng_voc_name"];
			$game["wrong"]=$f["voc_name"];
			
	isEqual($game["eng_wrong"], $game["wrong"]);		
}// end while loop
}// end function queryWrongAwnser()

while(($e=mysql_fetch_assoc($q)) && ($f=mysql_fetch_assoc($r))){

	
	
	$game["vid_name"]=$e["vid_name"];
	
	$game["eng_correct"]=$e["eng_voc_name"];
	$game["eng_wrong"]=$f["eng_voc_name"];
	$game["correct"]=$e["voc_name"];
	$game["wrong"]=$f["voc_name"];
	
	
	
	while(isEqual($game["correct"], $game["wrong"])){
		queryWrongAwnser();
	}
	
	
	
	print jsonRemoveUnicodeSequences($game);
}
      

function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   echo mysql_error();

mysql_close();
?>