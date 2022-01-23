<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['ID']) ){
    header('Location: list-pesanan.php');
}

//ambil id dari query string
$id = $_GET['ID'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tiket WHERE ID=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="ID" value="<?php echo $siswa['ID'] ?>" />

        <p>
            <label for="NAMA">Nama: </label>
            <input type="text" name="NAMA" placeholder="nama lengkap" value="<?php echo $siswa['NAMA'] ?>" />
        </p>
        <p>
            <label for="EMAIL">Email: </label>
            <input type="text" name="EMAIL" placeholder="nama lengkap" value="<?php echo $siswa['EMAIL'] ?>" />
        </p>
        <p>
            <label for="TUJUAN">Tujuan: </label>
            <input type="text" name="TUJUAN" placeholder="nama lengkap" value="<?php echo $siswa['TUJUAN'] ?>" />
        </p>
        <p>
            <label for="ASAL">Asal: </label>
            <input type="text" name="ASAL" placeholder="nama lengkap" value="<?php echo $siswa['ASAL'] ?>" />
        </p>
        <p>
            <label for="MASKAPAI">Jenis Kapal: </label>
            <?php $maskapai = $siswa['MASKAPAI']; ?>
            <select name="MASKAPAI">
                <option <?php echo ($maskapai == 'Feri') ? "selected": "" ?>>Kapal Feri</option>
                <option <?php echo ($maskapai == 'Malam') ? "selected": "" ?>>Kapal Malam</option>
                <option <?php echo ($maskapai == 'Cepat') ? "selected": "" ?>>Kapal Cepat</option>
            </select>
            
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>