<?php 

include('connection.php');

$id = $_GET['id'];

$delete = mysqli_query($connect, "DELETE FROM karyawan WHERE id='$id'");

if ($delete) {
    header('Location: list.php');
} else {
    echo 'Delete data gagal';
}