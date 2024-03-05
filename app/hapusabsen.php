<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = $konek->query("delete from karyawan where no ='$id'");
?>
<script>
  document.location.href='tampilabsen.php';
</script>