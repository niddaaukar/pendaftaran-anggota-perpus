<?php

include("config.php");

if (isset($_GET['id_anggota'])) {


    //ambil id dari query string
    $id = $_GET['id_anggota'];

    //buat query hapus
    $sql = "DELETE FROM anggota_perpus WHERE id_anggota=$id";
    $query = mysqli_query($conn, $sql); // perbaikan disini, ganti $db menjadi $conn

    //apakah query hapus berhasil?
    if ($query) {
        header('Location: list-daftar-anggota.php');
    } else {
        die("Gagal menghapus anggota...");
    }
} else {
    die("Akses dilarang...");
}
