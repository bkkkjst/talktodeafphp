<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$voc_name = $_GET['voc_name'];

$q=mysql_query("SELECT\n".
"vocabulary.id,\n".
"vocabulary.voc_name,\n".
"vocabulary.voc_engname,\n".
"type.type_name,\n".
"example.exam,\n".
"description.des_name,\n".
"category.cat_name,\n".
"action_video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"type ,\n".
"example ,\n".
"description ,\n".
"category ,\n".
"action_video\n".
"WHERE\n".
"vocabulary.voc_name = '{$voc_name}' AND\n".
"vocabulary.type_id = type.id AND\n".
"vocabulary.example_id = example.id AND\n".
"vocabulary.des_id = description.id AND\n".
"vocabulary.category_id = category.id AND\n".
"vocabulary.action_video_id = action_video.id");
			
while($e=mysql_fetch_assoc($q)){
	
	$vocabulary_detail = array();
	
	$vocabulary_detail["id"]=$e["id"];
	$vocabulary_detail["voc_name"]=$e["voc_name"];
	$vocabulary_detail["voc_engname"]=$e["voc_engname"];
	$vocabulary_detail["vid_name"]=$e["vid_name"];
	$vocabulary_detail["type_name"]=$e["type_name"];
	//$vocabulary_detail["img_name"]=$e["img_name"];
	$vocabulary_detail["exam"]=$e["exam"];
	$vocabulary_detail["des_name"]=$e["des_name"];
	$vocabulary_detail["cat_name"]=$e["cat_name"];
	
	//$output[]=$e;
	print jsonRemoveUnicodeSequences($vocabulary_detail);
}
       

function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

mysql_close();
?>

