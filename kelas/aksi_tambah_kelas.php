<?php
	include "../koneksi.php";
	$kodekelas=$_POST['kodekelas'];
	$namakelas=$_POST['namakelas'];
	$tingkat=$_POST['tingkat'];
	$sql = "insert into kelas(kodekelas,namakelas,tingkat) values('$kodekelas','$namakelas','$tingkat')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacakelas.php');
	}
	else
	{
	echo"Gagal Disimpan";
	}
?>