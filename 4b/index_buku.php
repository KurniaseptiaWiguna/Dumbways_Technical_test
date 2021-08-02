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

<?php 
	include "koneksi.php";
    $id = $_POST['id'];
    $query_mysql = mysqli_query($koneksi,"SELECT * FROM books where category_id = $id");
	
?>
    <!-- div container -->
    <div class="container">
    <a href="index.php" class="btn btn-primary">kembali</a>
        <a href="tambah_buku.php" class="btn btn-success">Tambah</a>
        <br>
        <h1>
            <?php $category= mysqli_query($koneksi,"SELECT * FROM categories where id = $id");
            while($title = mysqli_fetch_array($category)){
                echo $title['name'];
            }
        ?>
        </h1>

        <div class="row">
            <?php 
                while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <div class="col">
                <div class="card" style="width: 15rem;">
                    
                    <img src="" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['name'];?> </h5>
                        <p class="card-text">stock :<?php echo $data['stok'];?></p>
                        <div class="row">
                            <div class="col"><a href="pinjam.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm">pinjam</a></div>
                            <div class="col"><a href="kembalikan.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">kembalikan</a></div>
                 
                        </div>
                        <div class="row">
                        <div class="col"><a href="edit_buku.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a></div>
                        <div class="col"><a href="hapus_buku.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Hapus</a></div>
                    </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            
            


        </div>

        
    
    </div>
    <!-- div penutup container -->

</body>
</html>