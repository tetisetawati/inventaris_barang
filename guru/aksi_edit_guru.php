<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$nis=$_POST['nis'];
	$namasiswa=$_POST['namasiswa'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	$sql2 = "UPDATE siswa SET nis = '$nis', namasiswa = '$namasiswa', jk = '$jk', alamat = '$alamat' WHERE 			 			nis = '$id'";
	
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacasiswa.php');
	}
	else
	{
	echo "Edit kelas gagal";
	}
?>