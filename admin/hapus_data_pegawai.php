<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pegawai = $_GET['id_pegawai'];
$hapus_data = mysqli_query($koneksi, "DELETE FROM pegawai where id_pegawai=$id_pegawai");
if ($hapus_data) {
 header('location:data_pegawai.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pegawai.php?pesan=Data Gagal Di Ubah');
}