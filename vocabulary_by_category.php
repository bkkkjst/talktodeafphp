<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");
$cat_name =$_GET['cat_name'];

$q=mysql_query("SELECT\n".
"vocabulary.id,\n".
"vocabulary.voc_name,\n".
"action_video.vid_name\n".
"FROM\n".
"vocabulary ,\n".
"action_video ,\n".
"category\n".
"WHERE\n".
"vocabulary.action_video_id = action_video.id AND\n".
"category.cat_name = '".$cat_name."' AND\n".
"vocabulary.category_id = category.id ORDER BY abs\n".
"(vocabulary.voc_name) ASC, vocabulary.voc_name ASC");
while($e=mysql_fetch_assoc($q))
       $output[]=$e;

function jsonRemoveUnicodeSequences($struct) {
   return @preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));
print jsonRemoveUnicodeSequences($output);
mysql_close();
?>