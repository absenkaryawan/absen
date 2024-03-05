<?php
include "boot.php";
include "koneksi.php";
?>
  <div class="container mt-2">
    <form class ="form-control mt-3 bg-warning text-light" action="prosesinput.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nip :</label>
    <input type="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nip" required>
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"> 
    <label for="exampleInputEmail1" class="form-label">jabatan :</label>
  <select class="form-select mt-3 button" aria-label="jabatan" name="jabatan">
  <option value=""></option>
  <option >Staf administrasi</option>
  <option >Direktur utama</option>
  <option>Bagian keuangan</option>
  <option>Menejer</option>
  <option>Bidang personal</option>
  <option>Aspek pabrik</option>
  <option>Direksi(CEO)</option>
  <option>sekertaris</option>
  <option>Staf</option>
</select>

    <label for="exampleInputEmail1" class="form-label">tanggal_lahir :</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir" required>
    <label for="exampleInputEmail1" class="form-label">email :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"> 
    <label for="exampleInputEmail1" class="form-label">no_tlpn :</label>
    <input type="namber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_tlpn">
    <label for="exampleInputEmail1" class="form-label">alamat :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat"> 
    <label for="exampleInputEmail1" class="form-label">jenis_kelamin</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki">
  <label class="form-check-label" for="flexRadioDisabled">
    Laki-laki
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
  <label class="form-check-label" for="flexRadioCheckedDisabled">
    Perempuan
  </label>
</div>   

    <div class="text-end">
  <button type="submit" class="btn btn-primary mt-3">Simpan</button>
  </div>
</form>
</div>
<?php
if (isset($_GET['notif'])=="berhasil"){
?>
<div class="alert alert-success" role="alert">
  Input berhasil
</div>
<?php
}
?>
