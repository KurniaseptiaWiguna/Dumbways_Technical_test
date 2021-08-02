<?php
    include 'koneksi.php';
    $id=$_POST['id'];
    $name=$_POST['name'];

   $query=mysqli_query($koneksi,"UPDATE categories SET name='$name'  WHERE id='$id'"); 
   header("location:index_kategori.php");
?>