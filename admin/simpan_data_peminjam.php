<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_peminjam = $_POST['nama_peminjam'];
$tgl_peminjam = $_POST['tgl_pinjamm'];
$insert_data = mysqli_query($koneksi, "INSERT INTO peminjam (nama_peminjam,tgl_pinjam)
values ('$nama_peminjam','$tgl_pinjam')");
if ($insert_data) {
 header('location:data_peminjam.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_peminjam.php?pesan=Data Gagal Di simpan');
}