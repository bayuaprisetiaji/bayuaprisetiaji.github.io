<?php 
$host       = "localhost";
$user       = "root";
$pass       = "root";
$db         = "smkn3supurwakarta";

$koneksi    = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
     die ("gagal Koneksi");
}