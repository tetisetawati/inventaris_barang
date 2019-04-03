<?php
	include "../koneksi.php";
	
	$id = $_GET['id'];
	$sql = "DELETE FROM kelas WHERE kodekelas = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacakelas.php');
	}
	else
	{
	echo "hapus kelas Gagal";
	}
?>