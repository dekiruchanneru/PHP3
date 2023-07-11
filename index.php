<!DOCTYPE html>
<?php session_start(); ?>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berikan Saran untuk Tenaga IT di masa depan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Berikan Saran untuk Tenaga IT di masa depan</h1>
        <form action="simpan_komentar.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="komentar">Komentar:</label>
            <textarea id="komentar" name="komentar" rows="4" cols="50" required></textarea>
            <br>
            <input type="submit" value="Kirim Komentar">
        </form>
        <hr>
        <h2>Saran Terbaru</h2>
        <?php include 'tampilkan_komentar.php'; ?>
    </div>
</body>

</html>
