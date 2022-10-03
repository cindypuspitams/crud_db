<?php
include_once("koneksi.php");
$id = $_GET['id'];
$query = "SELECT * FROM tbl_kosmetik WHERE id=" . $id;
$hasil = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Ubah Merk Kosmetik</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstr
ap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSA
wiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ubah Merk Kosmetik</title>
</head>

<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA MERK KOSMETIK</h2>
    </div>
    <h1 class="ml-5">Ubah Merk Kosmetik </h1>

    <form method="post" action="prosesubah.php" class="ml-5">
        <?php while ($data = mysqli_fetch_array($hasil)) { ?>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
            <div class=" form-group row">
                <label for=" merk" class="col-sm-1 col-form-label">merk</label>
                <div class="col-sm-3">
                    <input type="text" name="merk" class="form-control" value="<?php echo $data['merk'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_produk" class="col-sm-1 col-formlabel">nama_produk</label>
                <div class="col-sm-3">
                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $data['nama_produk'] ?>">
                </div>

            </div>
            <div class="form-group row">
                <label for="jenis" class="col-sm-1 col-formlabel">jenis</label>
                <div class="col-sm-3">
                    <input type="text" name="jenis" class="formcontrol" value="<?php echo $data['jenis'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-1 col-formlabel">harga</label>
                <div class="col-sm-3">
                    <input type="text" name="harga" class="form-control" value="<?php echo $data['harga'] ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mb-1 mt-1 ml-0
mr-0">Kirim</button>
            <a href="index.php" class="btn btn-primary mb-1 mt-1 ml0"><i class="fas fa-user-plus mr-0"></i>Daftar Merk Kosmetik</a>
    </form>
<?php } ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVN
A/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/po
pper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fak
FPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.
min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyj
Uar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>