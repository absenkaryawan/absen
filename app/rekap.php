<button class="btn " onclick="printDiv('div1')"><i class="bi bi-printer-fill fs-1 text-warning"></i></button>

<form action="" method="POST" class="form-control">
  Tanggal Awal : <input type="date" name="tgl1" class="form-control">
  Tanggal Akhir : <input type="date" name="tgl2" class="form-control">
  <div class="text-end">
    <input type="button" class="btn btn-primary mt-2" onclick="this.form.submit()" value="Submit">
  </div>
</form>

<div id="div1">
  <?php
  include "boot.php";
  include "koneksi.php";
  $date = date("d-m-y");

  echo $date;
  $query = isset($_GET['id']) ? $_GET['id'] : '';
  $Tampilabsen = "SELECT * FROM karyawan WHERE nama LIKE '%$query%'";
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
      </tr>
    </thead>
    <tbody>
      <?php
      @$tampilabsen = $konek->query("SELECT * FROM karyawan WHERE waktu BETWEEN '$_POST[tgl1]' AND '$_POST[tgl2]'");
      while ($s = $tampilabsen->fetch_array()){
        @$no++;
      ?>
      <tr>
        <th scope="row"><?=$no;?></th>
        <td><?= $s['nama']?></td>
        <td><?= $s['keterangan']?></td>
        <td><?= $s['status']?></td>
        <td><?= $s['waktu']?></td>
        <td></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<script>
  function printDiv(el){
    var a = document.body.innerHTML;
    var b = document.getElementById(el).innerHTML;
    document.body.innerHTML = b;
    window.print();
    document.body.innerHTML = a;
  }
</script>