<!DOCTYPE html>
<html>
<head>
	<title>Our Hotel</title>
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
	<table align="center" border="0" cellpadding="5" width="100%" style="background-color: #0000CD;">
		<tr style="font-size:30">
			
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
	
	<h1><font color='white'>Form Booking</font></h1>
	<form action="simpan_pesan.php" method="post">
		<table>
			<tr>
				<td>ID Customer</td>
				<td>:</td>
				<td><input type="text" name="id_customer"></td>
			</tr>
			<tr>
				<td>Kode Kamar</td>
				<td>:</td>
				<td><input type="text" name="kd_kamar"></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td><input type="text" name="tgl_masuk"></td>
			</tr>
			<tr>
				<td>Tanggal Keluar</td>
				<td>:</td>
				<td><input type="text" name="tgl_keluar"></td>
			</tr>
			<tr>
				<td>Uang Muka</td>
				<td>:</td>
				<td><input type="text" name="uangmuka"></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
