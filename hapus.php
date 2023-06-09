<?php
 include "koneksi.php";

 if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM t_pendaftaran WHERE id='$id'";
    $hasil_query = mysqli_query($conn, $query);
    if(!$hasil_query) {
        die ("Gagal menghapus data: ".mysqli_error ($conn).
        " - ".mysqli_error($conn));
    }
 }
 header("location:daftar_siswa.php");
 ?>