<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");
$cat_name = $_GET['cat_name'];

$q=mysql_query("SELECT\n".
"category.cat_name\n".
"FROM\n".
"category\n".
"WHERE\n".
"category.cat_name LIKE '%{$cat_name}' OR\n".
"category.cat_name LIKE '{$cat_name}%' OR\n".
"category.cat_name LIKE '%{$cat_name}%'");


while($e=mysql_fetch_assoc($q))
       $output[]=$e;

	   


function jsonRemoveUnicodeSequences($struct) {
   return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

/* if(!is_null($output)){print jsonRemoveUnicodeSequences($output);}else{
	
	$output=array("cat_name"=>"ไม่มี");
	
	while (list($key, $val) = each($output)) {
    echo "[{\"$key\":\"$val\"}]";
	
}} */
print jsonRemoveUnicodeSequences($output);
mysql_close();
?>