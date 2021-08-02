<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $pinjam = mysqli_query($koneksi,"SELECT * FROM books where id = $id");
    $data = mysqli_fetch_array($pinjam);

    $stok_awal = $data['stok'];

    $stok_baru = $stok_awal - 1;

    $query=mysqli_query($koneksi,"UPDATE books SET stok = $stok_baru  WHERE id='$id'"); 
   header("location:index.php");

    ?>