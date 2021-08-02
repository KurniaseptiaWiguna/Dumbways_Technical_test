<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container">

        <h1>Aplikasi Perpustakaan</h1>

        <div class="row">
            <div class="col">
                <h5>Buku</h5>
                <div class="row">
                    
                    <form action="index_buku.php" method="post">
                    <div class="col">
                    <select class="form-select" aria-label="Default select example" name="id">
                    <option selected>Kategori buku</option>
                    <?php 
		                    include "koneksi.php";
		                    $query_mysql = mysqli_query($koneksi,"SELECT * FROM categories");
		                    while($data = mysqli_fetch_array($query_mysql)){
                        ?>
                        <option value="<?php  echo $data['id']; ?>"><?php  echo $data['name']; ?></option>
                        <?php }?>
                    </select>
                
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-primary" value="Cari">
                    </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <h5>Kategori Buku</h5>
                <a href="index_kategori.php" class="btn btn-primary">lihat</a>
            </div>
        </div>
    </div>
</body>
</html>