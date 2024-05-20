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
            max-width: 50%;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: aliceblue;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2{
            font-weight: bold;
            text-align: center;
            font-size: 25px;
            background-color: rgb(12, 12, 72);
            color: white;
            padding: 10px;
            border-radius: 5px 5px 5px 5px;
        }

        h4 {
            text-align: center;
            text-decoration: underline;
            font-size: 23px;
            color: rgb(12, 12, 72);
            margin-top: 20px;
            margin-bottom: 5px;
        }

        nav {
            text-align: center;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0;
            font-size: 16px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 50px;
            margin-left: 50px;
        }

        nav ul li a {
            color: rgb(12, 12, 72);
            text-decoration: none;
        }

        nav ul li a:hover {
            color: black;
            text-decoration: underline;
        }

        p {
            font-size: 14px;
            padding: 10px;
            margin-bottom: 20px;
            margin-top: 20px;
            text-align: center;
            color: darkblue;
        }
    </style>
</head>

<body>
    <div class="container">
    <header> 
        <h2>Formulir Pendaftaran Siswa Baru
            <br>Digital Talent</br>
        </h2>
    </header>
    <h4>- Menu -</h4>
    <nav> 
        <ul> 
            <li><a href="form_pendaftaran.php">˙✧˖° Pendaftaran Baru ༘ ⋆｡˚</a></li> 
            <li><a href="list_pendaftar.php">˙✧˖° List Pendaftar ༘ ⋆｡˚</a></li> 
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p> 
        <?php 
        if($_GET['status'] == 'sukses'){ 
            echo "Pendaftaran berhasil!"."<br>".
            "Silahkan klik menu 'List Pendaftar' untuk melihat data yang telah diinputkan!"; 
        } else { 
            echo "Pendaftaran gagal!"; 
        } 
        ?> 
    </p> 
    <?php endif; ?>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>