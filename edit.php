<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Coffee Shop</title>
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-custom navbar-brand">
    <div class="container">
        <a class="navbar-brand" href="#">

        Coffee Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active navbar-brand" aria-current="page" href="#">
            <img src="https://image.flaticon.com/icons/png/512/553/553416.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Home</a>
            <a class="navbar-brand" href="index.php">
            <img src="https://image.flaticon.com/icons/png/512/1329/1329958.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Logout
            </a>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->
    <?php
    include 'config.php';

    $idproduct = $_GET['idproduct'];
    $coffeeshop = mysqli_query($koneksi, "select * from barang where idproduct='$idproduct'");

    while ($data = mysqli_fetch_array($coffeeshop)) {
        ?>
        <div class="container mt-5">
            <p><a href="home.php">Home</a> / Edit Barang / <?php echo $data['Name'] ?></p>
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Barang</p>
                    </div>
                    <div class="card-body fw-bold">
                        <form method="post" action="update.php">
                            
                            <div class="mb-3">
                                <label for="IdProduct" class="form-label">ID Product</label>
                                <input type="text" class="form-control" id="idproduct" placeholder="Masukkan ID Product" name="IdProduct" value="<?php echo $data['IdProduct']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for=Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Barang" name="Name" value="<?php echo $data['Name']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Masukkan Price" name="Price" value="<?php echo $data['Price']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" id="stock" placeholder="Masukkan Jumlah Stock" name="Stock" value="<?php echo $data['Stock']; ?>">
                            </div>
                            <button type="Submit" class="btn btn-brand" value="SIMPAN">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>   
        </div>
        <footer>
        <div class="footer container-fluid">
           
    </footer>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>           
  </body>
</html>