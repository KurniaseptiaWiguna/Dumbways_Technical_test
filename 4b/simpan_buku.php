<?php 
    include 'koneksi.php';
    $id=$_POST['id'];
    $name=$_POST['name'];
    $stok=$_POST['stok'];
    $deskripsi=$_POST['deskripsi'];
    $category_id=$_POST['category_id'];
    $query=mysqli_query($koneksi, "insert into books values('$id','$name','$stok','null','$deskripsi','$category_id')");
    header("location:index.php");
?>

