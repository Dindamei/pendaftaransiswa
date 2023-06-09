<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['commit'])) {
    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $query = "SELECT * FROM t_admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['password'] = $row['password'];
        $_SESSION['nama'] = $row['nama'];
        #echo "Login berhasil";
        header("Location: beranda.php");
        exit();
    } else {
        echo "Login gagal. Periksa kembali Username dan Password Anda.";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link rel="stylesheet"  href="login.css">
</head>
<body>
    <style>
       *{
    padding: 0;
    margin: 0;
}

body{
    background-image: url(gambar/tujuh.jpeg);
    font-family: verdana;
    background-repeat: no-repeat;
    background-size: cover;
}
.tampilan{
    background: #fff;
    width: 400px;
    margin: 200px auto 0;
    border-radius: 16px;
    min-height: 156px;
    overflow: hidden;
}
.kepala{
    background: blue;
    padding: 10px 22px;
    height: 30px;
}
.kepala h2.judul{
    color: #fff;
    font-size: 25px;
    font-weight: normal;
    text-align: center;
    line-height: 20px;
}

.kesalahan{
 font-size:20px;
 color: #ff0000;
 padding: 10px 0 0 0;
 text-align: center;
}

.artikel{
    padding:10px 22px 0;
    color: #808080;
}
.kotak input[type="text"],
.kotak input[type="password"]{
    font-size: 15px;
    width: 100%;
    height: 40px;
    padding: 0px;
    margin: 10px;
    background: #eeeeee;
    border:none;
    color: #808080;
}

.kotak input[type="submit"]{
    background: black;
    font-size:18px;
    margin: 0 0 0 130px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
}
</style>
    <form method="post" action="index.php">
        <div class="tampilan">
        <div class="kepala">
            <div class="logo"></div>
            <h2 class="judul">Login Admin</h2>
        </div>
        <div class="artikel">
        <div class="kesalahan">
<?php
    if(isset($_GET["login_error"])){
        echo "Username atau password salah";
    }
?>
</div>
<div class="kotak">
    <p><input type="text" name="username" value="" placeholder="Masukan Username Anda"></p>
    <p><input type="password" name="password" value="" placeholder="Masukan Password Anda"></p>
    <p class="submit"><a href="index.php"></a><input type="submit" name="commit" value="Login"></p>
</form>
</div>
</body>
</html>