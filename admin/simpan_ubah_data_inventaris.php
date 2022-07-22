<?php
session_start();
if ($_SESSION['status'] != "sudah_login") {
 //melakukan pengalihan
 header("location:../login/login.php");
}
include "../config/koneksi.php";
$id_inventaris = $_POST['id_inventaris'];
$id_barang = $_POST['id_barang'];
$id_ruangan = $_POST['id_ruangan'];
$id_pegawai = $_POST['id_pegawai'];
$tgl_inventaris = $_POST['tgl_inventaris'];

$update_data = mysqli_query($koneksi, "UPDATE barang set
id_barang='$id_barang',id_ruangan='$id_ruangan',id_pegawai='$id_pegawai',tgl_inventaris='$tgl_inventaris where id_inventaris=$id_inventaris");
if ($update_data) {
 header('location:data_inventaris.php?pesan=Data Berhasil Di Ubah');
} else {
 header('location:data_inventaris.php?pesan=Data Gagal Di Ubah');
}