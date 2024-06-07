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
      <h3><i class="fa-solid fa-user-group" style="color: #6495ed;"></i> Data Pengguna</h3><hr>
          <!-- Area Chart -->
          <div class="col">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-danger">List Pengguna</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm" id="admin" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Pengguna</th>
                        <th>Username</th>
                 
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Include config file
                      include 'connect.php';

                      // Attempt select query execution
                      $admin = mysqli_query($koneksi, "select * from admin");
                      $no = 1; // Variable untuk nomor urut

                      while($row=$admin->fetch_object()){
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->name; ?></td>
                          <td><?php echo $row->username; ?></td>
                       
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
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
</body>
</html>
