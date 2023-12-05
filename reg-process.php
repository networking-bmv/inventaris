<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $status = $_POST['status'];
    $garansi = $_POST['garansi'];
    $keterangan = $_POST['keterangan'];

    // buat query
    $sql = "INSERT INTO inventaris (nama, lokasi, status, garansi, keterangan) VALUE ('$nama', '$lokasi', '$status', '$garansi', '$keterangan')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?system_status=success');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?system_status=failed');
    }


} else {
    die("Access Denied...");
}

?>