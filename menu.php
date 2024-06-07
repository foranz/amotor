<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

  <!-- sweetalert2 css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.css" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css" />
  <title>Jual Beli Motor</title>

</head>
<body>
  <!-- navbar start -->
  <nav class="navbar">
    <a href="index.php">
      <img src="images/loog.png" width="80" />
    </a>
    <a href="#" class="navbar-logo"><span>Rias Lenty</span></a>
    <!-- ... sisa kode navbar ... -->
    <div class="navbar-list-group">
      <a href="#home" class="navbar-list">Home</a>
      <a href="#about" class="navbar-list">Tentang Kami</a>
      <a href="#product" class="navbar-list">Kategori</a>
      <a href="get_produk.php" class="navbar-list">Produk</a>
      <a href="#contact" class="navbar-list">Kontak</a>
    </div>
    <div class="navbar-icon">
     
      <i data-feather="search" class="icon btn-modal" id="search" data-modal="searchModal"></i>
      <a href="cart.php">
        <i data-feather="shopping-cart" class="icon" id="shopping-cart"></i>
      </a>
      <i data-feather="menu" class="icon" id="hamburger"></i>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- section hero start -->
  <section class="hero" id="home">
   
    <div class="content">
      <h1>Asia<span>Motor</span></h1>
      <p>Temukan Motor Impian Anda di Asia Motor - Tempat Terbaik untuk Jual Beli Motor!</p>
      <a href="get_produk.php" class="button">Pesan Sekarang</a>
    </div>
  </section>
  <!-- section hero end -->

  <!-- section about start -->
  <section class="about" id="about">
    <h2>Tentang <span>Kami</span></h2>

    <div class="row">
      <div class="image-wrapper">
        <img src="images/about.jpg" width="100" alt="tentang kami" class="image" />
      </div>
      <div class="content">
        <h3>Selamat Datang di Asia Motor</h3>
        <p>
          Kami adalah dealer motor terpercaya yang berkomitmen untuk menyediakan pengalaman jual beli motor terbaik bagi Anda. Dengan bertahun-tahun pengalaman di industri otomotif, kami hadir untuk memenuhi kebutuhan transportasi Anda dengan berbagai pilihan motor berkualitas. 
        </p>
        <p>
         Asia Motor selalu mengutamakan kepuasan pelanggan dengan menyediakan pelayanan ramah, transparan, dan profesional. Kami percaya bahwa setiap pelanggan berhak mendapatkan motor yang sesuai dengan kebutuhan dan gaya hidup mereka.
        </p>
      </div>
    </div>
  </section>
  <!-- section about end -->

  <!-- section menu start -->
  <section class="product" id="product">
    <div class="header">
      <h2>Kategori <span>Motor</span></h2>
      <p>
        Menyediakan Pilihan Motor Terbaik untuk Anda
      </p>
    </div>
    <div class="card-container"></div>
  </section>
  <!-- section menu end -->

  <!-- section contact start -->
  <section class="contact" id="contact">
    <div class="header">
      <h2>Kontak <span>Kami</span></h2>
      <p>
        Jika Anda ingin menjual motor atau memiliki pertanyaan seputar produk kami, jangan ragu untuk menghubungi kami.
      </p>
    </div>
    <div class="row">
      <div class="image-wrapper">
      <img src="images/contact.jpg" width="100" alt="kontak kami" class="image" />
      </div>
      <div class="form-wrapper">
        <form action="form_proses.php" method="POST" class="form">
          <div class="form-group">
            <label for="nama" class="label">Nama</label>
            <input
              type="text" name="nama"
              id="nama_lengkap"
              class="input input-name"
              placeholder="Nama"
              required
            />
          </div>
          <div class="form-group">
            <label for="email" class="label">Alamat email</label>
            <input
              type="text" name="email"
              id="alamat_email"
              class="input input-email"
              placeholder="Alamat email"
              required
            />
          </div>
          <div class="form-group">
            <label for="nomor" class="label">Nomor telepon</label>
            <input
              type="number" name="nomor" 
              id="nomor_telepon"
              class="input input-nomor"
              placeholder="No.telepon"
              required
            />
          </div>
          <button type="submit" class="button btn-submit">Submit</button>
        </form>
      </div>
    </div>
  </section>
  <!-- section contact end -->

  <!-- footer start -->
  <footer class="footer">
   
    <div class="wrapper">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#product">Paket Kami</a>
      <a href="#contact">Kontak</a>
    </div>
    <span>developed by <a href="#" target="_blank">Pemas</a> | © 2024</span>
  </footer>
  <!-- footer end -->

  <!-- search input modal start -->
  <div class="modal" data-id="searchModal">
    <div class="modal-header">
      <h3>Search Modal</h3>
      <i data-feather="x-circle" class="btn-modal-close"></i>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <input
          type="text"
          class="input search-input"
          placeholder="ketikkan nama produk ..."
        />
      </div>
      <!-- product container start -->
      <div class="product-container"></div>
      <!-- product container end -->
    </div>
  </div>
  <!-- search input modal end -->

  <!-- shopping cart modal start -->
  <div class="modal" data-id="tableModal">
    <div class="modal-header">
      <h3>Shopping Cart Modal</h3>
      <i data-feather="x-circle" class="btn-modal-close"></i>
    </div>
    <div class="modal-body">
      <!-- list start -->
      <div class="box-container"></div>
      <!-- list end -->
      <div class="wrapper">
        <h4>Total Biaya :</h4>
        <span class="price">0</span>
      </div>
      <button class="button button-checkout">Checkout</button>
    </div>
  </div>
  <!-- shopping cart modal end -->

  <!-- feather icon -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script src="js/icon.js"></script>

  <!-- sweetalert2 js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.js"></script>

  <!-- my javascript -->
  <script src="js/script.js"></script>
</body>
</html>
