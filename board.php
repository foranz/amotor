<!DOCTYPE html>
<html>
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
        
        <h3><i class="fa-solid fa-house" style="color: #6495ed;"></i> Dashboard</h3><hr>
         <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box" >
                    <b><?php
                $pemesanan= mysqli_query($koneksi,"select * from orders");
                  
                $jumlah_pesanan = mysqli_num_rows($pemesanan);
 
                ?>
                <p style="font-size: 20px;"><?php echo $jumlah_pesanan; ?> Pesanan</p></b>
                    <a href="orderindex.php">
                    <p class="text-muted">Lihat Detail</p></a>
                </div>
             </div>
             </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box" >
                    <b><?php
         
                  
                $admin= mysqli_query($koneksi,"select * from admin");
                  
                $jumlah_admin = mysqli_num_rows($admin);
 
                ?>
                <p style="font-size: 20px;"><?php echo $jumlah_admin; ?> Pengguna</p></b>
                <a href="penggunaindex.php">
                    <p class="text-muted">Lihat Details</p></a>
                </div>
             </div>
             </div>
                <div class="col-md-3 col-sm-6 col-xs-6">           
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-cubes" aria-hidden="true"></i>
                </span>
                <div class="text-box" >
                    <b><?php
         
                  
                $produk= mysqli_query($koneksi,"select * from product");
                  
                $jumlah_produk = mysqli_num_rows($produk);
 
                ?>
                <p style="font-size: 20px;"><?php echo $jumlah_produk; ?> Produk</p></b>
                <a href="produkindex.php">
                    <p class="text-muted">Lihat Details</p></a>
                </div>
             </div>
             </div>
             <div class="col-md-3 col-sm-6 col-xs-6">
  <div class="panel panel-back noti-box">
      <i class="fa-solid fa-book-open-reader"></i>
    <div class="text-box">
      <b>
        <?php
         $form= mysqli_query($koneksi,"select * from formulir");
                  
                $jumlah_form = mysqli_num_rows($form);
        ?>
        <p style="font-size: 20px;"><?php echo $jumlah_form; ?> Kontak</p></b>
                <a href="rsvpindex.php">
      </b>
      <a href="rsvpindex.php">
        <p class="text-muted">Lihat Details</p>
      </a>
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
