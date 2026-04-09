<?php
require_once 'mahasiswa.php';
$mhs = new mahasiswa();

//ambil nim
$nim = $_GET['nim'];

//hapus data
$mhs->hapus($nim);

header("Location: index.php");
exit;
?>