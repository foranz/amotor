<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- fontawesome -->
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
   <!-- Place your kit's code here -->
            <script src="https://kit.fontawesome.com/da14dfb904.js" crossorigin="anonymous"></script>
    <!-- sweetalert2 css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.css"
    />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
 
    <title>Admin Asia Motor</title>
      <style>
    body {
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}
    .sidebar {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  width: 230px;
  background-color: #6495ed;
  padding: 20px;
  overflow-y: auto;
}

.sidebar .logo {
  text-align: center;
  margin-bottom: 20px;
}

.sidebar .logo img {
  width: 100px;
  height: auto;
}

.sidebar .admin-name {
  text-align: center;
  margin-bottom: 20px;
  color: #142ab7;
}

.sidebar .menu {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.sidebar .menu li {
  margin-bottom: 10px;
}

.sidebar .menu li a {
  color: white;
  text-decoration: none;
  display: block;
  padding: 5px;
}

.sidebar .menu li a:hover {
  background-color: #87b1ff;
}
</style>
  </head>
<body>
    <div class="sidebar">
      
        <div class="logo">
            <a href="menu.php"><img src="images/loog.png" alt="Logo">
        </div>
        <div class="admin-name">
            <h4>Admin Asia Motor</h4>

        </div>
        <ul class="menu">
            
            <li><a href="board.php"><i class="fa-sharp fa-solid fa-house "></i><span>  Dashboard</span></a></li>
            <li><a href="orderindex.php"><i class="fa-solid fa-inbox"></i>    Pemesanan</a></li>
            <li><a href="produkindex.php"><i class="fa-solid fa-store"></i>    Produk</a></li>
            <li><a href="penggunaindex.php"><i class="fa-solid fa-user-group"></i> Pengguna</a></li>
            <li><a href="rsvpindex.php"><i class="fa-solid fa-book-open-reader"></i> Kontak</a></li>
         
        </ul> 
    </div>
    
      
    <!-- feather icon -->
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="js/icon.js"></script>

    <!-- sweetalert2 js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.2/sweetalert2.min.js"></script>

  </body>
</html>

