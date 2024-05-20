<?php include("koneksi.php"); ?> 
 
<!DOCTYPE html> 
<html lang="en">
    
<html> 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | Digital Talent</title>
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            margin-top: 50px;
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
            margin-bottom: 20px;
        }

        header h3 {
            font-weight: bold;
            margin: 0;
        }

        table {
            margin-top: -15px;
            margin-bottom: 15px;
            border-collapse: collapse;
            width: 100%;
        }

        table tr, table th {
            padding: 15px;
            text-align: center;
        }

        table th {
            background-color: rgb(12, 12, 72);
            color: white;
            text-align: center;
            font-weight: normal;
        }

        table tr:nth-child(even) {
            background-color: aliceblue;
        }

        table tr:hover {
            background-color: white;
        }

        tbody{
            color: midnightblue;
        }

        p {
            color: midnightblue;
            margin-bottom: -5px;
        }

        button {
            margin-top: -20px;
            background-color: rgb(12, 12, 72);
            border: none;
            padding: 10px;
            font-size: 16px;
            font-family: inherit;
            cursor: pointer;
            border-radius: 5px 5px 5px 5px;
        }

        button:hover {
            background-color: navy;
        }
    </style>
</head> 
 
<body> 
    <div class="container">
    <header> 
        <h3>List Siswa Yang Sudah Mendaftar</h3> 
    </header> 
    <br> 
    <table border="1"> 
    <thead> 
        <tr> 
            <th>No</th> 
            <th>Nama</th> 
            <th>Alamat</th> 
            <th>Jenis Kelamin</th> 
            <th>Agama</th> 
            <th>Sekolah Asal</th>
            <th>Tindakan</th> 
        </tr> 
    </thead> 
    <tbody>      
    <?php 
        $sql = "SELECT * FROM calon_siswa"; 
        $query = mysqli_query($db, $sql); 
 
        while($siswa = mysqli_fetch_array($query)){ 
            echo "<tr>"; 
 
            echo "<td>".$siswa['id']."</td>"; 
            echo "<td>".$siswa['nama']."</td>"; 
            echo "<td>".$siswa['alamat']."</td>"; 
            echo "<td>".$siswa['jenis_kelamin']."</td>"; 
            echo "<td>".$siswa['agama']."</td>"; 
            echo "<td>".$siswa['sekolah_asal']."</td>"; 
 
            echo "<td>"; 
            echo "<a href='form_edit.php?id=".$siswa['id']."'>Edit</a> | "; 
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>"; 
            echo "</td>"; 
 
            echo "</tr>"; 
        } 
        ?> 
    </tbody> 
    </table> 
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <br>
    <button><a href="index.php" style="color: white; text-decoration: none">Kembali</a></button>
    <button><a href="form_pendaftaran.php" style="color: white; text-decoration: none">Tambah Data</a></button>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    </body> 
</html> 