<?php
include_once("koneksi.php");
$query = "SELECT * FROM tbl_kosmetik";

$hasil = mysqli_query($conn, $query);

while ($data = mysqli_fetch_array($hasil)) {
    echo $data['merk'] . "‹br/>";
}