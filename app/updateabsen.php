<?php
include "koneksi.php";
include "boot.php";
$id = $_GET['id'];
$panggil = $konek->query("select * from karyawan where no ='$id'");
$a = $panggil->fetch_array();
?>
<div class="container mt-2">
    <form class="form-control mt-3 bg-warning text-light" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama :</label>
            <select name="nama" id="" class="form-control">
      <?php
    $nama=$konek->query("select nama from nama");
    while($row = $nama->fetch_array()){
    ?>
       <option >
        <?=$row['nama']?>
       </option>

       <?php
    }
       ?>
    </select>
            <label for="exampleInputEmail1" class="form-label">Keterangan :</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="keterangan" value="Hadir">
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

            <label class="form-label">Status :</label>
            <select class="form-select mt-3 button" aria-label="status" name="status">
                <option value=""></option>
                <option>Masuk</option>
                <option>Pulang</option>
            </select>
        </div>

        <div class="text-end">
            <button name="edite" type="submit" class="btn btn-primary mt-3">Simpan</button>
        </div>
    </form>
</div>

<?php
if (isset($_POST['edite'])) {
    $update = $konek->query("update karyawan set nama= '$_POST[nama]',keterangan='$_POST[keterangan]',status='$_POST[status]' where no='$id'");

    echo "Data berhasil diubah <a href='tampilabsen.php'>kembali</a>";
}
?>
