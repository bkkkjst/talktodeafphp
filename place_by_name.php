<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$place_name = $_GET['place_name'];

$q=mysql_query("SELECT\n".
"place.id,\n".
"place.place_name,\n".
"place.address,\n".
"place.phone,\n".
"place.`long`,\n".
"place.lat\n".
"FROM\n".
"place\n".
"WHERE\n".
"place.place_name = {$place_name}");
while($e=mysql_fetch_assoc($q))
       $output[]=$e;

function jsonRemoveUnicodeSequences($struct) {
   return @preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));
print jsonRemoveUnicodeSequences($output);
mysql_close();
?>
