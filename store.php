<?php
// Koneksi database
include './config.php';

// Menangkap data yang dikirim dari form
$IdProduct = $_POST['IdProduct'];
$Name = $_POST['Name'];
$Price = $_POST['Price'];
$Stock = $_POST['Stock'];

//Menginput data ke database
mysqli_query($koneksi,"insert into barang values (NULL,'$IdProduct','$Name','$Price','$Stock')");

//Mengembalikan ke halaman awal
header("location:./home.php");