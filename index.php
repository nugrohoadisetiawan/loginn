<!DOCTYPE html>
<html lang="en">
<head>
    <title>membuat login</title>
</head>
<body>
    <h2>latihan login xll rpl smk 1 sayung</h2>
</br>
<!-- cek pesan notifikasi -->
<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo"login gagal! username dan password salah!";
    }else if ($_GET['pesan']=="logout"){
        echo"Anda telah berhasil logout";
    }else if ($_GET['pesan']=="belum_login"){
        echo"Anda harus login untuk mengakses halaman admin";
    }
}
?>
</br>
</br>
<form method="POST" action="cek_login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukan username"></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
            <td><input type="password" name="password" placeholder="Masukan password"></td>
</tr>
<td></td>
<td></td>
<td><input type="submit" value="LOGIN"></td>
</tr>
</table>
</form>
</body>
</html>