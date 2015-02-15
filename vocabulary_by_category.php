<?php
mysql_connect("127.10.75.2:3306","adminqALkDCf","reUky8W-Z5DB");
mysql_select_db("talktodeaf_db");

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");
$cat_name =$_GET['cat_name'];

$q=mysql_query("SELECT\n".
"vocabulary.id,\n".
"vocabulary.voc_name,\n".
"video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"video ,\n".
"category\n".
"WHERE\n".
"vocabulary.video_id = video.id AND\n".
"category.cat_name = '".$cat_name."' AND\n".
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