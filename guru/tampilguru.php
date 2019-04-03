<?php
	
		include '../koneksi.php';
	
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
   <h2>Manajemen Guru</h2>
      <hr>
      
      <br>
		<table border='1' cellspacing="0" cellpadding='5'>
		<tr>
			
			<td>Kode Guru</td>
		    <td>Nama Guru</td>
            <td>Jenis Kelamin</td>	
            <td>Alamat</td>					
	    	
		</tr>
		<?php
			$no=1;
			$sql="SELECT * FROM guru";
			$query= mysqli_query($db_link,$sql);
			while($data = mysqli_fetch_array($query))
				{
				?>
				<tr>
					
					<td><?php echo "$data[kodeguru]"; ?></td>
					<td><?php echo "$data[namaguru]"; ?></td>
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