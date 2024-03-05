<?php
include "boot.php";
include "koneksi.php";
$id = isset ($_GET['id']) ? $_GET ['id'] : '';
$Tampil = "SELECT * FROM namakaryawan WHERE nama LIKE '%$id%' ORDER BY waktu DESC";
$result = $konek->query($Tampil);

?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">no</th>
    <th scope="col">nip</th>
    <th scope="col">nama</th>
    <th scope="col">jabatan</th>
    <th scope="col">tanggal_lahir</th>
    <th scope="col">email</th>
    <th scope="col">no_tpln</th>
    <th scope="col">alamat</th>
    <th scope="col">jenis_kelamin</th>
    <th scope="col">waktu</th>
    <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php
  while ($s=$result->fetch_assoc()){
  @$no++;
  ?>
    <tr>
        <th scape="row"><?=$no;?></th>
        <td><?= $s['nip']?></td>
        <td><?= $s['nama']?></td>
        <td><?= $s['jabatan']?></td>
        <td><?= $s['tanggal_lahir']?></td>
        <td><?= $s['email']?></td>
        <td><?= $s['no_tlpn']?></td>
        <td><?= $s['alamat']?></td>
        <td><?= $s['jenis_kelamin']?></td>
        <td><?= $s['waktu']?></td>


        <td>
    <button class="btn btn-danger" onclick="confirmDelete(<?= $s['no'] ?>)"><i class="bi bi-trash"></i></button>
    <button class="btn btn-success" onclick="document.location.href='update.php?id=<?= $s['no'] ?>'"><i class="bi bi-pencil-square"></i></button>
</td>

        <?php
        }
        ?>

<script>
  function confirmDelete(id){
    var confirmation = confirm("Apakah anda ingin menghapus ini?");
    if (confirmation) {
      document.location = 'hapus.php?id=' + id;
    }
  }
</script>

