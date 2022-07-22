<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_ruangan = $_GET['id_ruangan'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM ruangan where id_ruangan=$id_ruangan");
if ($hapus_data) {
 header('location:data_ruangan.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_ruangan.php?pesan=Data Gagal Di hapus');
}