<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "jasa_fotografi";

// Create connection
$conn = mysqli_connect($servername, @$username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Hapus baris ini untuk mempertahankan koneksi terbuka
// mysqli_close($conn);
?>
