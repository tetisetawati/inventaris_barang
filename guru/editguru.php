<?php
	include '../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h2>Edit - Manajemen Siswa</h2>
      <hr>
      <?php
			$id=$_GET['id'];
			$sql = "SELECT * FROM siswa WHERE nis ='$id'";
			$query = mysqli_query($db_link,$sql);
			$data = mysqli_fetch_array($query);
		?>
		<form action='aksi_edit_siswa.php?id=<?php echo "$id"; ?>' method='POST'>
			<table border="0">
			<tr>
			  <td>NIS</td>
			  <td><input name='nis' type='text' id="nis" value="<?php echo $data['nis'] ?>"></td>
			  </tr>
			<tr>
			  <td>Nama Siswa</td>
			  <td><input name='namasiswa' type='text' id="namasiswa" value="<?php echo $data['namasiswa'] ?>"></td>
			  </tr>
              <tr>
               <td>Jenis Kelamin</td>
			   <td><input name='jk' type='text' id="jk" value="<?php echo $data['jk'] ?>"></td>				
               </tr>
               <td>Alamat</td>
			   <td><input name='alamat' type='text' id="alamat" value="<?php echo $data['alamat'] ?>"></td>				
               <tr>
				<td></td>
				<td><input type='submit' value='simpan'></td>
				</tr>
			</table>
		</form>
</body>
</html>