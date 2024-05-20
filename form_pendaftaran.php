<!DOCTYPE html> 
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | Digital Talent</title> 
    <link rel="stylesheet" type="text/css" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <style>
        body {
            background: url(bg.jpeg);
            font-family: inherit;
            margin: 0;
            padding: 0;
        }

        .container {
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
    <div class="container">
    <header>
        <h3>Formulir Pendaftaran Siswa Baru</h3> 
    </header> 
    <form action="proses_pendaftaran.php" method="POST"> 
        <fieldset> 
        <p> 
            <label for="nama">Nama: </label> 
            <input type="text" name="nama" placeholder="Nama Lengkap" /> 
        </p> 
        <p> 
            <label for="alamat">Alamat: </label> 
            <textarea name="alamat"></textarea> 
        </p> 
        <p> 
            <label for="jenis_kelamin">Jenis Kelamin: </label> 
            <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label> 
            <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label> 
        </p> 
        <p> 
            <label for="agama">Agama: </label> 
            <select name="agama"> 
                <option>Islam</option> 
                <option>Kristen</option> 
                <option>Hindu</option> 
                <option>Budha</option> 
                <option>Konghucu</option> 
            </select> 
        </p> 
        <p> 
            <label for="sekolah_asal">Sekolah Asal: </label> 
            <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" /> 
        </p> 
        <p> 
            <button type="submit" name="daftar">DAFTAR</button>
        </p> 
        </fieldset> 
    </form> 
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>    
</html> 