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
	
	<h1><font color='white'>Reservasi</font></h1>
	<form action="simpan_customer.php"  method="post" onSubmit="return validasi(this)">
		
		<table>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="text" name="id_customer" id="id_customer" required>
					
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama_customer" id="nama_customer" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jekel" value="Laki-laki"  required>laki-laki
				<input type="radio" name="jekel" value="Perempuan"  required>perempuan</td>
			</tr>
			<tr>
				<td>No Telfon</td>
				<td>:</td>
				<td><input type="number" name="no_telfon" placeholder="+62" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat_customer" rows="8" cols="40" required></textarea></td>
			</tr>
			<tr>
				<td>Tanggal Check In</td>
				<td>:</td>
				<td><input type="date" name="tgl_checkin" placeholder="" required></td>
			</tr>
			<tr>
				<td>Tanggal Check Out</td>
				<td>:</td>
				<td><input type="date" name="tgl_checkout" placeholder="" required></td>
			</tr>
			<tr>
    		<td>Tipe Kamar</td>
    		<td>:</td>
    		<td><select name="tipe_kamar"  size="1" >
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
				<td><input type="submit" value="Submit" onClick="return validasi()"> <input type="reset" value="Reset"></td>				
   				</tr>
			</tr>
		</table>
	</form>




</body>

<script language="javascript"> 
 function validasi(form){


	 /*var id_customer = document.getElementById("id_customer").value;
	 var nama_customer = document.getElementById("nama_customer").value;
	 var jekel = document.getElementById("jekel").value;
	 var no_telfon = document.getElementById("no_telfon").value;
	 var alamat_customer = document.getElementById("alamat_customer").value;
	 var tgl_checkin = document.getElementById("tgl_checkin").value;
	 var tgl_checkout = document.getElementById("tgl_checkout").value;
	 var tipe_kamar = document.getElementById("tipe_kamar").value;
	 if(id_customer !="" && nama_customer!="" && jekel!="" && no_telfon!="" && alamat_customer!="" && tgl_checkin!="" && tgl_checkout!="" && tgl_checkout!="" && tipe_kamar!=""){
		 alert("Data wjib diisi semua!!!");
	 }else{
		 return(simpan_customer.php);
	 }*/

//cek id_customer
	var cek = form.id_customer.value.slice(0,2);
	var cek1 = form.id_customer.value.slice(6,8);
	var cek2 = form.id_customer.value.slice(8,10);
	var cek3 = form.id_customer.value.slice(12,16);

	 if (cek < 11 || cek == 20 ||(cek > 21 && cek < 31) || (cek > 36 && cek < 51) || (cek > 53 && cek < 61) || (cek > 64 && cek <71) || (cek > 76 && cek < 81) || (cek > 82 && cek < 91) || (cek > 91 && cek < 94) || cek > 94){
    	alert("NIK tidak valid!");
    	form.id_customer.focus();
    	return (false);
  	}
   	if (cek1 < 1 || cek1 > 31){
    	alert("NIK tidak valid!");
    	form.id_customer.focus();
    	return (false);
  	}
	if (cek2 < 1 || cek2 > 12){
    	alert("NIK tidak valid!");
    	form.id_customer.focus();
    	return (false);
  	}
  	if (cek3 < 1){
    	alert("NIK tidak valid!");
    	form.id_customer.focus();
    	return (false);
  	}
	if (form.id_customer.value.length != 16){
    	alert("NIK tidak valid!");
    	form.id_customer.focus();
    	return (false);
  	}
   		

//cek tipe_kamar
	if(form.tipe_kamar.value=="-"){
		 alert("Tipe kamar wajib diisi!");
		 form.tipe_kamar.focus();
		 return (false);
	 }
	 return(true);
 }
</script>
</html>