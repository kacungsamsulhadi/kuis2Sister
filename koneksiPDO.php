<?php 
define('DB_SERVER','10.0.0.144');
define('DB_USER','samsul015');
define('DB_PASS','MyDatabase01>');
define('DB_NAME','db_warung');

$con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//cek koneksi
if(mysqli_connect_errno()){
    echo "Gagal koneksi ke MySQL: " . mysqli_connect_error();
}
