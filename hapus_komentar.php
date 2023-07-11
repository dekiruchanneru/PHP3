<?php
session_start();

$index = $_POST['index'];

if (isset($_SESSION['komentar'])) {
    $reversed_komentar = array_reverse($_SESSION['komentar']);
    array_splice($reversed_komentar, $index, 1);
    $_SESSION['komentar'] = array_reverse($reversed_komentar);
}

header("Location: index.php");
