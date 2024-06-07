<?php
//koneksi database
include 'connect.php';

// Periksa apakah parameter 'id' telah diberikan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query hapus data berdasarkan ID
    $query = "DELETE FROM formulir WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    echo "ID data tidak diberikan.";
}

// Menutup koneksi database
mysqli_close($koneksi);
?>
