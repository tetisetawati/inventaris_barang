<?php
	include "../koneksi.php";
	$nis=$_POST['nis'];
	$namasiswa=$_POST['namasiswa'];
	$jk=$_POST['jk'];
	$alamat=$_POST['alamat'];
	
	$sql = "insert into siswa(nis,namasiswa,jk,alamat) values('$nis','$namasiswa','$jk','$alamat')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacasiswa.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>