<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpus";
//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);
//cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// perintah sql untuk hapus data
$sql = "DELETE FROM anggota_perpus WHERE asal_sekolah LIKE '%Sstudio'";

if (mysqli_query($conn, $sql)) {
    echo "Rekord berhasil dihapus";
} else {
    echo "Ada kesalahan hapus: " . mysqli_error($conn);
}


mysqli_close($conn);
