<?php
//koneksi ke database
$koneksi=mysqli_connect("localhost","root","","akademik") or die(" Connection Failed !");

//cek koneksi
if(mysqli_connect_errno()) {
    echo "koneksi database gagal : " . mysqli_connect_errno();
}
?>