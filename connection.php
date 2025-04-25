<?php
$server = "localhost";
$database = "db_buku_tamu";
$username = "root";
$password ="";
$koneksidb = mysqli_connect($server,$username, $password, $database);

if($koneksidb) {
echo "Sukses terhubung";
}else{
echo "Gagal terhubung";
}
?>

