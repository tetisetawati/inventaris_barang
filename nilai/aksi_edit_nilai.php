<?php
	include "../koneksi.php";
	$id = $_GET['id'];
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
		echo 'guru belum terdaftar di tabel mengajar <a href="bacanilai.php">Back</a>';
		exit;
	}

	$sql2 = "UPDATE nilai SET kodenilai='$kodenilai',nis='$nis', kodeguru='$kodeguru', kodejurusan='$kodejurusan', kodekelas = '$kodekelas', kodemapel = '$kodemapel',tugas='$tugas',uts='$uts',uas='$uas',nilaiakhir='$nilaiakhir' WHERE kodenilai = '$id'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:bacanilai.php');
	}
	else
	{
	echo "Edit nilai gagal";
	}
?>