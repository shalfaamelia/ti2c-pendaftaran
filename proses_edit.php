<?php 
 
include("koneksi.php"); 

if(isset($_POST['simpan'])){ 
 
    // Mengambil data yang diinputkan pada form pendaftaran
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat']; 
    $jk = $_POST['jenis_kelamin']; 
    $agama = $_POST['agama']; 
    $sekolah = $_POST['sekolah_asal']; 
 
    // Membuat query update
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', 
    agama='$agama', sekolah_asal='$sekolah' WHERE id=$id"; 
        $query = mysqli_query($db, $sql); 
     
        // Menyatakan apakah query update berhasil? 
        if( $query ) { 
            // Jika berhasil akan dialihkan ke halaman list_pendaftar.php 
            header('Location: list_pendaftar.php'); 
        } else { 
            // Jika gagal akan ditampilkan pesan 
            die("Gagal menyimpan perubahan!"); 
        } 
     
} else { 
    die("Akses dilarang!"); 
} 

?>