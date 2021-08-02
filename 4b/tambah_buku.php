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
<a href="index_buku.php" class="btn btn-primary">kembali</a>
    <div class="card" style="width:20rem;">
            <div class="card-header">
                <label>Form tambah Buku</label>
            </div>
                <div class="card-body">
                    <form action="simpan_buku.php" method="post">
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">id</label>
                            <input  type="text" name="id" > 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">name</label>
                            <input type="text" name="name"> 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">stok</label>
                            <input type="text" name="stok"> 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">deskripsi</label> 
                            <input type="text" name="deskripsi"> 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-form-label">kategori</label> 
                            <select name="category_id" id="2">
                                <?php 
                                    include "koneksi.php";
		                            $query_mysql2 = mysqli_query($koneksi,"SELECT * FROM categories");
		                            while($data2 = mysqli_fetch_array($query_mysql2)){
                                ?> 
                                    <option value="<?php echo $data2['id'] ?>"><?php echo $data2['name'] ?></option>
                                <?php } ?>
                            </select> 
                        </div>
                        <div class="form-group" style="margin-left:30px;">
                            <a href="index.php" class="btn btn-warning" style="margin-right:20px;" role="button">Batal</a> 
                            <input type="submit" value="simpan" class="btn btn-primary" role="button">            
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>


</body>
</html>