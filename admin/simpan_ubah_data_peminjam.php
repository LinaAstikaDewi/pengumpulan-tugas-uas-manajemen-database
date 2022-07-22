<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$nama_peminjam = $_POST['nama_peminjam'];
$tgl_peminjam = $_POST['tgl_pinjam'];
$update_data = mysqli_query($koneksi, "UPDATE peminjam set
nama_peminjam='$nama_peminjam',tgl_pinjam='$tgl_pinjam' where id_peminjam=$id_peminjam");
if ($update_data) {
 header('location:data_peminjam.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_peminjam.php?pesan=Data Gagal Di Ubah');
}