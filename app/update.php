<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query ("select * from namakaryawan where no ='$id'");
$a = $panggil ->fetch_array();
?>
<div class="container mt-2">
    <form class ="form-control mt-3 bg-warning text-light" action="" method="post">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">nip:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nip" value ="<?= $a['nip']?>">
    <label for="exampleInputEmail1" class="form-label">nama :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama" value ="<?= $a['nama']?>">
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
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal_lahir" value ="<?= $a['tanggal_lahir']?>">
    <label for="exampleInputEmail1" class="form-label">email :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value ="<?= $a['email']?>">
    <label for="exampleInputEmail1" class="form-label">no_tpln :</label>
    <input type="namber" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="no_tlpn" value ="<?= $a['no_tlpn']?>">
    <label for="exampleInputEmail1" class="form-label">alamat :</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat" value ="<?= $a['alamat']?>">
    <label for="exampleInputEmail1" class="form-label">jenis_kelamin :</label>
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
  <button name="edite" type="submit" class="btn btn-primary mt-3">Simpan</button>
  </div>

</form>
</div>
<?php
if(isset($_POST['edit'])){
}else{
@$update =$konek->query("update namakaryawan set nip='$_POST[nip]',nama= '$_POST[nama]',jabatan='$_POST[jabatan]',tanggal_lahir='$_POST[tanggal_lahir]',email='$_POST[email]',no_tlpn='$_POST[no_tlpn]',alamat='$_POST[alamat]',jenis_kelamin='$_POST[jenis_kelamin]' where no='$id'");

echo "data berhasil diubah <a href='tampil.php'>kembali</a>";
}
?>