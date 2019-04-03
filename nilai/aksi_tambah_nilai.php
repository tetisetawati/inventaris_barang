<?php
	include "../koneksi.php";
	$nis=$_POST['nis'];
	$kodenilai=$_POST['kodenilai'];
	$kodeguru=$_POST['kodeguru'];
	$kodejurusan=$_POST['kodejurusan'];
	$kodekelas=$_POST['kodekelas'];
	$kodemapel=$_POST['kodemapel'];
	$tugas=$_POST['tugas'];
	$uts=$_POST['uts'];
	$uas=$_POST['uas'];
	$nilaiakhir = ($tugas+$uts+$uas)/3;
	$nilaiakhir = round($nilaiakhir,2);

	$sql_cek_1 = "SELECT * FROM mengajar WHERE kodeguru='$kodeguru' AND kodejurusan='$kodejurusan' AND kodekelas='$kodekelas' AND kodemapel='$kodemapel'";

	if(mysqli_num_rows(mysqli_query($db_link, $sql_cek_1)) != 1)
	{
		echo 'guru belum terdaftar di tabel mengajar <a href="tambahnilai.php">Back</a>';
		exit;
	}
	
	$sql = "INSERT INTO nilai(nis,kodenilai,kodeguru,kodejurusan,kodekelas,kodemapel,tugas,uts,uas,nilaiakhir) VALUES('$nis','$kodenilai','$kodeguru','$kodejurusan','$kodekelas','$kodemapel','$tugas','$uts','$uas','$nilaiakhir')";
	$query  =mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:bacanilai.php');
	}
	else
	{
	echo"Gagal Disimpan";
	echo mysqli_error($db_link);
	}
?>