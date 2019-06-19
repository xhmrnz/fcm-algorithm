<?php
// menggunakan class phpExcelReader
include "excel_reader2.php";

// koneksi ke MySQL
mysqli_connect("localhost","root","");
mysqli_select_db("fcm");

// membaca file excel yang diupload
$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);

// membaca jumlah baris dari data excel
$baris = $data->rowcount($sheet_index=0);

// import data excel mulai baris ke-2
// (karena baris pertama adalah nama kolom)
for ($i=2; $i <= $baris; $i++){
 $nama = $data->val($i, 1);
 $nilai1 = $data->val($i, 2);
 $nilai2 = $data->val($i, 3);


  // setelah data dibaca, sisipkan ke dalam tabel tsukses
  $hasil = mysql_query("INSERT INTO datatest(id,nama,x1,x2) VALUES('','$nama','$nilai1','$nilai2')");
}

echo "Berhasil";
?>
