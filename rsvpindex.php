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
    <!-- Place this script inside the tag -->
<script>
  function changeStatus(id, status) {
    // Send an AJAX request to update the status in the database
    // You need to create a separate PHP script to handle the AJAX request and database update
    // For simplicity, I'll use a placeholder script called update_status.php
    // Replace "update_status.php" with the actual PHP script that handles the update
    const url = `update_status.php?id=${id}&status=${status}`;
    fetch(url)
      .then(response => {
        if (response.ok) {
          // If the update is successful, reload the page to reflect the changes
          location.reload();
        } else {
          // Handle error if the update fails
          alert("Failed to update status.");
        }
      })
      .catch(error => {
        // Handle any network or other errors
        console.error('Error:', error);
        alert("An error occurred while updating the status.");
      });
  }
</script>
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
      <h3><i class="fa-solid fa-book-open-reader" style="color: #6495ed;"></i> Data Kontak</h3><hr>
          <!-- Area Chart -->
          <div class="col">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-danger">Kontak Jual Motor</h6>
              </div>
              <!-- Card Body -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-sm" id="produk" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Alamat Email</th>
                        <th>Nomor HP</th>
                        <th>Status</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Include config file
                      include 'connect.php';

                      // Attempt select query execution
                      $product = mysqli_query($koneksi, "select * from formulir");
                      $no = 1; // Variable untuk nomor urut

                      while($row=$product->fetch_object()){
                      ?>
                        <tr>
                          <td><?php echo $no++; ?></td>
                          <td><?php echo $row->nama; ?></td>
                          <td><?php echo $row->email; ?></td>
                          <td><?php echo $row->nomor; ?></td>
                          <td><?php echo $row->status; ?></td>
                           <td>
        <!-- Buttons for changing the status -->
        <button class="btn btn-success btn-sm" onclick="changeStatus(<?php echo $row->id; ?>, 'accepted')"><i class="fa-solid fa-check"></i></button>
        <button class="btn btn-danger btn-sm" onclick="changeStatus(<?php echo $row->id; ?>, 'rejected')"><i class="fa-solid fa-xmark"></i></button>
      </td>
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
