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
	font-family:Lucida Calligraphy;
	
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
	td{
	font-weight:bold;
	color:white;
	font-family:Arial;
	
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
	<h3><a href="tampil_customer.php"> Kembali </a></h3>
	</body>
</html>

<?php
$host="localhost";
$username="root";
$password = "";
$db_name = "prplhotel";

$konek = new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if ($konek->connect_error) {
	die("Koneksi gagal karena : ".$konek->connect_error);
}

$cari_tgl_checkin1 = $_POST['cari_tgl_checkin1'];
$cari_tgl_checkin2 = $_POST['cari_tgl_checkin2'];
$cari_tgl_checkout1 = $_POST['cari_tgl_checkout1'];
$cari_tgl_checkout2 = $_POST['cari_tgl_checkout2'];
$cari_tipe_kamar = $_POST['cari_tipe_kamar'];

$sql= "SELECT * FROM customer WHERE tgl_checkin BETWEEN '$cari_tgl_checkin1' AND '$cari_tgl_checkin2' OR tgl_checkout BETWEEN '$cari_tgl_checkout1' AND '$cari_tgl_checkout2' OR tipe_kamar='$cari_tipe_kamar' ";

$data=$konek->query($sql);


echo "<h1><font color='white'>Daftar Reservasi</font></h1>";
echo "<table border='1' bgcolor='#7FFFD4'>";
echo "<tr>
		<td>No</td>
		<td>ID Customer</td>
		<td>Nama Customer</td>
		<td>Jenis Kelamin</td>
		<td>No Telfon</td>
		<td>Alamat Customer</td>
		<td>Tanggal Check In</td>
		<td>Tanggal Check Out</td>
		<td>Tipe Kamar</td>
		<td colspan=2>Aksi</td>
	 </tr>";
	 
if($data->num_rows>0){
	$no=1;
	while($row=$data->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['id_customer']."</td>";
		echo "<td>".$row['nama_customer']."</td>";
		echo "<td>".$row['jekel']."</td>";
		echo "<td>".$row['no_telfon']."</td>";
		echo "<td>".$row['alamat_customer']."</td>";
		echo "<td>".$row['tgl_checkin']."</td>";
		echo "<td>".$row['tgl_checkout']."</td>";
		echo "<td>".$row['tipe_kamar']."</td>";
		echo "<td><a href='hapus_customer.php?id_customer=".$row['id_customer']."'>Hapus</a></td>";
		echo "</tr>";
	}
}else{
	echo "Data Kosong!";
}
echo "</table>";

/*tampilan booking
$sql="select * from pesan";
$data=$konek->query($sql);


echo "<h1><font color='white'>Daftar Booking</font></h1>";
echo "<table border='1' bgcolor='#7FFFD4'>";
echo "<tr>
		<td>No</td>
		<td>ID Customer</td>
		<td>Kode Kamar</td>
		<td>Tanggal Masuk</td>
		<td>Tanggal Keluar</td>
		<td>Uang Muka</td>
		<td colspan=2>Aksi</td>
	 </tr>";
	 
if($data->num_rows>0){
	$no=1;
	while($row=$data->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$no++."</td>";
		echo "<td>".$row['id_customer']."</td>";
		echo "<td>".$row['kd_kamar']."</td>";
		echo "<td>".$row['tgl_masuk']."</td>";
		echo "<td>".$row['tgl_keluar']."</td>";
		echo "<td>".$row['uangmuka']."</td>";
		echo "<td><a href='hapus_pesan.php?id_customer=".$row['id_customer']."'>Hapus</a></td>";
		echo "</tr>";
	}
}else{
	echo "Data Kosong!";
}
echo "</table>";
*/
$konek->close();

?>