<?php
require_once 'mahasiswa.php';

$mhs = new mahasiswa();

//ambil nim di URL
$nim_lama =$_GET['nim'];

//ambil data berdasarkan nim
$data = $mhs->getByNim($nim_lama);
$row  = $data->fetch_assoc();

//=====
//update
//=====
if (isset($_POST['update'])) {

   $nim = $_POST['nim'];
   $nama = $_POST['nama'];
   $prodi = $_POST['prodi'];

   if ($mhs->update($nim_lama, $nim, $nama, $prodi)) {
    header("Location : index.php");
    exit;
   }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit data Mahasiswa</title>
</head>
<body>
    <<h2>Edit data mahasiswa</h2>

    <form method="POST">
        NIM:<br>
        <input type="text" name="nim" value="<?php echo $row['nim']; ?>"><br>

        Nama:<br>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>

        Prodi:<br>
        <input type="text" name="prodi" value="<?php echo $row['prodi']; ?>"><br>
        <button name="update">Update Data</button>
    </form>
    <hr>
    <h2>Data Mahasiswa</h2>
