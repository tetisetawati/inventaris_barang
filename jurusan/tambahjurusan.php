<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Tambah - Manajemen Jurusan</h2>
      <hr>
      <form action='aksi_tambah_jurusan.php' method='POST'>
	<table border="0">
	  <td>Kode Jurusan</td>
	  <td><input type='text' name='kodejurusan' id="kodejurusan"></td>
	  </tr>
	<tr>
	  <td>Nama Jurusan</td>
	  <td><input type='text' name='namajurusan' id="namajurusan"></td>
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