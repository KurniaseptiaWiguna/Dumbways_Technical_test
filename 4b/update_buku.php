<?php
    include 'koneksi.php';
    $id=$_POST['id'];
    $name=$_POST['name'];
    $stok=$_POST['stok'];
    $deskripsi=$_POST['deskripsi'];
    $category_id= $_POST['category_id'];

   $query=mysqli_query($koneksi,"UPDATE books SET name='$name' , stok='$stok' , deskripsi='$deskripsi',category_id = '$category_id'  WHERE id='$id'"); 
   header("location:index.php");
?>