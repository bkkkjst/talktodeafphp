<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$q=mysql_query("SELECT\n".
"place.id,\n".
"place.place_name,\n".
"place.address,\n".
"place.phone,\n".
"place.latitude,\n".
"place.longitude\n".
"FROM\n".
"place");

//$response["place_detail"] = array();

while($e=mysql_fetch_assoc($q)){
	
	$place_detail = array();
	
	$place_detail["id"]=$row["id"];
	$place_detail["place_name"]=$row["place_name"];
	$place_detail["address"]=$row["address"];
	$place_detail["phone"]=$row["phone"];
	$place_detail["latitude"]=$row["latitude"];
	$place_detail["longitude"]=$row["longitude"];
	
	//$output[]=$e;
	print jsonRemoveUnicodeSequences($place_detail);
	}
       

 
   
function jsonRemoveUnicodeSequences($struct) {
   return @preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

mysql_close();
?>
