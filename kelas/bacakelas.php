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
   <h2>Manajemen Kelas</h2>
      <hr>
      <center><input type="button" value="Tambah Data" onclick="location.href='tambahkelas.php'"></center>
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			
			<td>Kode Kelas</td>
		    <td>Nama Kelas</td>
            <td>Tingkat</td>						
	    	<td>Aksi</td>
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM Kelas";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
					
					<td><?php echo "$data[kodekelas]"; ?></td>
					<td><?php echo "$data[namakelas]"; ?></td>
                    <td><?php echo "$data[tingkat]"; ?></td>			
					<td>
						<a href="editkelas.php?id=<?php echo "$data[kodekelas]"; ?>">EDIT</a> |
						<a href="hapuskelas.php?id=<?php echo "$data[kodekelas]"; ?>" onclick="return confirm('Anda yakin?')">HAPUS</a>
					</td>
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>