<?php
include "boot.php";
include "koneksi.php";
$id = isset ($_GET['id']) ? $_GET ['id'] : '';
$Tampilabsen = "SELECT * FROM karyawan WHERE nama LIKE '%$id%' ORDER BY waktu DESC";
$result = $konek->query($Tampilabsen);

?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">no</th>
    <th scope="col">nama</th>
    <th scope="col">keterangan</th>
    <th scope="col">status</th>
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
        <td><?= $s['nama']?></td>
        <td><?= $s['keterangan']?></td>
        <td><?= $s['status']?></td>
        <td><?= $s['waktu']?></td>


        <td>
    <button class="btn btn-danger" onclick="confirmDelete(<?= $s['no'] ?>)"><i class="bi bi-trash"></i></button>
    <button class="btn btn-success" onclick="document.location.href='updateabsen.php?id=<?= $s['no'] ?>'"><i class="bi bi-pencil-square"></i></button>
</td>
        </tr>
        <?php
        }
        ?>

<script>
  function confirmDelete(id){
    var confirmation = confirm("Apakah anda ingin menghapus ini?");
    if (confirmation) {
      document.location = 'hapusabsen.php?id=' + id;
    }
  }
</script>
