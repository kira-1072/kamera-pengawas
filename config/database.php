<?php
//deklarasi parameter koneksi ke database
$server  = "localhost";
$username= "rauf";
$password= "tes123";
$database= "kamera-pengawas";

//koneksi ke database
$mysqli = new mysqli($server, $username, $password, $database);

//percabangan untuk cek koneksi ke database, nek gagal error
if ($mysqli->connect_error){
	die('Koneksi Database Gagal : '.$mysqli->connect_error);
}

//username ikhwanalfath password ikhwan encription MD5
?>

