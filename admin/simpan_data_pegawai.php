<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_pegawai = $_POST['nama_pegawai'];
$tlp_pegawai = $_POST['tlp_pegawai'];
$insert_data = mysqli_query($koneksi, "INSERT INTO pegawai (nama_pegawai)
values ('$nama_pegawai')");
if ($insert_data) {
 header('location:data_pegawai.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_pegawai.php?pesan=Data Gagal Di simpan');
}