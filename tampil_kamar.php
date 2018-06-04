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
	td{
	font-weight:bold;
	color:black;
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

$sql="select * from kamar";
$data=$konek->query($sql);

echo "<h1><font color='white'>Daftar Kamar</font></h1>";
echo "<table border='1'  bgcolor='#7FFFD4'>";
echo "<tr>
		<td>No</td>
		<td>Kode Kamar</td>
		<td>Kode Kategori</td>
		<td>Nama Kamar</td>
		<td>Lokasi Lantai</td>
		<td>Tipe Kamar</td>
		<td>Status</td>
		
		
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
		
		
		echo "</tr>";
	}
}else{
	echo "Data Kosong!";
}
echo "</table>";




$konek->close();

?>