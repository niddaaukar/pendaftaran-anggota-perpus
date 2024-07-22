<?php

include("config.php");
//cek apakah tombol daftar sudah diklik atau belum ?
if (isset($_POST['daftar'])) {
    //ambil data dari formulir 
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    //buat query
    $sql = "INSERT INTO anggota_perpus (nama, alamat, jenis_kelamin, agama, asal_sekolah) VALUES ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($conn, $sql); // Perubahan disini, dari $db menjadi $conn

    //apakah query disimpan berhasil ?
    if ($query) {
        //kalau berhasil alihkan ke halaman list-daftar-anggota.php
        header('Location: list-daftar-anggota.php');
    } else {
        //kalau gagal akan menampilkan pesan error
        die("Gagal menyimpan data anggota: " . mysqli_error($conn));
    }
} else {
    die("Akses dilarang...");
}
