<?php 
 
include("koneksi.php"); 
 
if( isset($_GET['id']) ){ 
 
    // Mengambil id dari query string pada form_edit.php
    $id = $_GET['id']; 
 
    // Membuat query hapus 
    $sql = "DELETE FROM calon_siswa WHERE id=$id"; 
    $query = mysqli_query($db, $sql); 
 
    // Menyatakan apakah query hapus berhasil? 
    if( $query ){ 
        // Jika berhasil akan dialihkan ke halaman list_pendaftar.php
        header('Location: list_pendaftar.php'); 
    } else { 
        // Jika gagal akan ditampilkan pesan
        die("Gagal menghapus data!"); 
    } 
 
} else { 
    die("Akses dilarang!"); 
} 
 
?> 