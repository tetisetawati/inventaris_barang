<?php
	include "../koneksi.php";
	$kodejurusan=$_POST['kodejurusan'];
	$namajurusan=$_POST['namajurusan'];
	$sql = "insert into jurusan(kodejurusan,namajurusan) values('$kodejurusan','$namajurusan')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacajurusan.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>