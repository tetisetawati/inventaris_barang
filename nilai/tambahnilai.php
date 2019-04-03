<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Tambah - Manajemen Nilai</h2>
      <hr>
      <form action='aksi_tambah_nilai.php' method='POST'>
	<table border="0">
	<tr>
		<td>Kode Nilai</td>
		<td><input type="text" name="kodenilai"></td>
	</tr>
	 <tr>
	  <td>NIS</td>
	  <td>
	  	<select name="nis">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlsiswa = "SELECT * FROM siswa";
	  			$querysiswa = mysqli_query($db_link,$sqlsiswa);
	  			while ($datasiswa = mysqli_fetch_array($querysiswa)) {
	  				echo "
	  					<option value='$datasiswa[nis]'>$datasiswa[nis] - $datasiswa[namasiswa]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	 <tr>
	  <td>Kode Guru</td>
	  <td>
	  	<select name="kodeguru">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlguru = "SELECT * FROM guru";
	  			$queryguru = mysqli_query($db_link,$sqlguru);
	  			while ($dataguru = mysqli_fetch_array($queryguru)) {
	  				echo "
	  					<option value='$dataguru[kodeguru]'>$dataguru[kodeguru] - $dataguru[namaguru]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	 <tr>
	  <td>Kode Jurusan</td>
	  <td>
	  	<select name="kodejurusan">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqljurusan = "SELECT * FROM jurusan";
	  			$queryjurusan = mysqli_query($db_link,$sqljurusan);
	  			while ($datajurusan = mysqli_fetch_array($queryjurusan)) {
	  				echo "
	  					<option value='$datajurusan[kodejurusan]'>$datajurusan[kodejurusan] - $datajurusan[namajurusan]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	 <tr>
	  <td>Kode Kelas</td>
	  <td>
	  	<select name="kodekelas">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlkelas = "SELECT * FROM kelas";
	  			$querykelas = mysqli_query($db_link,$sqlkelas);
	  			while ($datakelas = mysqli_fetch_array($querykelas)) {
	  				echo "
	  					<option value='$datakelas[kodekelas]'>$datakelas[kodekelas] - $datakelas[namakelas]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	 <tr>
	  <td>Kode Mata Pelajaran</td>
	  <td>
	  	<select name="kodemapel">
	  		<option value="">-- Pilih --</option>
	  		<?php
	  			$sqlmapel = "SELECT * FROM mapel";
	  			$querymapel = mysqli_query($db_link,$sqlmapel);
	  			while ($datamapel = mysqli_fetch_array($querymapel)) {
	  				echo "
	  					<option value='$datamapel[kodemapel]'>$datamapel[kodemapel] - $datamapel[namamapel]</option>
	  				";
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
		<td>Tugas</td>
		<td><input type="text" name="tugas"></td>
	</tr>
	  <tr>
		<td>UTS</td>
		<td><input type="text" name="uts"></td>
	</tr>
	  <tr>
		<td>UAS</td>
		<td><input type="text" name="uas"></td>
	</tr>
	<tr>
		<td></td>
		<td>
	  <input type='submit' value='simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>