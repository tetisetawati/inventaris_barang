<?php
	
		include '../koneksi.php';
	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Manajemen Siswa</h2>
      <hr>
      
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			
			<td>NIS</td>
		    <td>Nama Kelas</td>
            <td>Jenis Kelamin</td>	
            <td>Alamat</td>					
	    	
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
					
				</tr>
				<?php
				$no++;
				}
		?>
		</table>
</body>
</html>