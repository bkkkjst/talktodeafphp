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
"place ORDER BY\n".
"place.place_name ASC");

//$response["place_detail"] = array();

while($e=mysql_fetch_assoc($q)){
	
	/* $place_detail = array();
	
	$place_detail["id"]=$e["id"];
	$place_detail["place_name"]=$e["place_name"];
	$place_detail["address"]=$e["address"];
	$place_detail["phone"]=$e["phone"];
	$place_detail["latitude"]=$e["latitude"];
	$place_detail["longitude"]=$e["longitude"]; */
	
	$output[]=$e;
	
	}
       

 
   
function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));
print jsonRemoveUnicodeSequences($output);

mysql_close();
?>
