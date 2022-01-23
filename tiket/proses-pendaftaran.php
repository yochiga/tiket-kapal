<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['NAMA'];
    $email = $_POST['EMAIL'];
    $tujuan = $_POST['TUJUAN'];
    $asal = $_POST['ASAL'];
    $maskapai = $_POST['MASKAPAI'];

    // buat query
    $sql = "INSERT INTO tiket (NAMA, EMAIL, TUJUAN, ASAL, MASKAPAI) VALUE ('$nama', '$email', '$tujuan', '$asal', '$maskapai')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: export.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: export.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>