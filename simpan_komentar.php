<?php
session_start();

$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];

$data_komentar = $nama . " | " . $email . " | " . $komentar . PHP_EOL;

if (!isset($_SESSION['komentar'])) {
    $_SESSION['komentar'] = [];
}

array_push($_SESSION['komentar'], $data_komentar);

header("Location: index.php");
