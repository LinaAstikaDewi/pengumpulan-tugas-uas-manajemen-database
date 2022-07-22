<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_iventaris = $_GET['id_inventaris'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM inventaris where id_inventaris=$id_inventaris");
if ($hapus_data) {
 header('location:data_inventaris.php?pesan=Data Berhasil Di hapus');
} else {
 header('location:data_inventaris.php?pesan=Data Gagal Di hapus');
}