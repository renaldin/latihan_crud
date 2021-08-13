<?php 

include('connection.php');

$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$umur           = $_POST['umur'];
$jenis_kelamin  = $_POST['jenis_kelamin'];

$insert = mysqli_query($connect, "INSERT INTO karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin'");

if ($insert) {
    header('Location: list.php');
} else {
    echo 'Data gagal diinputkan!';
}