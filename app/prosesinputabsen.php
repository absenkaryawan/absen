<?php
include "koneksi.php";
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$status = $_POST['status'];
$waktu=date('Y-m-d');
echo $status;


$cari=$konek->query("select*from karyawan where nama like '$nama' and waktu like '%$waktu%' and status like '%$status'");
$cek=$cari->num_rows;


if (empty($cek) ){
  $simpan = $konek->query("insert into karyawan (nama,keterangan,status) values ('$nama','$keterangan','$status')");
  ?>
  <script>
  document.location.href='absen.php?notif=berhasil';
</script>
<?php
}else{
?>
  <script>
  document.location.href='absen.php';
</script>
<?php
}
?>
