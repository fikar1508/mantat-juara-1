
<?php
// Lakukan koneksi ke database (sesuaikan dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "progress_tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$response = array(); // Inisialisasi respons JSON

// Periksa apakah tombol "Next" diklik dan data berhasil disimpan
if (isset($_POST['button'])) 
    $buttonText = $_POST['button'];

    // Selanjutnya, Anda bisa melakukan penyimpanan data ke dalam tabel "day1" dalam database "progress_tracking".
    // Misalnya, Anda bisa menggunakan SQL INSERT untuk memasukkan data baru ke dalam tabel "day1".
    
    $sql = "INSERT INTO button_names (day1) VALUES ('$buttonText')";

    if ($conn->query($sql) === TRUE) 
// Tutup koneksi ke database
$conn->close();

// Kembalikan respons sebagai JSON
echo json_encode($response);
?>