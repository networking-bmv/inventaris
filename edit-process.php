<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $status = $_POST['status'];
    $garansi = $_POST['garansi'];
    $keterangan = $_POST['keterangan'];

    // buat query update
    $sql = "UPDATE inventaris SET nama='$nama', lokasi='$lokasi', status='$status', garansi='$garansi', keterangan='$keterangan' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Failed Save Change..");
    }


} else {
    die("Access Denied!");
}

?>