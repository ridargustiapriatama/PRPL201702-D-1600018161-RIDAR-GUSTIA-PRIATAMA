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
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "prplhotel";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$kd_kamar = $_GET['kd_kamar'];
//$status = $_GET['status'];
//$status = $_POST['status'];
//$stat = "empty";
if($status = "empty"){
	$sql="update kamar set status='used' where kd_kamar='$kd_kamar'";
	if($konek->query($sql)){
		echo "<font size='5px' color='##00FFFF'>Pemesanan kamar sukses!</font><br/>";
	}else{
		echo "<font size='5px' color='#ff0000'>Pemesanan kamar gagal! : ".$konek->error."</font><br/>";
	}
}else{
	 echo "<font size='5px' color='##00FFFF'>Kamar sudah digunakan!</font><br/>";
}
/*$sql = "update kamar set status='used' where kd_kamar='$id_customer'";
if($konek->query($sql)){
  echo "<font size='5px' color='##00FFFF'>Data Reservasi BERHASIL dihapus!</font><br/>";
}else{
  echo "<font size='5px' color='#ff0000'>Data Reservasi GAGAL dihapus : ".$konek->error."</font><br/>";
}*/

$konek->close();

?>
