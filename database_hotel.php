<?php

		$konek = new mysqli("localhost","root","");


		if ($konek->connect_error) {
			die("Koneksi gagal karena : ".$konek->connect_error);
		}

		$sql = "create database prplhotel";

		if ($konek->query($sql)) {
			echo "database berhasil dibuat";
		}
		else{
			echo "database tidak berhasil dibuat karena :" .$konek->error;
		}

		$konek->close();

?>