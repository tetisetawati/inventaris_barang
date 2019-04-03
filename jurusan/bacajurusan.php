<?php
	session_start();
	if(isset($_SESSION['username'])){
		include '../koneksi.php';
	}else{
	   header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Manajemen Jurusan</h2>
      <hr>
      <center><input type="button" value="Tambah Data" onclick="location.href='tambahjurusan.php'"></center>
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			
			<td>Kode Jurusan</td>
		    <td>Nama Jurusan</td>						
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM jurusan";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
					
					<td><?php echo "$data[kodejurusan]"; ?></td>
					<td><?php echo "$data[namajurusan]"; ?></td>			
					<td>
						<a href="editjurusan.php?id=<?php echo "$data[kodejurusan]"; ?>">EDIT</a> |
						<a href="hapusjurusan.php?id=<?php echo "$data[kodejurusan]"; ?>" onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>