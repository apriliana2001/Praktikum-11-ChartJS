<?php
$host="localhost";
$user="root";
$password="";
$db="db_penjualan";

$koneksi = mysqli_connect($host,$user,$password,$db);

//cek koneksi
if (!$koneksi){
      die("Koneksi gagal:".mysqli_connect_error());
}
?>