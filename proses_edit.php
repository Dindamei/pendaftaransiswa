<?php

if (isset($_POST['edit'])) {
    include ("koneksi.php");

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];

      $query = "UPDATE t_pendaftaran SET nama = '$nama', alamat = '$alamat', telepon = '$telepon', email = '$email', jenis_kelamin = '$jenis_kelamin', tgl_lahir = '$tgl_lahir' WHERE id = '$id'";
      $result = mysqli_query($conn, $query);

      if(!$result) {
        die ("Query gagal dijalankan: ".mysqli_errno($conn).
        " - ".mysqli_error($conn));
      }
    }
header("location:daftar_siswa.php");
?>