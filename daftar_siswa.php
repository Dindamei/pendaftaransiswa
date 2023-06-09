<?php 
    include 'koneksi.php';
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
     <style>
        body {
            background-image: url(gambar/tujuh.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            height: auto;
        }
        h1 {
        color: black;
        }
        img.img {
        width: 50%;
        height: 308px;
        object-fit: cover;
        }
        table{
            width: 840px:
            margin: auto;
        }
        h1{
        padding: 30px;
        text-align: center;  
        }
        nav {
    background-color: blue;
        }
        
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 10px;
        }
        
        nav ul li {
            margin-right: 10px;
        }
        
        nav ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }
        
        nav ul li a:hover {
            background-color: #555;
        }
        footer{
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: rgb(21, 100, 219);
        text-align: center;
        padding: 10px;
        }
        button {
        background-color: blue; 
        border: none; 
        color: white;
        padding: 15px 32px; 
        text-align: center; 
        text-decoration: none; 
        display: inline-block; 
        font-size: 16px; 
        margin: 4px 2px; 
        cursor: pointer; 
        border-radius: 8px; 
        transition-duration: 0.4s; 
    }

</style>

</head> 
<body>
        <nav>
                <ul>
                    <li><a href="beranda.php">Home</a></li>
                    <li><a href="tambah.php">Tambah Siswa</a></li>
                    <li><a href="daftar_siswa.php">Daftar Siswa</a></li>
                    <li><a href="syarat.php">Syarat</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>

<h1>Daftar Siswa</h1>
<center><a href="tambah.php"><button>Tambah Data</button></a></center>
<br/>
<table border="2">

<th>id</th>

<th>nama</th>

<th>alamat</th> 

<th>telepon</th>

<th>email</th>
<th>jenis kelamin</th>
<th>tgl lahir</th>
</tr> 
<?php



$query= " SELECT * FROM t_pendaftaran ORDER BY id ASC"; 
$result = mysqli_query($conn, $query);

if (!$result) {
    die ("Query Error: ".mysqli_errno ($conn). 
    " - ".mysqli_error($conn));
}
while ($data = mysqli_fetch_assoc($result))

{

echo "<tr>" ;
echo "<td>$data[id]</td>"; 
echo "<td>$data[nama]</td>";
echo "<td>$data[alamat]</td>"; 
echo "<td>$data[telepon]</td>";
echo "<td>$data[email]</td>";  
echo "<td>$data[jenis_kelamin]</td>";
echo "<td>$data[tgl_lahir]</td>";  

echo '<td> 
<a href="edit.php?id='.$data['id'].'">Edit</a> /
<a href="hapus.php?id='.$data['id'].'" 
onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>

</td>'; 
echo "</tr>";
}
?>
</table>
<footer>
        <p>Dinda Mei Mayang Putri|223307068</p>
    </footer>
</body> 
</html>