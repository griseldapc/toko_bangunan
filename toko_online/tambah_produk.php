<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        .container{
            width: 80%;
            margin: 0 auto;
            margin-top: 5vh;

        }
        .container h3{
            text-align: center;
            color : blue;
            font-family : 'Montserrat';
        }
        .container .form-btn{
            margin-top: 3vh;
            background-color: Black;
            padding: 10px;
        }
        .container .form-btn:hover{
            background-color: red;
            color: navy;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3>Tambah Produk</h3>
    <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        Nama Produk :
        <input type="text" name="nama_produk" value="" class="form-control">
        Harga : 
        <input type="text" name="harga" value="" class="form-control">
        Deskripsi : 
        <input type="text" name="deskripsi" value="" class="form-control">
        Foto Produk:
        <input type="file" value="" class="form-control" name="foto_produk"><br>
        <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>