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
    
    <h1>Kategori Buku</h1>
    <a href="index.php" class="btn btn-primary">kembali</a>
    <a href="tambah_kategori.php" class="btn btn-success">tambah</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi,"SELECT * FROM categories");
            while($data = mysqli_fetch_array($query_mysql)){

            
            ?>    
    <tr>
      <td><?php echo $data['id']; ?></td>
      <td><?php echo $data['name']; ?></td>
      <td>
            <a href="edit_kategori.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a>|
            <a href="hapus_kategori.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>

      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    
</body>
</html>