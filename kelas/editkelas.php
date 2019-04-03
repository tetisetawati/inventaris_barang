<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h2>Edit - Manajemen Kelas</h2>
      <hr>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM kelas WHERE kodekelas ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_kelas.php?id=<?php echo "$id"; ?>' method='POST'>
			<table border="0">
			<tr>
			  <td>Kode Kelas</td>
			  <td><input name='kodekelas' type='text' id="kodekelas" value="<?php echo $data['kodekelas'] ?>"></td>
			  </tr>
			<tr>
			  <td>Nama Kelas</td>
			  <td><input name='namakelas' type='text' id="namakelas" value="<?php echo $data['namakelas'] ?>"></td>
			  </tr>
               <td>Tingkat</td>
			   <td><input name='tingkat' type='text' id="tingkat" value="<?php echo $data['tingkat'] ?>"></td>				<tr>
				<td></td>
				<td><input type='submit' value='simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>