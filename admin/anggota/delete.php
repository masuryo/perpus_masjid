<?php
include '../../config/koneksi.php';
$id	= $_GET['id'];

$sql4 = "DELETE FROM anggota WHERE no_identitas = '$id'";
mysqli_query($connect,$sql4);
header('location:index.php');
?>