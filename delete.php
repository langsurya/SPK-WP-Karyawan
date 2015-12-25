<?php 
mysql_connect("localhost","root","");
mysql_select_db("karyawan_wp");
$nip = $_GET['nip'];
$query = mysql_query("DELETE FROM karyawan WHERE nip='$nip'") or die(mysql_error());
if ($query) {
	?>
	<script language="JavaScript">
	alert('Data Karyawan Berhasil dihapus');
	document.location = 'analisa_alternatif.php';
	</script>
	<?php
}
?>