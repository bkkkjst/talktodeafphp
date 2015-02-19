<?php
include("connection.php");
?>

<?php
mysql_connect($hostname,$username,$password);
mysql_select_db($db_name);

//ดึงข้อมูลออกมาในรูปแบบ UTF 8
mysql_query("SET NAMES UTF8");

$book_name = $_GET['book_name'];

$q=mysql_query("SELECT\n".
"book.id,\n".
"book.book_name,\n".
"book.book_description,\n".
"book.book_page_number,\n".
"book.book_price,\n".
"book.book_author,\n".
"book.book_publisher,\n".
"book.book_image\n".
"FROM\n".
"book\n".
"WHERE\n".
"book.book_name = '{$book_name}' order by book.book_name ASC");
while($e=mysql_fetch_assoc($q)){
	
	$book_detail = array();
	
	$book_detail["id"]=$e["id"];
	$book_detail["book_name"]=$e["book_name"];
	$book_detail["book_description"]=$e["book_description"];
	$book_detail["book_page_number"]=$e["book_page_number"];
	$book_detail["book_price"]=$e["book_price"];
	$book_detail["book_author"]=$e["book_author"];
	$book_detail["book_publisher"]=$e["book_publisher"];
	$book_detail["book_image"]=$e["book_image"];
	
	print jsonRemoveUnicodeSequences($book_detail);
	//$output[]=$e;
}
	


       

function jsonRemoveUnicodeSequences($struct) {
   return @preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($struct));
}   
   
//print(json_encode($output));

mysql_close();
?>

