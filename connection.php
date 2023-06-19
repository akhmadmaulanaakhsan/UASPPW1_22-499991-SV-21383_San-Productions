<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "akademik";

    // Create connection
    $conn = mysqli_connect($servername, @$username, $password, $database);

    // Check connection
    if(!$conn) {
        die("Connection failed: " .  mysqli_connect_error());
    }

    // Query untuk mendapatkan data dari tabel ocean_data
    $sql = "SELECT * FROM hero_data ORDER BY RAND() LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Output data dalam format JSON
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "{}"; // Mengembalikan objek JSON kosong jika tidak ada data
    }

    mysqli_close($conn);
?>