<?php
include 'koneksi.php';

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id= validateInput($_POST['id']);
    $nama = validateInput($_POST['nama']);
    $alamat = validateInput($_POST['alamat']);
    $telepon = validateInput($_POST['telepon']);
    $email = validateInput($_POST['email']);
    $jenis_kelamin = validateInput($_POST['jenis_kelamin']);
    $tgl_lahir = validateInput($_POST['tgl_lahir']);



    $sql = "INSERT INTO t_pendaftaran( id, nama, alamat, telepon, email, jenis_kelamin, tgl_lahir) VALUES ( '$id', '$nama',  '$alamat',  '$telepon', '$email', '$jenis_kelamin', '$tgl_lahir')";

    if (mysqli_query($conn,$sql )) {
        echo "Pendaftaran berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<style>
        body {
            background-image: url(gambar/tujuh.jpeg);
        }
        h1 {
        color: white;
        }
        img.img {
        width: 50%;
        height: 308px;
        object-fit: cover;
        }
    </style>
<nav>
        <ul>
            <li><a href="beranda.php">Home</a></li>
            <li><a href="tambah.php">Tambah Siswa</a></li>
            <li><a href="daftar_siswa.php">Daftar Siswa</a></li>
            <li><a href="syarat.php">Syarat</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
<body>
    <section class="box-formulir">

        <h2>Formulir Pendaftaran Siswa Baru</h2>
        <form action="" method="post">
            <div class="box">
                <table class="table-form">
                    <tr>
                        <td>id</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="id" class= "input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>nama</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="nama" class= "input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="alamat" class= "input-control">
                        </td>
                    </tr>
                    </tr>
                    <tr>
                        <td>telepon</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="telepon" class= "input-control">
                        </td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="email" class= "input-control">
                        </td>
                    </tr>
                    <tr>
                    <td>jenis kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </td>
                        
                        </tr>
                        <tr>
                        <td>tgl lahir</td>
                        <td>:</td>
                        <td>
                            <input type= "text"  name="tgl_lahir" class= "input-control" placeholder="yyyy-mm-dd">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type= "submit" name="submit" class="btn_daftar" value="Daftar Sekarang">
                        </td>
                    </tr>



        </form>
    </section>
    
   
</body>
</html>