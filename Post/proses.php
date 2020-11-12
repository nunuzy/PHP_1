<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["nama"];
    $alamat = $_POST["alamat"];
    echo "Nama : " .$name;
    echo "<br>";
    echo "Alamat: ".$alamat;
}
?> 