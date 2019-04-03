<?php
	include "../koneksi.php";
	
	$id = $_GET['id'];
	$sql = "DELETE FROM kelas WHERE nis = '$id'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:bacasiswa.php');
	}
	else
	{
	echo "hapus siswa Gagal";
	}
?>