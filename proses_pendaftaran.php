<?php 
 
include("koneksi.php");  
if(isset($_POST['daftar'])){ 
 
    // Mengambil data yang diinputkan pada form pendaftaran
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat']; 
    $jk = $_POST['jenis_kelamin']; 
    $agama = $_POST['agama']; 
    $sekolah = $_POST['sekolah_asal']; 
 
    // Membuat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) 
    VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')"; 
        $query = mysqli_query($db, $sql); 
     
        // Menyatakan apakah query simpan berhasil? 
        if( $query ) { 
            // Jika berhasil akan dialihkan ke halaman index.php dengan status=sukses 
            header('Location: index.php?status=sukses'); 
        } else { 
            // Jika gagal akan dialihkan ke halaman index.php dengan status=gagal 
            header('Location: index.php?status=gagal'); 
        } 

} else { 
    die("Akses dilarang!"); 
} 
     
?>