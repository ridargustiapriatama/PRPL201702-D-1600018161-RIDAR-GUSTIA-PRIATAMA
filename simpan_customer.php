<html>
	<head><title>Our Hotel</title>
	<link rel="icon" href="uad.jpg" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css.css">
	<style type="text/css">
	p{
	font-size:50px;
	text-align:center;
	font-weight:bold;
	top:50%;
	left:39%;
	position: fixed;
	color:white;
	font-family:Arial;
	
	}
	p1{
	font-size:50px;
	text-align:center;
	font-weight:bold;
	top:13%;
	left:28%;
	position: fixed;
	color:red;
	font-family:Arial;
	
	}
	a:link {
		color:white;
		text-decoration:none;
	}
	
	hr{
		width:50%;
		top:53%;
		left:25%;
		position: fixed;
		color:white;
	}
	body{
		overflow:auto;
		background-size:cover;
	}
	</style>
	</head>	
	<body style="background-image:url(hotel2.jpg)">
	<table align="right" border="0" cellpadding="5" width="100%" style="background-color: #0000CD;">
		<tr style="font-size:20">
			
			<td width="145" style="text-align:center">
			<a href="tambah_customer.php"><font size="4px">Reservasi</font></a>
			</td>
			<td width="145" style="text-align:center">
			<a href="tampil_kamar.php"><font size="4px">Kamar</font></a>
			</td>
			<td width="180" style="text-align:center">
			<a href="tampil_customer.php"><font size="4px">Customer & Booking</font></a>
			</td>
			<td></td>
			<td></td>
			<td></td>
			<td width="60" style="text-align:center">
			<a href="index.php"><img src="home.png" width="30px" style="float:center"></a>
			</td>
			
		</tr>
		
	</table>
	</body>
</html>
<?php
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "prplhotel";

$konek = new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if ($konek->connect_error) {
	die("Koneksi gagal karena : ".$konek->connect_error);
}

$id_cus = $_POST['id_customer'];
$nama_cus = $_POST['nama_customer'];
$jekel = $_POST['jekel'];
$alamat_cus = $_POST['alamat_customer'];
$no_telp = $_POST['no_telfon'];
$tgl_checkin = $_POST['tgl_checkin'];
$tgl_checkout = $_POST['tgl_checkout'];
$tipe_kamar = $_POST['tipe_kamar'];

$sql = "INSERT INTO customer(id_customer,nama_customer,jekel,no_telfon,alamat_customer,tgl_checkin,tgl_checkout,tipe_kamar) VALUES ('$id_cus','$nama_cus','$jekel','$no_telp','$alamat_cus','$tgl_checkin','$tgl_checkout','$tipe_kamar')";
if ($konek->query($sql)) {
	echo "<font size='5px' color='##00FFFF'>Data Reservasi BERHASIL ditambah!</font><br/>";
	//tabel kamar
	$sql="select * from kamar where keterangan='$tipe_kamar'";
	$data=$konek->query($sql);

		echo "<h3><font color='white'>Daftar Kamar berdasarkan tipe kamar yang dipilih</font></h3>";
		echo "<table border='1'  bgcolor='#7FFFD4'>";
		echo "<tr>
		<td>No</td>
		<td>Kode Kamar</td>
		<td>Kode Kategori</td>
		<td>Nama Kamar</td>
		<td>Lokasi Lantai</td>
		<td>Tipe Kamar</td>
		<td>Status</td>
		<td>Aksi</td>
		</tr>";
	 
	if($data->num_rows>0){
	$no=1;
	while($row=$data->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['kd_kamar']."</td>";
		echo "<td>".$row['kd_kategori']."</td>";
		echo "<td>".$row['nama_kamar']."</td>";
		echo "<td>".$row['lokasi_lantai']."</td>";
		echo "<td>".$row['keterangan']."</td>";
		echo "<td>".$row['status']."</td>";
		echo "<td><a href='status_kamar.php?kd_kamar=".$row['kd_kamar']."'>Pesan</a></td>";
		echo "</tr>";
	}
	}else{
	echo "Data Kosong!";
	}
	echo "</table>";
	
}else{
	echo "<font size='5px' color='#ff0000'>Data Reservasi GAGAL ditambah : ".$konek->error."</font><br/>";
}

$konek->close();

?>