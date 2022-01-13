<?php
// include koneksi database
include './config.php';

//Menangkap data yang dikirim dari form
$IdProduct = $_POST['IdProduct'];
$Name = $_POST['Name'];
$Price = $_POST['Price'];
$Stock = $_POST['Stock'];


//Menginput data ke database
mysqli_query($koneksi, "insert into barang values('$IdProduct', '$Name', '$Price', '$Stock')");
//mengembalikan ke halaman awal
header("location:./index.php");