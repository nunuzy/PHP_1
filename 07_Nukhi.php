<?php
	$nama = [["Nama"=>"Satria", 
	"Kelas"=>"RPL 1"],
	["Nama"=>"Arsyi", 
	"Kelas"=>"RPL 2"],
	["Nama"=>"Dhika", 
	"Kelas"=>"RPL 3"],
	["Nama"=>"Evan", 
	"Kelas"=>"RPL 4"],
	["Nama"=>"Fabian", 
	"Kelas"=>"RPL 5"],
	["Nama"=>"Irfan", 
	"Kelas"=>"RPL 6"]];
	echo "<pre>";
	print_r($nama);
	echo "</pre>";
?>

<br>

<?php
$nama = array("Satria","Arsyi","Dhika","Evan","Fabian","Irfan");
for ($i=0; $i <= sizeof($nama)-1; $i++) { 
    $kel = $i + 1;
    echo("Nama : <b>$nama[$i]</b> Kelas : ");
    echo "<b>RPL $kel </b><br>";
}
?> 