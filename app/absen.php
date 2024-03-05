<?php
include "boot.php";
include "koneksi.php";
?>
  <div class="container mt-2">
    <form class ="form-control mt-3 bg-warning text-light" action="prosesinputabsen.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <select name="nama" id="" class="form-control">
      <?php
    $nama=$konek->query("select nama from namakaryawan");
    while($row = $nama->fetch_array()){
    ?>
       <option >
        <?=$row['nama']?>
       </option>

       <?php
    }
       ?>
    </select>

    <label for="exampleInputEmail1" class="form-label">keterangan</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="Hadir" required>
  <label class="form-check-label" for="flexRadioDisabled">
    Hadir
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="Sakit">
  <label class="form-check-label" for="flexRadioCheckedDisabled">
    Sakit
  </label>
  </div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="keterangan" value="izin">
  <label class="form-check-label" for="flexRadioCheckedDisabled">
    izin
  </label>
  </div>
<div>
  <option selected>status</option>
  <select class="form-select mt-3 button" aria-label="status" name="status" required>
  <option value=""></option>
  <option >Masuk</option>
  <option>Pulang</option>
</select>
  </div>
</div>
    <div class="text-end">
  <button type="submit" class="btn btn-primary mt-3">Simpan</button>
  </div>
</form>

<?php
if (isset($_GET['notif'])=="berhasil"){
?>
<div class="alert alert-success" role="alert">
  Absen berhasil
</div>
<?php
}else{
  echo "anda sudah absen";
}
  ?>
</div>