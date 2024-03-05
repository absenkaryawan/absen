<?php
include "boot.php";
include "koneksi.php";

// Perform the search query in the 'namakaryawan' table
$search_query = $_GET['id'];
$result = $konek->query("SELECT * FROM namakaryawan WHERE nama LIKE '%$search_query%'");

// Display the search results
echo "<h2>Search results for: " . htmlspecialchars($search_query) . "</h2>";
echo "<table class='table'>";
echo "<th>no</th>";
echo "<th>nip</th>";
echo "<th>nama</th>";
echo "<th>jabatan</th>";
echo "<th>tanggal_lahir</th>";
echo "<th>email</th>";
echo "<th>no_tlpn</th>";
echo "<th>jenis_kelamin</th>";
echo "<th>alamat</th>";
echo "<th>waktu</th>";
echo "<th>aksi</th>";

$no = 0;
while ($row = $result->fetch_assoc()) {
    $no++;
    echo "<tr>";
    echo "<th scope='row'>$no</th>";
    echo "<td>{$row['nip']}</td>";
    echo "<td>{$row['nama']}</td>";
    echo "<td>{$row['jabatan']}</td>";
    echo "<td>{$row['tanggal_lahir']}</td>";
    echo "<td>{$row['email']}</td>";
    echo "<td>{$row['no_tlpn']}</td>";
    echo "<td>{$row['jenis_kelamin']}</td>";
    echo "<td>{$row['alamat']}</td>";
    echo "<td>{$row['waktu']}</td>";
    echo "<td>";
    echo "<button class='btn btn-danger' onclick=\"document.location.href='hapus.php?id={$row['no']}'\"><i class='bi bi-trash'></i></button>";
    echo "<button class='btn btn-success' onclick=\"document.location.href='update.php?id={$row['no']}'\"><i class='bi bi-pencil-square'></i></button>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
