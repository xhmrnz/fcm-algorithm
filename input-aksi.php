<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$x1 = $_POST['x1'];
$x2 = $_POST['x2'];
 
$sql = "INSERT INTO dataset (id, nama, x1, x2) VALUES('','$nama','$x1','$x2')";
$query = mysqli_query($koneksi, $sql);
 
//header("location:index.php?pesan=input");
header("location:databs.php");
?>