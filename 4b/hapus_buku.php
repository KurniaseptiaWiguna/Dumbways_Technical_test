<?php
    include 'koneksi.php';
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,"delete from books where id='$id'");
    header("location:index.php");
?>