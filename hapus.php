<?php 
include 'koneksi.php';
$id = $_GET['id'];
$del1 = mysqli_query($koneksi, "DELETE FROM dataset WHERE id='$id'")or die(mysql_error());
$del2 = mysqli_query($koneksi, "DELETE FROM datatest WHERE id='$id'")or die(mysql_error());
if(mysqli_query){
header("location:databs.php?pesan=hapus");
}
?>