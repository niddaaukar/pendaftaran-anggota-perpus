<?php
include("config.php");

// Mengambil id anggota yang ingin diedit dari parameter URL
$id_anggota = $_GET['id_anggota'];

// Query untuk mengambil data anggota berdasarkan id
$sql = "SELECT * FROM anggota_perpus WHERE id_anggota=$id_anggota";
$query = mysqli_query($conn, $sql);
$anggota = mysqli_fetch_assoc($query);
?>

<html>

<head>
    <title>Formulir Edit Anggota Perpustakaan | SMK Gamelab Indonesia</title>
</head>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 7px 15px;
        margin: 8px 0;
        display: inline-block;
        box-shadow: 3px 3px 5px grey;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        box-sizing: border-box;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 7px 15px;
        box-sizing: border-box;
        box-shadow: 3px 3px 5px grey;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        resize: none;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        box-shadow: 3px 3px 5px #4CAF50;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 20px;
    }

    input[type=submit]:hover {
        background-color: grey;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }
</style>

<body>
    <header>
        <h1>Formulir Edit Anggota</h1>
    </header>
    <div>
        <form action="proses-edit-anggota.php" method="POST">
            <fieldset>
                <input type="hidden" name="id_anggota" value="<?php echo $anggota['id_anggota']; ?>">
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $anggota['nama']; ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" placeholder="Alamat Lengkap"><?php echo $anggota['alamat']; ?></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" <?php if ($anggota['jenis_kelamin'] == 'Laki-Laki') echo 'checked'; ?>>Laki-Laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($anggota['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>>Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option <?php if ($anggota['agama'] == 'Islam') echo 'selected'; ?>>Islam</option>
                        <option <?php if ($anggota['agama'] == 'Kristen') echo 'selected'; ?>>Kristen</option>
                        <option <?php if ($anggota['agama'] == 'Hindu') echo 'selected'; ?>>Hindu</option>
                        <option <?php if ($anggota['agama'] == 'Budha') echo 'selected'; ?>>Budha</option>
                        <option <?php if ($anggota['agama'] == 'Atheis') echo 'selected'; ?>>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="asal_sekolah">Sekolah Asal: </label>
                    <input type="text" name="asal_sekolah" placeholder="Nama asal sekolah" value="<?php echo $anggota['asal_sekolah']; ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>
            </fieldset>
    </div>
</body>


</html>