<?php
if (isset($_SESSION['komentar'])) {
    $index = 0;
    foreach (array_reverse($_SESSION['komentar']) as $komentar) {
        list($nama, $email, $isi_komentar) = explode(" | ", $komentar);
        echo "<p><strong>$nama</strong> ($email) berkomentar:</p>";
        echo "<p>$isi_komentar</p>";  
        echo "<form action='hapus_komentar.php' method='post'>";
        echo "<input type='hidden' name='index' value='$index'>";
        echo "<input type='submit' value='Hapus Komentar'>";
        echo "</form>";
        echo "<hr>";
        $index++;
    }
} else {
    echo "<p>Belum ada komentar.</p>";
}
