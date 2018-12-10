<!DOCTYPE html>
<html>
<head>
	
	<title>RUMAH SAKIT</title>
</head>
<body>

	<form action="dt_rs.php" method="POST">

		<table>
			
			<td><h2>INPUT DATA RUMAH SAKIT</h2></td>
		<tr>
			<td>kode_rs :
		<input type="number" name="kode_rs" placeholder= ""></td>
		</tr><br>

		<tr>
			<td>NAMA_rs :
		<input type="text" name="nama_rs" placeholder= ""></td>
		</tr><br>

		<tr>
			<td>Alamat_rs:
		<input type="text" name="Alamat_rs" placeholder= ""></td>
		</tr><br>
		<tr>
		    <td>Jumlah_Dokter :
		<input type="text" name="jumlah_dokter" placeholder= ""></td>
		</tr><br>
        <tr>
			<td>Jumlah_kamar:
		<input type="text" name="jumlah_kamar"  placeholder= ""></td>
		</tr><br>

		</table>

		<input type="submit" value="SIMPAN" name="input">
		
	</form><br>
	<form action="Tampilan.php">
		<input type="submit" value="TAMPILKAN_DATA" name="PINDAH">
	</form>

</body>
</html>
<?php
include("./koneksi.php");

if(isset($_POST['input']))
{
	$kode_rs=$_POST['kode_rs'];
	$nama_rs=$_POST['nama_rs'];
	$Alamat_rs=$_POST['Alamat_rs'];
	$jumlah_dokter=$_POST['jumlah_dokter'];
	$jumlah_kamar=$_POST['jumlah_kamar'];
	

	$sql="INSERT INTO rumah_sakit(kode_rs,nama_rs,Alamat_rs,jumlah_dokter,Jumlah_kamar) VAlUES ('kode_rs','$nama_rs','$Alamat_rs','$jumlah_dokter','$jumlah_kamar')";
	if(mysqli_query($conn,$sql))
	{
		echo "DATA BERHASIL DITAMBAH";
	}
	else
	{
		echo "EROR!!".$sql."".mysqli_error($conn);
	}
	$conn->close();
}
?>