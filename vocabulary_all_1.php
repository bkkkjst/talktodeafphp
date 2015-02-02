<?php
mysql_connect("127.10.75.2:3306","adminqALkDCf","reUky8W-Z5DB");
mysql_select_db("t2d_db");

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$q=mysql_query("SELECT\n".
"vocabulary.id,\n".
"vocabulary.voc_name,\n".
"vocabulary.voc_des,\n".
"video.vid_name,\n".
"video.vid_path,\n".
"type.type_name,\n".
"image.img_name,\n".
"image.img_path,\n".
"example.exam,\n".
"category.name_cat\n".
"FROM\n".
"vocabulary ,\n".
"video ,\n".
"type ,\n".
"image ,\n".
"example ,\n".
"category\n".
"WHERE\n".
"vocabulary.category_id = 1 AND\n".
"vocabulary.video_id = video.id AND\n".
"vocabulary.type_id = type.id AND\n".
"vocabulary.image_id = image.id AND\n".
"vocabulary.example_id = example.id AND\n".
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

