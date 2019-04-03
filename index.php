<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SMK INDONESIA</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="header"><img src="gambar/header-1.jpg" width="800" height="150"></div>
<div id="navigasi" align="center"><font color="#18F0D8" size="+1"><a href="home.html" target="tengah">|HOME</a> | <a href="siswa/tampilsiswa.php" target="tengah">INVENTARISIR</a>|<a href="guru/tampilguru.php" target="tengah"> PEMINJAMAN </a>|<a href="nilai/tampilnilai.php" target="tengah">PENGEMBALIAN</a>|<a href="cari/carisiswa.php" target= "tengah" >CARI BARANG</a> |<a href="cari/cariguru.php" target="tengah"> CARI PEMINJAM</a> </font></div>
<div id="konten">
<div class="kiri">
<div class="kiriatas"><br><br><br>
  <form id="form1" name="form1" method="post" action="ceklogin.php">
    <table bgcolor="#55A615" width="300" border="0">
      <tbody>
        <tr>
          <td colspan="3" align="center">FORM LOGIN</td>
          </tr>
        <tr>
          <td width="105">USERNAME</td>
          <td width="13">:</td>
          <td width="160"><label for="username"></label>
            <input name="username" type="text" id="username" maxlength="10"></td>
        </tr>
        <tr>
          <td>PASSWORD</td>
          <td>:</td>
          <td><label for="password"></label>
            <input name="password" type="password" id="password" maxlength="10"></td>
        </tr>
        <tr>
          <td height="33" colspan="3" align="center"><input type="submit" name="LOGIN" id="LOGIN" value="LOGIN"></td>
          </tr>
      </tbody>
    </table>
  </form>
</div>
<div class="kiribawah"><img src="gambar/kegiatan-2.jpg" width="300" height="200"></div></div>
<div class="kanan"><iframe frameborder="0" width="500" height="450" scrolling="auto" name="tengah"></iframe></div></div>
<div id="footer" align="center"><font size="+2">copyright @teti setiawati 2019</font></div>
</body>
</html>
