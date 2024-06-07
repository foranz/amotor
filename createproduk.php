<?php 
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Asia Motor</title>
       <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- fontawesome -->
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
   <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/da14dfb904.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css">
     <!--My Style-->
    <link rel="stylesheet" href="css/adm.css">
       <style>
  .row {
    --bs-gutter-x: 4rem;
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: 50px;
    margin-right: 10%;
    margin-left: 250px;
  }
    .hr {
    max-width: 50%;
  }
</style> 
</head>
<body>

    <?php
          include 'connect.php';
          include 'sidebar.php';
        ?>
   
    
    <div class="row">
      <h3><i class="fa-solid fa-chart-simple" style="color: #6495ed;"></i> Tambah Produk</h3><hr>
          <!-- Area Chart -->
          <div class="col-md-12">
            <div class="card shadow mb-4">
              
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-danger">Tambah Produk</h6>
                
              </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <!-- <div class="form-responsive"> -->
                                    <form class="user" action="produkupdate.php" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-3 col-form-label">Nama Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nama" name="nama" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="harga" class="col-sm-3 col-form-label">Harga Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="harga" name="harga" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="harga" class="col-sm-3 col-form-label">Jumlah Produk</label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kode" class="col-sm-3 col-form-label">Kode Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="kode" name="kode" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="detail" class="col-sm-3 col-form-label">Detail Produk</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="detail" name="detail" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="gambar" name="gambar" required>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-5">
                                            <div class="col-sm-6">
                                                <a href="produkindex.php" class="btn btn-info btn-block">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>Kembali
                                                </a>
                                            </div>
                                            <div class="col-sm-6">
                                                <button type="submit" class="btn btn-success btn-block" name="simpan" value="simpan">
                                                    <i class="fa fa-floppy-o" aria-hidden="true"></i>Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script untuk mengaktifkan Feather Icons -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>