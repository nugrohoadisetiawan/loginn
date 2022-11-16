<?php
// mengaktifkan session php //
session_start();
 
// menghubungkan dengan koneksi 
include 'koneksi.php';

// menangkap data yang dikkirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' and password='$password'");

// menghitung jumblah data yang di temukan
$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['username'] = $username;
  $_SESSION['status']= "login";
  header("location:admin.php");  
}else{
    header("location:index.php?pesan=gagal");
}
?>