<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-AU">

<head>

  <title>Seleksi Karyawan Terbaik</title>

  <link rel="stylesheet" type="text/css" href="css/screen_yellow.css" media="screen, tv, projection" />

</head>

<body>

<!-- Main site container -->
<div id="siteBox">

  <!-- Main site header : holds the img, title and top tabbed menu -->
  <div id="header">

    <!-- top rounded corner -->
    <img src="images/corner_tl.gif" alt="corner" style="float:left;" />


    <!-- Site title and subTitle -->
    <span class="title">
      <span class="white">ELANG SURYA | </span>SISTEM PENUNJANG KEPUTUSAN
      <span class="subTitle">
        SPK
      </span>
    </span>

   
  </div>

  <!-- Content begins -->
  <div id="content">

    <!-- Left side menu : side bar links/news/search/etc. -->
    <div id="contentLeft">

      <p>
        <span class="header">Data Karyawan</span>
      </p>

      <p>
        <a href="index.php" title="different colour scheme" class="menuItem">Home</a>
        <a href="input_karyawan.php" title="whole wack of art" class="menuItem">Input Karyawan</a>
        <a href="karyawan.php" title="design work" class="menuItem">Lihat Karyawan</a>
      </p>

      <p>
        <span class="header">SPK</span>
      </p>
      <p>
        <a href="kriteria_tambah.php" title="different colour scheme" class="menuItem">Inpt Nilai Kriteria</a>
        <a href="kriteria.php" title="different colour scheme" class="menuItem">Kriteria</a>
        <a href="hasil.php" title="different colour scheme" class="menuItem">Hasil</a>
      </p>

      <!-- Creates the rounded corner on the bottom of the left menu -->
      <div class="bottomCorner">
        <img src="images/corner_sub_br.gif" alt="bottom corner" class="vBottom"/>
      </div>

    </div>



    <!-- Right side main content -->
    <div id="contentRight">

      <p>
        <span class="header">Tambah Kriteria</span>
      </p>
     
        <form action="input_karyawan.php" method="post">
          <center>
        <table>
          <tr>
            <td>NIP</td>
            <td>:</td>
            <td><input type="text" name="nip" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td>Nama Karyawan</td>
            <td>:</td>
            <td><input type="text" name="nama" size="40" maxlength="40"></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jk" value="Laki-laki" checked>Laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
            </td>
          </tr>          
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="40" rows="5"></textarea></td>
          </tr>          
          </table>
          <input type="submit" name="submit" value="Simpan">
          <input type="reset" name="reset" value="Reset"></center>
        </form>
<?php 
mysql_connect("localhost","root","");
mysql_select_db("karyawan_wp");

if (isset($_POST['submit'])) {
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $jk = $_POST['jk'];
  $alamat = $_POST['alamat'];
  $sql = "INSERT INTO karyawan values
        ('$nip','$nama','$jk','$alamat')";
        $query = mysql_query($sql) or die(mysql_error());
        if ($query) {
          echo "<script>window.alert('Data Berhasil di tambah');
                window.location=(href='karyawan.php')</script>";
        }
}
?>
      <p>
        <span class="header"></span>        
      </p>
      <!-- Creates bottom left rounded corner -->
      <img src="images/corner_sub_bl.gif" alt="bottom corner" class="vBottom"/>

    </div>

  </div>

  <!-- Footer begins -->
  <div id="footer">

    <div id="footerLeft">
     
   </div>

    <div id="footerRight">
      &nbsp;
    </div>

  </div>

</div>

</body>

</html>