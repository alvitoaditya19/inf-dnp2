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

// Ambil data dari POST request
$weight = $_POST['weight'];

// Insert data ke tabel
$sql = "INSERT INTO scale_data (weight) VALUES ($weight)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
