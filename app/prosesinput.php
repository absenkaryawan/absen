<?php
include "koneksi.php";
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$email = $_POST['email'];
$no_tlpn = $_POST['no_tlpn'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];



if($nama==""){
  echo "maaf nama wajib di isi";
}else{
$simpan = $konek->query("insert into namakaryawan (nip,nama,jabatan,tanggal_lahir,email,no_tlpn,alamat,jenis_kelamin) values ('$nip','$nama','$jabatan','$tanggal_lahir','$email','$no_tlpn','$alamat','$jenis_kelamin')");
}
?>
<script>
  document.location.href='input.php?notif=berhasil';
</script>