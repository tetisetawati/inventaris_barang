<?php
	include "../koneksi.php";
	
	$id = $_GET['id'];
	$sql = "DELETE FROM jurusan WHERE kodejurusan = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacajurusan.php');
	}
	else
	{
	echo "hapus jurusan Gagal";
	}
?>