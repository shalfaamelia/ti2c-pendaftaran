<?php 
 
include("koneksi.php"); 
 
// Kondisi jika tidak ada id pada query string 
if( !isset($_GET['id']) ){ 
    header('Location: list_pendaftar.php'); 
} 
 
// Mengambil id pada query string
$id = $_GET['id']; 
 
// Membuat query baru untuk mengambil data dari database 
$sql = "SELECT * FROM calon_siswa WHERE id=$id"; 
$query = mysqli_query($db, $sql); 
$siswa = mysqli_fetch_assoc($query);

// Kondisi ketika data yang di-edit tidak ditemukan 
if( mysqli_num_rows($query) < 1 ){ 
    die("Data tidak ditemukan!"); 
} 
 
?> 
 
 
<!DOCTYPE html> 
<html> 
<head> 
    <title>Formulir Edit Siswa | Digital Talent</title> 
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 20px;
            background-color: aliceblue;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: rgb(12, 12, 72);
            color: white;
            padding: 15px;
            border-radius: 5px 5px 5px 5px;
            margin-bottom: 10px;
        }

        header h3 {
            margin: 0;
            font-weight: bold;
        }

        label{
            color: midnightblue;
            margin-bottom: 5px;
        }

        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }

        fieldset p {
            margin: 0;
            padding: 10px;
        }

        fieldset label {
            display: inline-block; 
            text-align: right;
            vertical-align: top;
            padding-top: 5px;
        }

        fieldset textarea {
            width: 100%;
        }
        
        fieldset input[type="text"], fieldset input[type="radio"] {
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 5px;
            color: black;
            font-size: 16px;
            width: 100%;
        }

        fieldset input[type="radio"] {
            margin-right: 10px;
        }

        fieldset button[type="submit"] {
            background-color: rgb(12, 12, 72);
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }

        fieldset button[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head> 
 
<body>  
    <form action="proses_edit.php" method="POST"> 
        <header> 
            <h3>Formulir Edit Siswa</h3> 
        </header>
        <fieldset> 
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" /> 
        <p> 
            <label for="nama">Nama: </label> 
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" /> 
        </p> 
        <p> 
            <label for="alamat">Alamat: </label> 
            <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea> 
        </p> 
        <p> 
            <label for="jenis_kelamin">Jenis Kelamin: </label> 
            <?php $jk = $siswa['jenis_kelamin']; ?> 
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label> 
            <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label> 
        </p> 
        <p> 
            <label for="agama">Agama: </label> 
            <?php $agama = $siswa['agama']; ?> 
            <select name="agama"> 
                <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option> 
                <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option> 
                <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option> 
                <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option> 
                <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Konghucu</option> 
            </select> 
        </p> 
        <p> 
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" /> 
        </p> 
        <p> 
            <button type="submit" name="simpan">SIMPAN</button>
        </p> 
        </fieldset> 
    </form> 
    </body> 
</html> 