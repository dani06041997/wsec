<?php
include 'config.php'; 
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp']; 
$alamat = $_POST['alamat']; 	
$angkatan = $_POST['angkatan'];
$input = mysql_query("insert into absen_reuni values('','$nama','$no_telp','$alamat','$angkatan')");
if ($input) {
	echo "<script>alert('Data Berhasil di Simpan'); window.location='forms.php';</script>";
	} else {
	echo "<script>alert('Gagal Di Simpan');</script>";
}
