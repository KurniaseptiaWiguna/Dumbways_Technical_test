<?php
    include 'koneksi.php';
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,"delete from categories where id='$id'");
    header("location:index_kategori.php");
?>