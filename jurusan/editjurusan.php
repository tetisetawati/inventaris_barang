<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h2>Edit - Manajemen Jurusan</h2>
      <hr>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM jurusan WHERE kodejurusan ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_jurusan.php?id=<?php echo "$id"; ?>' method='POST'>
			<table border="0">
			<tr>
			  <td>Kode Jurusan</td>
			  <td><input name='kodejurusan' type='text' id="kodejurusan" value="<?php echo $data['kodejurusan'] ?>"></td>
			  </tr>
			<tr>
			  <td>Nama Jurusan</td>
			  <td><input name='namajurusan' type='text' id="namajurusan" value="<?php echo $data['namajurusan'] ?>"></td>
			  </tr>
				<tr>
				<td></td>
				<td><input type='submit' value='simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>