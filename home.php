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
    <section>
        <div class="hero-banner container-fluid p-5 text-white">
            <div class="row mt-5">
                <div class="col-md-12" style="text-align: center;">
                    <h1 style="color: #E8F0F2; text-shadow: 2px 2px #053742;">Coffee Shop</h1>
                    <h5 style="color: #39A2DB; text-shadow: 2px 2px #053742;">
                    Coffee is always a good idea.</h5>
                
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </section>
    <div class="container data-mahasiswa mt-5">
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Membuat form dengan method post untuk memanggil file store.php -->
                    <form method="POST" action="store.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Tambah Barang</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Input Nama -->
                            <div class="mb-3">
                                <label for="IdProduct" class="form-label">ID Product</label>
                                <input type="text" class="form-control" id="IdProduct" placeholder="Masukkan ID Product" name="IdProduct" required>
                            </div>
                            <!-- Input Kategori -->
                            <div class="mb-3">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="Name" placeholder="Masukkan Nama Barang" name="Name" required>
                            </div>
                            <!-- Input Penerbit -->
                            <div class="mb-3">
                                <label for="Price" class="form-label">Price</label>
                                <input type="text" class="form-control" id="Price" placeholder="Masukkan Price" name="Price" required>
                            </div>
                            <!-- Input Harga -->
                            <div class="mb-3">
                                <label for="Stock" class="form-label">Stock</label>
                                <input type="text" class="form-control" id="Stock" placeholder="Masukkan Jumlah Stock" name="Stock" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <!--Button Close Modal-->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!--Button Tambah Data-->
                            <button type="submit" class="btn btn-brand" value="SIMPAN">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- DATA -->
    <div class="container data-mahasiswa mt-5">
    <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#tambahData">
                    Tambah Barang</button>
        <table class="table table-striped" id="tabelBarang">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'config.php';
                $no = 1;
                $coffeeshop = mysqli_query($koneksi,"select * from barang");
                while ($data = mysqli_fetch_array($coffeeshop)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Name']; ?></td>
                        <td><?php echo $data['Price']; ?></td>
                        <td><?php echo $data['Stock']; ?></td>

                        <td>
                            <a href="detail.php?idproduct=<?php echo $data['IdProduct'];?>" class="btn btn-brand btn-sm text-green">Detail</a>
                            <a href="edit.php?idproduct=<?php echo $data['IdProduct'];?>" class="btn btn-brand btn-sm text-green">Edit</a>
                            <a href="delete.php?idproduct=<?php echo $data['IdProduct'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus data?')">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <footer>
        <div class="footer container-fluid">
        
        </div>
    </footer>
    <script>
        $(document).ready(function() {
            $('#tabelBarang').DataTable();
        } );
    </script>
</body>
</html> 