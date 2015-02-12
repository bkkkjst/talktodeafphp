<?php
mysql_connect("127.10.75.2:3306","adminqALkDCf","reUky8W-Z5DB");
mysql_select_db("talktodeaf_db");

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$voc_name = $_GET['voc_name'];
echo $voc_name;

$q=mysql_query("SELECT\n".
"vocabulary.id,\n".
"vocabulary.voc_name,\n".
"video.vid_name,\n".
"type.type_name,\n".
"image.img_name,\n".
"example.exam,\n".
"description.des_name,\n".
"category.cat_name\n".
"FROM\n".
"vocabulary ,\n".
"video ,\n".
"type ,\n".
"image ,\n".
"example ,\n".
"description ,\n".
"category\n".
"WHERE\n".
"vocabulary.voc_name = '".$voc_name."' AND\n".
"vocabulary.video_id = video.id AND\n".
"vocabulary.type_id = type.id AND\n".
"vocabulary.img_id = image.id AND\n".
"vocabulary.example_id = example.id AND\n".
"vocabulary.des_id = description.id AND\n".
"vocabulary.category_id = category.id");
			
while($e=mysql_fetch_assoc($q))
       $output[]=$e;

function jsonRemoveUnicodeSequences($struct) {
   return @preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));
print jsonRemoveUnicodeSequences($output);
mysql_close();
?>

