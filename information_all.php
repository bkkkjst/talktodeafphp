<?php
mysql_connect("127.10.75.2:3306","adminqALkDCf","reUky8W-Z5DB");
mysql_select_db("t2d_db");

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$q=mysql_query("SELECT\n".
"information.id,\n".
"information.place_name,\n".
"information.address,\n".
"information.lat,\n".
"information.phone,\n".
"information.`long`\n".
"FROM\n".
"information\n".
"WHERE\n".
"information.id = 1");
			
while($e=mysql_fetch_assoc($q))
       $output[]=$e;

function jsonRemoveUnicodeSequences($struct) {
   return @preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));
print jsonRemoveUnicodeSequences($output);
mysql_close();
?>