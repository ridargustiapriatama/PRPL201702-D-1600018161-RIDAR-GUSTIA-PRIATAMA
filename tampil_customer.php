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
	<form action="filter_customer.php"  method="post">
		<table>
			<tr>
				<td>Cari:</td>
			</tr>
			<tr>
				<td>Checkin dari tanggal</td>
				<td>: </td>
				<td><input type="date" name="cari_tgl_checkin1"> - <input type="date" name="cari_tgl_checkin2"></td>				
			</tr>
			<tr>
				<td>Checkout dari tanggal</td>
				<td>: </td>
				<td><input type="date" name="cari_tgl_checkout1"> - <input type="date" name="cari_tgl_checkout2"></td>				
			</tr>
			<tr>
				<td>Tipe kamar</td>
				<td>: </td>
				<td><select name="cari_tipe_kamar"  size="1" >
				<option value="-" selected >-Pilih-
				<option value="Single" >Single
				<option value="Double" >Double
				<option value="Suite" >Suite
				<option value="Twin" >Twin
				<option value="Family">Family
				</select></td>
								
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Search" > </td>	
   			</tr>
		</table>
	</form>
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


$sql="select * from customer";
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


$konek->close();

?>
<html lang="en-US">
<body>

<h1><font color='white'>Grafik</font></h1>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Single', 2],
  ['Double', 2],
  ['Suite', 1],
  ['Twin', 1],
  ['Family', 0]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Grafik pemesanan kamar', 'width':600, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>
