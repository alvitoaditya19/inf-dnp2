<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "weight_data";

// Buat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Ambil data terbaru dari tabel
$sql = "SELECT weight FROM scale_data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

$data = $result->fetch_assoc();

echo json_encode($data);

$conn->close();
?>
