<!DOCTYPE html>

<html xml:lang="en" lang="en-AU">

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
        <span class="header">Beranda</span>

      </p>
      
      <p>
        <form action="kriteria_tambah.php" method="post">
          <center>
            <table>
              <tr>
                <td>Nama Karyawan</td>
                <td>:</td>
                <td>
                  <select name="nama" data-placeholder="Pilih Karyawan...">
                  <option>Pilih Karyawan...</option>
                    <?php 
                    mysql_connect("localhost","root","");
                    mysql_select_db("karyawan_wp");
                    $data = mysql_query("select * from karyawan");
                    while ($lihat = mysql_fetch_array($data)) {
                      echo "<option value='".$lihat['nama']."'>".$lihat['nama']."</option>";
                    }
                    ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td>Nilai C1</td>
                <td>:</td>
                <td><input type="text" name="c1" size="10" required /></td>
              </tr>
              <tr>
                <td>Nilai C2</td>
                <td>:</td>
                <td><input type="text" name="c2" size="10" required /></td>
              </tr>
              <tr>
                <td>Nilai C3</td>
                <td>:</td>
                <td><input type="text" name="c3" size="10" required /></td>
              </tr>
              <tr>
                <td>Nilai C4</td>
                <td>:</td>
                <td><input type="text" name="c4" size="10" required /></td>
              </tr>
              <tr>
                <td>Nilai C5</td>
                <td>:</td>
                <td><input type="text" name="c5" size="10" required /></td>
              </tr>
              <tr>
              <td></td><td></td>
                <td>
                  <input type="submit" name="simpan" value="Simpan">
                  <input type="reset" name="reset" value="Reset">
                </td>
              </tr>
            </table>
          </center>
        </form>
        <?php
        mysql_connect("localhost","root","");
        mysql_select_db("karyawan_wp");

        if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        $c4 = $_POST['c4'];
        $c5 = $_POST['c5'];

        $sql = "INSERT INTO kriteria (nama, c1, c2, c3, c4, c5) values
        ('$nama','$c1','$c2','$c3','$c4','$c5')";
        $query = mysql_query($sql) or die(mysql_error());
        if ($query) {
          echo "<script>window.alert('Data Berhasil di tambah');
                window.location=(href='kriteria.php')</script>";
        }
        }
         ?>
      </p>

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