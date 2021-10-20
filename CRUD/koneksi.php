<?php
$host="localhost";
$username="root";
$password="";
$databasename="akademik01";
$con=@mysqli_connect($host,$username,$password,$databasename);

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";

?>