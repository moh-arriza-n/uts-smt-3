<?php
include('connection.php');
if(isset($_POST['simpan'])){
	$query_tambah_data="insert into produksi(NO,NAMA,JABATAN,JUMLAH_CUTI)values
	('".$_POST['NO']."',
		'".$_POST['NAMA']."',
		'".$_POST['JABATAN']."',
		'".$_POST['JUMLAH_CUTI']."')";
		$proses_data=mysql_query($query_tambah_data);
if ($proses_data){
		echo 'tambah data berhasil (OK)';
}else{
		echo mysql_error();
}
}
?>

<form method="POST" action="">
<table>
		<tr>
				<td>NO</td>
				<td><input name="NO" type="number"></td>
		</tr>
		<tr>
				<td>NAMA</td>
				<td><input name="NAMA" type="text"></td>
		</tr>
		<tr>
				<td>JABATAN</td>
				<td><input name="JABATAN" type="text"></td>
		</tr>
		<tr>
				<td>JUMLAH_CUTI</td>
				<td><input name="JUMLAH_CUTI" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
</form>

<a href="HRD.php"><H1>HRD>>></H1></a>