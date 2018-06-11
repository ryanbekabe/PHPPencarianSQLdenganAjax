<?php
session_start();
$_SESSION['ses1'] = 'ses1.';
$_SESSION['ses2'] = 'ses2..';
$_SESSION['ses3'] = 'ses3...';
echo 'Pemberian sesi / $_SESSION';

/* 
PHP - Login Konsep
Pada video tutorial ini, menjelaskan tentang konsep bagaimana
yang terjadi pada sistem setelah user / pengguna aplikasi
khususnya aplikasi berbasis web(site), setelah melalui proses
memasukkan username dan password lalu menuju halaman Login.

Pada page1.php ini, terdapat script session_start(); yang
berfungsi untuk memulai merekam sesi bagi halaman web.
*/
?>
