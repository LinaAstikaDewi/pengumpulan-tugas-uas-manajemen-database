<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$tgl_masuk_barang = $_POST['tgl_masuk_barang'];
$update_data = mysqli_query($koneksi, "UPDATE barang set
nama_barang='$nama_barang',jumlah_barang='$jumlah_barang',tgl_masuk_barang='$tgl_masuk_barang' where id_barang=$id_barang");
if ($update_data) {
 header('location:data_barang.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_barang.php?pesan=Data Gagal Di Ubah');
}