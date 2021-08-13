<?php 

include('connection.php');

$id             = $_POST['id'];
$nama           = $_POST['nama'];
$alamat         = $_POST['alamat'];
$umur           = $_POST['umur'];
$jenis_kelamin  = $_POST['jenis_kelamin'];

$update = mysqli_query($connect, "UPDATE karyawan SET nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");

if ($update) {
    header('Location: list.php');
} else {
    echo 'Data gagal diupdate!';
}