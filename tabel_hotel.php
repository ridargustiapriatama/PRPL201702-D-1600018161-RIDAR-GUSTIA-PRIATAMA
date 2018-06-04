<?php

$konek = new mysqli("localhost","root","","prplhotel");


if ($konek->connect_error) {
	die("koneksi gagal karena : ".$konek->connect_error);
}
//buat tabel customer
$sql = "create table customer (id_customer varchar(20) not null primary key,nama_customer varchar(50),jekel varchar(50),no_telfon varchar(20),alamat_customer varchar(200),tgl_checkin varchar(50),tgl_checkout varchar(50),tipe_kamar varchar(30)";

if ($konek->query($sql)) {
			echo "Table customer berhasil dibuat</br>";
		}
		else{
			echo "Table customer tidak berhasil dibuat karena :" .$konek->error."</br>";
		}
//buat tabel kamar
$sql = "create table kamar(kd_kamar varchar(15) not null primary key,kd_kategori varchar(50),nama_kamar varchar(20),lokasi_lantai varchar(2),keterangan varchar(30),status varchar(20)) ";

if ($konek->query($sql)) {
			echo "Table kamar berhasil dibuat</br>";
		}
		else{
			echo "Table kamar tidak berhasil dibuat karena :" .$konek->error."</br>";
		}

//buat tabel pesan

$sql = "create table pesan (
		id_customer varchar(15) ,
		kd_kamar varchar(15),
		tgl_masuk varchar(20),
		tgl_keluar varchar(20),
		uangmuka int,
		FOREIGN KEY (id_customer) REFERENCES customer(id_customer),
		FOREIGN KEY (kd_kamar) REFERENCES kamar(kd_kamar))";

if ($konek->query($sql)) {
			echo "Table Booking berhasil dibuat</br>";
		}
		else{
			echo "Table Booking tidak berhasil dibuat karena :" .$konek->error."</br>";
		}

				$konek->close();

?>