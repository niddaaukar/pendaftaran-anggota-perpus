<?php

include("config.php");

// cek apakah tombol sudah diklik atau belum
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $id = $_POST['id_anggota'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['asal_sekolah'];

    // buat query update
    $sql = "UPDATE anggota_perpus SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', asal_sekolah='$sekolah' WHERE id_anggota=$id";
    $query = mysqli_query($conn, $sql);


    // apakah query disimpan berhasil ?
    if ($query) {
        // kalau berhasil alihkan ke halaman list-daftar-anggota.php
        header('Location: list-daftar-anggota.php');
    } else {
        // kalau gagal akan menampilkan pesan error
        die("Gagal menyimpan perubahan: " . mysqli_error($conn));
    }
} else {
    die("Akses dilarang...");
}
