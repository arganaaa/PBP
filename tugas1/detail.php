<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>alert('Form belum diisi. Harap isi form terlebih dahulu.'); window.location.href = 'index.html';</script>";
    exit();
}

echo "<h2>Hasil Pendaftaran:</h2>";
echo "Username: " . htmlspecialchars($_SESSION['username']) . "<br>";
echo "Email: " . htmlspecialchars($_SESSION['email']) . "<br>";
echo "Perguruan Tinggi: " . htmlspecialchars($_SESSION['perguruanTinggi']) . "<br>";
echo "Program Studi: " . htmlspecialchars($_SESSION['prodi']) . "<br>";

if (!empty($_SESSION['hobi'])) {
    echo "Hobi: " . implode(", ", array_map('htmlspecialchars', $_SESSION['hobi'])) . "<br>";
} else {
    echo "Hobi: Tidak ada yang dipilih<br>";
}


session_unset();
session_destroy();
?>
