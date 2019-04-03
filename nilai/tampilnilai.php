<?php
	
		include '../koneksi.php';
	
	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Manajemen Nilai</h2>
      <hr>
      
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			<th>No</th>
			<th>Kode Nilai</th>
			<th>NIS</th>
			<th>Nama Guru</th>
			<th>Nama Jurusan</th>
			<th>Nama Kelas</th>
			<th>Nama Mapel</th>
			<th>Tugas</th>
			<th>UTS</th>
			<th>UAS</th>
			<th>Nilai Akhir</th>
			
		</tr>
		<?php
			$no=1;
			$sql = "SELECT * FROM nilai n,siswa s,guru g, jurusan j,kelas k, mapel m WHERE n.kodeguru=g.kodeguru AND n.kodejurusan=j.kodejurusan AND n.kodekelas=k.kodekelas AND n.kodemapel=m.kodemapel AND n.nis=s.nis";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				echo"
				<tr>
					<td>$no</td>
					<td>$data[kodenilai]</td>
					<td>$data[nis]</td>
					<td>$data[namaguru]</td>
					<td>$data[namajurusan]</td>
					<td>$data[namakelas]</td>
					<td>$data[namamapel]</td>
					<td>$data[tugas]</td>
					<td>$data[uts]</td>
					<td>$data[uas]</td>
					<td>$data[nilaiakhir]</td>		
				
				</tr>
				";
				$no++;
				}
		?>
		</table>
</body>
</html>