<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['ID'];
    $nama = $_POST['NAMA'];
    $email = $_POST['EMAIL'];
    $tujuan = $_POST['TUJUAN'];
    $asal = $_POST['ASAL'];
    $maskapai = $_POST['MASKAPAI'];
    
    // buat query update
    $sql = "UPDATE tiket SET NAMA='$nama', EMAIL='$email', TUJUAN='$tujuan', ASAL='$asal', MASKAPAI='$maskapai' WHERE ID=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-pesanan.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>