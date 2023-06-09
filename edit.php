<?php
 include 'koneksi.php';

 if (isset($_GET['id'])) {
    $id = ($_GET['id']);
    $query = "SELECT * FROM t_pendaftaran WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die ("Query Error: ".mysqli_errno($conn).
        " - ".mysqli_errno($conn));
    }
    $data = mysqli_fetch_assoc($result);
    $id = $data["id"];
    $nama = $data["nama"];
    $alamat = $data["alamat"];
    $telepon = $data["telepon"];
    $email = $data["email"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $tgl_lahir = $data["tgl_lahir"];
    } else {
        header("location:daftar_siswa.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1 {
                text-align: center;
            }
            container{
                width: 400px;
                margin: auto;
            }
        </style>
    </head>
    <body>
        <h1>Edit Data</h1>
        <div class="container">
            <form id="form_pendaftaran" action="proses_edit.php" method="post">

            <fieldset>
                <legend>Edit Data</legend>
                <p>
                    <label for="id">id</label>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input type="text" name="idDisabled" id="idDisabled" value="<?php echo $id ?>">
                </p>
                <p>
                <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
                </p>
                <p>
                <label for="alamat">alamat</label>
                    <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
                </p>
                <p>
                <label for="telepon">telepon</label>
                    <input type="text" name="telepon" id="telepon" value="<?php echo $telepon ?>">
                </p>
                <p>
                <label for="email">email</label>
                    <input type="text" name="email" id="email" value="<?php echo $email ?>">
                </p>
                <p>
                <label for="jenis_kelamin">jenisKelamin</label>
                    <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $jenis_kelamin ?>">
                </p>
                <p>
                <label for="tgl_lahir">tglLahir</label>
                    <input type="text" name="tgl_lahir" id="tgl_lahir" value="<?php echo $tgl_lahir ?>">
                </p>
                
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Update Data">
            </p>
            </form>
        </div>
    </body>
</html>