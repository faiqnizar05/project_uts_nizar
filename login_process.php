<?php
// Koneksi ke database
$host = 'localhost'; // Ganti dengan host Anda
$username = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'dbpuskesmas1'; // Ganti dengan nama database Anda

$conn = mysqli_connect($host, $username, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Ambil data dari formulir login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk memeriksa apakah username dan password cocok
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$query_role = "SELECT role_id FROM users WHERE username='$username'";
$result = $conn->query($query);
$data = mysqli_fetch_array($result);

if ($result->num_rows > 0) {
    // Jika hasil query mengembalikan baris, berarti login berhasil
if ($data['role_id'] != 1) {
    // echo "<script>alert('$data[role_id]');</script>";
    header("Location: index_user.php");
}else{
    // echo "<script>alert('$data[role_id]');</script>";
    header("Location: index_admin.php");

}
exit;

} else {
    // Jika tidak, kembali ke formulir login dengan pesan error dan tampilkan notifikasi
    echo "<script>alert('Username atau password salah. Silakan coba lagi.');</script>";
    // Redirect kembali ke halaman login setelah menampilkan notifikasi
    echo "<script>window.location.href='login_form.php';</script>";
}

// Tutup koneksi
$conn->close();
