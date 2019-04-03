<?php
	include "../koneksi.php";
	$id = $_GET['id'];
	$kodekelas=$_POST['kodekelas'];
	$namakelas=$_POST['namakelas'];
	$tingkat=$_POST['tingkat'];
	$sql2 = "UPDATE kelas SET kodekelas = '$kodekelas', namakelas = '$namakelas', tingkat ='$tingkat' WHERE 			 			kodekelas = '$id'";
	
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacakelas.php');
	}
	else
	{
	echo "Edit kelas gagal";
	}
?>