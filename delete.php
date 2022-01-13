<?php
//koneksi database
include './config.php';

//Menangkap data id yang di kirim dari url karena delete cuma membutuhkan id
$idproduct = $_GET['idproduct'];

//Menghapus data dari database
mysqli_query($koneksi, "delete from barang where idproduct='$idproduct'");

// Mengalihkan halaman kembali ke home.php
header("location:home.php");