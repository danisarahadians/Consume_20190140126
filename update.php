<?php
include './config.php';

$idproduct = $_POST['idproduct'];
$Name = $_POST['Name'];
$Price = $_POST['Price'];
$Stock = $_POST['Stock'];

mysqli_query($koneksi,"update barang set idproduct='$idproduct',Name='$Name',Price='$Price',Stock='$Stock'");

header("location:home.php");