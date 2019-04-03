<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Tambah - Manajemen Siswa</h2>
      <hr>
      <form action='aksi_tambah_siswa.php' method='POST'>
	<table border="0">
	  <td>NIS</td>
	  <td><input type='text' name='nis' id="nis"></td>
	  </tr>
	<tr>
	  <td>Nama Siswa</td>
	  <td><input type='text' name='namasiswa' id="namasiswa"></td>
	  </tr>
	<tr>
	  <td>Jenis Kelamin</td>
	  <td><input type='text' name='jk' id="jk"></td>
	  </tr>
  <td>Alamat</td>
	  <td><input type='text' name='alamat' id="alamat"></td>
	<tr>
		<td></td>
		<td >
	  <input type='submit' value='simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>