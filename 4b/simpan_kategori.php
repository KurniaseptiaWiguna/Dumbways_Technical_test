<?php 
    include 'koneksi.php';
    $id=$_POST['id'];
    $name=$_POST['name'];

    $query=mysqli_query($koneksi, "insert into categories values('$id','$name')");
    header("location:index_kategori.php?");
?>

