<?php

include 'koneksi.php';

if (isset($_POST['input'])) {

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email= $_POST['email'];
$jenisKelamin = $_POST['jeniKelamin'];
$tglLahir= $_POST['tglLahir'];


$query = "INSERT INTO t_pendaftaran VALUES (NULL, '$nama', '$alamat', '$telepon', '$email', '$jenisKelamin', '$tglLahir')";
$result = mysqli_query($koneksi, $query);

if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
    " - ".mysqli_error($link));
}
}
header("location:daftar_siswa.php");
?>