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
        <span class="header">Data Kriteria</span>

      </p>
      
      <p>
      <center>
      <table border="1" cellpadding="0" cellspacing="0" width="80%">
      <thead>
        <tr>
          <th>no</th>
          <th>Nama</th>
          <th>C1</th>
          <th>C2</th>
          <th>C3</th>
          <th>C4</th>
          <th>C5</th>
        </tr>
        </thead>
        <tbody>
          <?php 
          mysql_connect("localhost","root","");
          mysql_select_db("karyawan_wp");

          $nomor = 0;
          $tampil = mysql_query("select * from kriteria");
          while ($data = mysql_fetch_array($tampil)) {
            ?>
            <tr>
              <td><?php echo $nomor=$nomor+1; ?></td>
              <td><?php echo $data['nama']; ?></td>
              <td><?php echo $data['c1']; ?></td>
              <td><?php echo $data['c2']; ?></td>
              <td><?php echo $data['c3']; ?></td>
              <td><?php echo $data['c4']; ?></td>
              <td><?php echo $data['c5']; ?></td>
            </tr>
          <?php }  ?>
        </tbody>
      </table>
      </center>
        
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