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
$insert_data = mysqli_query($koneksi, "INSERT INTO inventaris (id_inventaris,id_barang,id_ruangan,id_pegawai,tgl_inventaris)
values ('$id_inventaris','$id_barang','$id_ruangan','$id_pegawai','$tgl_inventaris')");
if ($insert_data) {
 header('location:data_inventaris.php?pesan=Data Berhasil Di simpan');
} else {
 header('location:data_inventaris.php?pesan=Data Gagal Di simpan');
}