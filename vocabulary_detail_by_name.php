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
"vocabulary.eng_voc_name,\n".
"type.eng_type_name,\n".
"type.type_name,\n".
"speak_video.vid_name,\n".
"example.exam,\n".
"example.eng_exam,\n".
"description.des_name,\n".
"description.eng_des_name,\n".
"category.cat_name,\n".
"category.eng_cat_name,\n".
"action_video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"type ,\n".
"speak_video ,\n".
"example ,\n".
"description ,\n".
"category ,\n".
"action_video\n".
"WHERE\n".
"vocabulary.voc_name = '{$voc_name}' AND\n".
"vocabulary.type_id = type.id AND\n".
"vocabulary.speak_video_id = speak_video.id AND\n".
"vocabulary.example_id = example.id AND\n".
"vocabulary.des_id = description.id AND\n".
"vocabulary.category_id = category.id AND\n".
"vocabulary.action_video_id = action_video.id");
			
while($e=mysql_fetch_assoc($q)){
	
	$vocabulary_detail = array();
	
	$vocabulary_detail["id"]=$e["id"];
	$vocabulary_detail["voc_name"]=$e["voc_name"];
	
	$vocabulary_detail["vid_name"]=$e["vid_name"];
	$vocabulary_detail["type_name"]=$e["type_name"];
	
	//$vocabulary_detail["img_name"]=$e["img_name"];
	$vocabulary_detail["exam"]=$e["exam"];
	
	$vocabulary_detail["des_name"]=$e["des_name"];
	
	$vocabulary_detail["cat_name"]=$e["cat_name"];

$vocabulary_detail["eng_voc_name"]=$e["eng_voc_name"];
$vocabulary_detail["eng_cat_name"]=$e["eng_cat_name"];
$vocabulary_detail["eng_type_name"]=$e["eng_type_name"];
$vocabulary_detail["eng_des_name"]=$e["eng_des_name"];
$vocabulary_detail["eng_exam"]=$e["eng_exam"];


	
	//$output[]=$e;
	print jsonRemoveUnicodeSequences($vocabulary_detail);
}
       

function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

mysql_close();
?>

