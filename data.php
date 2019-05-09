<!DOCTYPE html>
<html>
<head>
<style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Perhitungan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Dataset</h2>
<table>
<tr>
<th rowspan="2">No</th>
<th rowspan="2">Nama</th>
<th colspan="2">Kriteria</th>
    </tr>
    <tr>
        <th>Nilai 1</th>
        <th>Nilai 2</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM dataset");
    while($d = mysqli_fetch_array($data)){
            ?>
    <tr>
        <td><?= $no++ ?></td>
        <td>a</td>
        <td><?= $d['x1'] ?></td>
        <td><?= $d['x2'] ?></td>
    </tr>
    <?php } ?>
</table>

    <br/>
    <br/>
    <br/>
    <table>
    <form action="proses.php" method="post">
      <tr>
      <td>Jumlah Cluster Dicari</td>
				<td><select name="cluster">
        <option value="1" >1</option>
        <option value="2" >2</option>
        <option value="3" >3</option>
        </select></td>
			</tr>
			<tr>
				<td>Maksimum Iterasi</td>
				<td><input type="int" name="iterasi" value="100" readonly></td>
      </tr>
      <tr>
				<td>Nilai Pembobot(Pangkat)</td>
				<td><input type="int" name="pangkat" value="2" readonly></td>
      </tr>
      <tr>
				<td>Nilai Error Terkecil</td>
				<td><input type="int" name="error" value="0.000001" readonly></td>
      </tr>
      <tr>
				<td>
            <input type="submit" name="proses" value="Proses">
          </form>
        </td>
		  </tr>
</body>
</html>