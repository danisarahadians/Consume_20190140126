<?php
include 'config.php';

$IdProduct=$_GET['IdProduct'];

$coffeeshop=mysqli_query($koneksi,"select * from barang where IdProduct='$IdProduct'");
while($data=mysqli_fetch_assoc($coffeeshop)){
    ?>
        <!doctype html>
        <html lang="en">
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <title>Invoice Pembayaran</title>
        </head>
        
        <body onload="window.print();">
            <div class="container mt-5">
                <p class="fw-bold">Invoice Pembayaran Barang</P>
                <p>Name : <?php echo $data['Name'] ?></p>
                <p>Price : <?php echo $data['Price'] ?></p>
                <p>Stock : <?php echo $data['Stock'] ?></p>
                
            </div>
        <?php
}
        ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        </body>
        </html>