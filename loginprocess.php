<?php
include 'loginconnection.php';

// Mengambil data dari formulir login
$email = $_POST['email'];
$password = $_POST['password'];

// Mengecek apakah ada entri yang cocok dalam tabel client
$query = "SELECT * FROM `client` WHERE email_client='$email' AND password_client='$password'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    // Jika ada entri yang cocok, login berhasil
    echo "<script> window.location.href = 'sanproductionfinalV2.php'; alert('Berhasil login!')</script>;";
} else {
    // Jika tidak ada entri yang cocok, login gagal
    echo "<script>alert('Login gagal!'); window.location.href = 'sanproductionfinalV2.php';</script>";
}

//mysqli_close($conn);
?>
