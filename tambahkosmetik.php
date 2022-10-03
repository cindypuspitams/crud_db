<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kosmetik</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=devicewidth, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/c
ss/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263X
mFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tambah Merk Kosmetik</title>
</head>

<body>
    <div class="alert alert-success text-center" role="alert">
        <h2>DATA KOSMETIK</h2>
    </div>
    <h1 class="ml-5">Tambah Merk</h1>
    <form method="post" action="prosestambah.php" class="ml-5">
        <div class="form-group row">
            <label for="merk" class="col-sm-1 col-formlabel">merk</label>
            <div class="col-sm-3">
                <input type="text" name="merk" class="form-control" placeholder="merk">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_produk" class="col-sm-1 col-formlabel">nama_produk</label>
            <div class="col-sm-3">
                <input type="text" name="nama_produk" class="formcontrol" placeholder="nama_produk">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis" class="col-sm-1 col-formlabel">jenis</label>
            <div class="col-sm-3">
                <input type="text" name="jenis" class="form-control" placeholder="jenis">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga" class="col-sm-1 col-formlabel">harga</label>
            <div class="col-sm-3">
                <input type="text" name="harga" class="formcontrol" placeholder="harga">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-1
mt-1 ml-0 mr-0">Kirim</button>
        <a href="index.php" class="btn btn-primary mb-1 mt-1
ml-0"><i class="fas fa-user-plus mr-0"></i>Daftar Kosmetik</a>
    </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery3.2.1.slim.min.js" integrity="sha384-
KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJ
wFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.
9/umd/popper.min.js" integrity="sha384-
ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUib
X39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/
bootstrap.min.js" integrity="sha384-
JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1
MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>