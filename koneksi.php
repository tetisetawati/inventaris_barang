<?php
	$host="localhost:3306";
	/*$user_name="root";
	$pass="smk";
*/	$database_name="inventarisbarang";
	$db_link=mysqli_connect ($host,$database_name);
	if (!$db_link){
		echo"Tidak Terhubung";
	}
?>