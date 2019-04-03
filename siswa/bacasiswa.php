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
   <h2>Manajemen Siswa</h2>
      <hr>
      <center><input type="button" value="tambahsiswa" onclick="location.href='tambahsiswa.php'"></center>
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			
			<td>NIS</td>
		    <td>Nama Kelas</td>
            <td>Jenis Kelamin</td>	
            <td>ALamat</td>					
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM siswa";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
					
					<td><?php echo "$data[nis]"; ?></td>
					<td><?php echo "$data[namasiswa]"; ?></td>
                    <td><?php echo "$data[jk]"; ?></td>
                    <td><?php echo "$data[alamat]"; ?></td>			
					<td>
						<a href="editsiswa.php?id=<?php echo "$data[nis]"; ?>">EDIT</a> |
						<a href="hapussiswa.php?id=<?php echo "$data[nis]"; ?>" onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>