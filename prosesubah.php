<?php
include_once("koneksi.php");
$id = $_POST['id'];
$merk = $_POST['merk'];
$nama_produk = $_POST['nama_produk'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];

$query = "UPDATE tbl_kosmetik SET
merk='$merk',nama_produk='$nama_produk',jenis='$jenis',harga='$harga' WHERE id=$id";
$hasil = mysqli_query($conn, $query);
if ($hasil) {
    header('location:index.php');
} else {
    echo $query . "<br/>";

    echo "Update data gagal";
}
?>