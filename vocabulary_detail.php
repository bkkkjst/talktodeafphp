<?php
mysql_connect("127.10.75.2:3306","adminqALkDCf","reUky8W-Z5DB");
mysql_select_db("talktodeaf_db");

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$q=mysql_query("SELECT ".
"vocabulary.id, ".
"vocabulary.voc_name, ".
"vocabulary.voc_des, ".
"video.vid_name, ".
"video.vid_path, ".
"type.type_name, ".
"image.img_name, ".
"image.img_path, ".
"example.exam, ".
"category.cat_name ".
"FROM ".
"vocabulary , ".
"video , ".
"type , ".
"image , ".
"example , ".
"category ".
"WHERE ".
"vocabulary.voc_name = '".$_GET['voc_name']."' AND ".
"vocabulary.video_id = video.id AND ".
"vocabulary.type_id = type.id AND ".
"vocabulary.image_id = image.id AND ".
"vocabulary.example_id = example.id AND ".
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

