<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $perguruanTinggi = htmlspecialchars($_POST['perguruanTinggi']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];
    $password = htmlspecialchars($_POST['password']);

    if (empty($username) || empty($email) || empty($perguruanTinggi) || empty($prodi) || empty($password)) {
        echo "<script>alert('Semua field harus diisi!'); window.history.back();</script>";
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['perguruanTinggi'] = $perguruanTinggi;
        $_SESSION['prodi'] = $prodi;
        $_SESSION['hobi'] = $hobi;

        header("Location: detail.php");
        exit();
    }
}
?>
