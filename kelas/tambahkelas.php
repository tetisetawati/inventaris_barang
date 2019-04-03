<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Tambah - Manajemen Kelas</h2>
      <hr>
      <form action='aksi_tambah_kelas.php' method='POST'>
	<table border="0">
	  <td>Kode kelas</td>
	  <td><input type='text' name='kodekelas' id="kodekelas"></td>
	  </tr>
	<tr>
	  <td>Nama kelas</td>
	  <td><input type='text' name='namakelas' id="namakelas"></td>
	  </tr>
	<tr>
	  <td>Tingkat</td>
	  <td><input type='text' name='tingkat' id="tingkat"></td>
	  </tr>

	<tr>
		<td></td>
		<td >
	  <input type='submit' value='simpan'>
	  </td></tr>
	</table>
</form>
</body>
</html>