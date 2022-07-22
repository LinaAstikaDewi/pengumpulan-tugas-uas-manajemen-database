<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_ruangan = $_POST['nama_ruangan'];
$insert_data = mysqli_query($koneksi, "INSERT INTO ruangan (nama_ruangan)
values ('$nama_ruangan')");
if ($insert_data) {
 header('location:data_ruangan.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_ruangan.php?pesan=Data Gagal Di simpan');
}