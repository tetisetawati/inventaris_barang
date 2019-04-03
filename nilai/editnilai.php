<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Edit - Manajemen Nilai</h2>
      <hr>
      <?php
      	$id = $_GET['id'];
      	$sql = "SELECT * FROM nilai WHERE kodenilai='$id'";
      	$query = mysqli_query($db_link,$sql);
      	$data = mysqli_fetch_array($query);
      ?>
      <form action='aksi_edit_nilai.php?id=<?php echo "$id"; ?>' method='POST'>
	<table border="0">
	<tr>
		<td>Kode Nilai</td>
		<td><input type="text" name="kodenilai" value="<?php echo "$data[kodenilai]"; ?>"></td>
	</tr>
	<tr>
		<td>NIS</td>
		<td><input type="text" name="nis" value="<?php echo "$data[nis]"; ?>"></td>
	</tr>
	 <tr>
	  <td>Kode Guru</td>
	  <td>
	  	<select name="kodeguru">
	  		<?php
	  			$sqlguru = "SELECT * FROM guru";
	  			$queryguru = mysqli_query($db_link,$sqlguru);
	  			while ($dataguru = mysqli_fetch_array($queryguru)) {
	  				if($dataguru['kodeguru']==$data['kodeguru']){
	  					echo "
	  					<option value='$dataguru[kodeguru]' selected>$dataguru[kodeguru] - $dataguru[namaguru]</option>
	  				";
	  				}else{
	  					echo "
	  					<option value='$dataguru[kodeguru]'>$dataguru[kodeguru] - $dataguru[namaguru]</option>
	  				";
	  				}
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
	  				if($datajurusan['kodejurusan']==$data['kodejurusan']){
	  					echo "
	  					<option value='$datajurusan[kodejurusan]' selected>$datajurusan[kdjurusan] - $datajurusan[namajurusan]</option>
	  				";
	  				}else{
	  					echo "
	  					<option value='$datajurusan[kodejurusan]'>$datajurusan[kodejurusan] - $datajurusan[namajurusan]</option>
	  				";
	  				}
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
	  				if($datakelas['kodekelas']==$data['kodekelas']){
	  					echo "
	  					<option value='$datakelas[kodekelas]' selected>$datakelas[kodekelas] - $datakelas[namakelas]</option>
	  				";
	  				}else{
	  					echo "
	  					<option value='$datakelas[kodekelas]'>$datakelas[kodekelas] - $datakelas[namakelas]</option>
	  				";
	  				}
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
	  				if($datamapel['kodemapel']==$data['kodemapel']){
	  					echo "
	  					<option value='$datamapel[kodemapel]' selected>$datamapel[kodemapel] - $datamapel[namamapel]</option>
	  				";
	  				}else{
	  					echo "
	  					<option value='$datamapel[kodemapel]'>$datamapel[kodemapel] - $datamapel[namamapel]</option>
	  				";
	  				}
	  			}
	  		?>
	  	</select>
	  </td>
	  </tr>
	  <tr>
		<td>Tugas</td>
		<td><input type="text" name="tugas" value="<?php echo "$data[tugas]"; ?>"></td>
	</tr>
	  <tr>
		<td>UTS</td>
		<td><input type="text" name="uts" value="<?php echo "$data[uts]"; ?>"></td>
	</tr>
	  <tr>
		<td>UAS</td>
		<td><input type="text" name="uas" value="<?php echo "$data[uas]"; ?>"></td>
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