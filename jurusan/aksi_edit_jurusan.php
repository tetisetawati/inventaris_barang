<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$kodejurusan=$_POST['kodejurusan'];
	$namajurusan=$_POST['namajurusan'];
	
	$sql2 = "UPDATE jurusan SET kodejurusan = '$kodejurusan', namajurusan = '$namajurusan' WHERE kodejurusan = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacajurusan.php');
	}
	else
	{
	echo "Edit jurusan gagal";
	}
?>