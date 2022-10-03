<?php
include_once("koneksi.php");
$merk = $_POST['merk'];
$nama_produk = $_POST['nama_produk'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$query = "INSERT INTO tbl_kosmetik
(merk,nama_produk,jenis,harga) VALUE
('$merk','$nama_produk','$jenis','$harga')";

$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo "input data gagal";
}