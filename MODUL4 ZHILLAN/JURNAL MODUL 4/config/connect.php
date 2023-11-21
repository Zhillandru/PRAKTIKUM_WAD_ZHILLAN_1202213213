<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$dbhost = "localhost:3308";
$dbuser = "root";
$dbname = "jurnal_modul4";
$dbpass = "";
// 
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
// 
 
?>