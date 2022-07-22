<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_pegawai = $_POST['id_pegawai'];
$nama_pegawai = $_POST['nama_pegawai'];
$update_data = mysqli_query($koneksi, "UPDATE pegawai set
nama_pegawai='$nama_pegawai' where id_pegawai=$id_pegawai");
if ($update_data) {
 header('location:data_pegawai.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_pegawai.php?pesan=Data Gagal Di Ubah');
}