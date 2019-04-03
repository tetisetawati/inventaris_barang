<?php
session_start();
if(isset($_SESSION['username'])){
	include 'koneksi.php';
}else{
	header("location:index.php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>INVENTARIS BARANG</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="header"><img src="gambar/website-1.jpg" width="800" height="150"></div>
<div id="navigasi" align="center"><font color="#18F0D8" size="+1"><a href="admin/bacaadmin.php" target="tengah">| ADMIN</a>|<a href="siswa/bacasiswa.php" target="tengah"> INVENTARISIR </a> |PEMINJAMAN|<a href="jurusan/bacajurusan.php" target="tengah"> PENGEMBALIAN </a>|<a href="kelas/bacakelas.php" target="tengah"> GENERATE LAPORAN</a>|<a href="logout.php" target="_parent">LOGOUT</a></font></div>
<div id="konten">
<div class="kiri">
<div class="kiriatas" align="center"><br><br><br>
<font size="+4">SELAMAT DATANG ADMIN</font>
</div><div class="kiribawah"><img src="gambar/kegiatan-2.jpg" width="300" height="200"></div></div>
<div class="kanan"><iframe frameborder="0" width="500" height="450" scrolling="auto" name="tengah"></iframe></div></div>
<div id="footer" align="center"><font size="+2">copyright @teti setiawati 2019</font></div>
</body>
</html>
