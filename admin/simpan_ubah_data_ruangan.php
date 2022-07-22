<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_ruangan = $_POST['id_ruangan'];
$nama_ruangan = $_POST['nama_ruangan'];
$update_data = mysqli_query($koneksi, "UPDATE ruangan set
nama_ruangan='$nama_ruangan' where id_ruangan=$id_ruangan");
if ($update_data) {
 header('location:data_ruangan.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_ruangan.php?pesan=Data Gagal Di Ubah');
}