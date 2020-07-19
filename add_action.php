<?php

include('../config/koneksi.php');

$nama          = $_POST['name'];
$tempat_lahir  = $_POST['born'];
$tanggal_lahir = $_POST['Year_of_birth'] . '-' . $_POST['Month_of_birth'] . '-' . $_POST['Date_of_birth'];
$alamat        = $_POST['address'];
$kota          = $_POST['city'];
$negara        = $_POST['country'];
$kode_pos      = $_POST['postal_code'];
$hp            = $_POST['hp'];
$email         = $_POST['email'];
$tinggi_badan  = $_POST['height'];
$berat_badan   = $_POST['weight'];

$query = mysqli_query($connect, "INSERT INTO anggota(full_name, born, Date_of_birth , address, city, country, postal_code, no_hp, email, height, weight) 
                      VALUES ('$full_name', '$born', '$date_of_birth', '$address', '$city', '$country', '$postal_code', '$no_hp', '$email', '$height', '$weight')");

if($query) {
    header('location:../index.php?aksi=tambah&status=true');
}
else {
    header('location:../index.php?page=tambah&status=false');
}

?>