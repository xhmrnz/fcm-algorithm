<!DOCTYPE html>
<html>
<head>
<!--Chartjs-->
<script src="chartjs/dist/Chart.js"></script>

<title>Proses</title>
<h3>Proses Perhitungan</h3>
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
<?php 
include 'koneksi.php';
if(isset($_POST['proses'])){
    $jcluster = $_POST['cluster'];
    echo "You have selected :" .$jcluster;
}
?>
<table>
<tr>
<th>Data Ke</th>
<th colspan="2"></th>
<th></th>
<th colspan="2">Dataset</th>
<th colspan="3">Uik</th>
<th></th>
<th colspan="3">Uik</th>
</tr>
    <tr>
        <th>No</th>
        <th>C1</th>
        <th>C2</th>
        <th>Derajat Keanggotaan C1</th>
        <th>Xi1</th>
        <th>Xi2</th>
        <th>J</th>
        <th>K</th>
        <th>L</th>
        <th>Derajat Keanggotaan C2</th>
        <th>N</th>
        <th>O</th>
        <th>P</th>
        <th>L1</th>
        <th>L2</th>
        <th>L1+L2</th>
        <th>10 14 <br> L1</th>
        <th>10 14 <br> L2</th>
        <th>LT=L1+L2</th>
        <th>L1/L2</th>
        <th>L2/LT</th>
        <th>C1</th>
        <th>C2</th>        
    </tr>

<?php

session_start();
$z      = 5;
$j_sum  = 0;
$k_sum  = 0;
$l_sum  = 0;
$kj_sum = 0;
$lj_sum = 0;
$n_sum  = 0;
$o_sum  = 0;
$p_sum  = 0;
$minc1  = 0;
$maxc1  = 0.33333333333333333333333333333333;
$minc2  = 0.33333333333333333333333333333333;
$maxc2  = 0.66666666666666666666666666666666;
$minc3  = 0.66666666666666666666666666666666;
$maxc2  = 0.99999999999999999999999999999999;

$no     = 1;
$data = mysqli_query($koneksi,"SELECT c . * , p . *
FROM bildom c, dataset p
WHERE c.id = p.id"); //menggabungkan data dari 2 table database
while($u = mysqli_fetch_array($data)){
    //Rumus Algoritma (Looping)
    $id     = $u['id'];
    $u1     = $u['u1'];
    $u2     = $u['u2'];
    $x1     = $u['x1'];
    $x2     = $u['x2'];
    $dkc1   = $u1 * $u1;
    $dkc2   = $u2 * $u2;
    $j      = $dkc1 * $dkc1;
    $k      = $j * $x1;
    $l      = $j * $x2;
    $j_sum += $j;
    $k_sum += $k;
    $l_sum += $l;
    $kj_sum = $k_sum / $j_sum;
    $lj_sum = $l_sum / $j_sum;
    $n      = $dkc2 * $dkc2;
    $o      = $n * $x1;
    $p      = $n * $x2;
    $n_sum += $n;
    $o_sum += $o;
    $p_sum += $p;
    $on_sum = $o_sum / $n_sum;
    $pn_sum = $p_sum / $n_sum;
    // Perhitungan pada row L1
    $q1     = $x1 - $u['kj_sum']; // $u dibuat mengambil data dari table agar tidak terjadi looping
    $qq1    = $q1 * $q1;
    $q2     = $x2 - $u['lj_sum']; 
    $qq2    = $q2 * $q2;
    $qq3    = $qq2 * $j; //perhitungan akhir pada L1
    $qqf    = $qq1 + $qq3;
    // perhitungan pada row L2
    $r1     = $x1 - $u['on_sum'];
    $rr1    = $r1 * $r1;
    $r2     = $x2 - $u['pn_sum'];
    $rr2    = $r2 * $r2;
    $rr3    = $rr2 * $n;
    $rrf    = $rr1 + $rr3;
    // L1 + L2
    $s      = $qqf + $rrf;
    //
    $tl1      = $qq1 + $qq2;
    $ul2      = $rr1 + $rr2;
    $v        = $tl1 + $ul2;
    $w        = $tl1 / $v;
    $x        = $ul2 / $v;

    //echo number_format(0.3,6,".",",");
    echo $maxc1;

        ?>
        <tr>
            <td><?= $no++   ?></td>
            <td><?= $u1;    ?></td>
            <td><?= $u2;    ?></td>
            <td><?= $dkc1;  ?></td>
            <td><?= $x1;    ?></td>
            <td><?= $x2;    ?></td>
            <td><?= $j;     ?></td>
            <td><?= $k;     ?></td>
            <td><?= $l;     ?></td>
            <td><?= $dkc2;  ?></td>
            <td><?= $n;     ?></td>
            <td><?= $o;     ?></td>
            <td><?= $p;     ?></td>
            <td><?= $qqf;   ?></td>
            <td><?= $rrf;   ?></td>
            <td><?= $s;     ?></td>
            <td><?= $tl1;   ?></td>
            <td><?= $ul2;   ?></td>
            <td><?= $v;     ?></td>
            <td><?= $w;     ?></td>
            <td><?= $x;     ?></td>
            <td>
            <?php

            if ($jcluster == "2")
            {
                
                if ($w >= number_format(0.5,6,".",",")) //pembagian 2 cluster berdasarkan 0,5
                {
                    $sql = "UPDATE dataset SET c='c1', nilai_c1='$w' WHERE id='$id'";
                    $query = mysqli_query($koneksi, $sql);
                    echo "X"; 
                }
                else if ($w <= number_format(0.5,6,".",","))
                        $sql2 = "UPDATE dataset SET c='c2', nilai_c2='$w' WHERE id='$id'";
                        $query2 = mysqli_query($koneksi, $sql2);
            }
            // 3 cluster
            //if ($jcluster == "c3")
            //{
            //    if (($minc1 <= $w) && ($w <= $maxc1))
            //    {
            //        echo "X";
            //    }
            //}
            ?></td> 
            <td>
            <?php
            if ($jcluster == "2")
            {
                if ($x >= number_format(0.5,6,".",","))
                {
                    echo "X";
                }
            }
            // cluster 3
            //if ($jcluster == "c3")
            //{
            //    if (($minc2 <= $x) && ($x <= $maxc2))
            //    {
            //        echo "X";
            //    }
            //}
            ?></td>
        </tr>
    <?php
    }
?>
        <tr>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= $j_sum; ?>
            <td><?= $k_sum; ?>
            <td><?= $l_sum; ?>
            <td><?= null; ?>
            <td><?= $n_sum; ?>
            <td><?= $o_sum; ?>
            <td><?= $p_sum; ?>
        <tr>
        <tr>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= number_format( $kj_sum,6,".",",") ?>
            <td><?= number_format( $lj_sum,6,".",",") ?>
            <td><?= null; ?>
            <td><?= null; ?>
            <td><?= number_format( $on_sum,6,".",",") ?>
            <td><?= number_format( $pn_sum,6,".",",") ?>
        <tr> 
        <?php //menyimpan nilai penjumlahan ke table(agar tidak terjadi looping)
        $sql = "UPDATE bildom SET kj_sum='$kj_sum', lj_sum='$lj_sum', on_sum='$on_sum', pn_sum='$pn_sum'";
        $query = mysqli_query($koneksi, $sql);
        ?>
</table>
<br/>
<table>
<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Cluster</th>
    </tr>
    <?php
$no     = 1;
$sql = "SELECT * FROM dataset";
$query = mysqli_query($koneksi, $sql);
while($u = mysqli_fetch_array($query))
{
    //hasil cluster
    $c      = $u['c'];
    $c1     = $u['nilai_c1'];
    $c2     = $u['nilai_c2'];
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td> a </td>
        <td><?= $c    ?></td>
    </tr>
    <?php } ?>
    </table>
    <?php 
    $sql = "SELECT * FROM dataset";
    $query = mysqli_query($koneksi, $sql);
    while($u = mysqli_fetch_array($query))
    {
        $c      = $u['c'];
        $c1     = $u['nilai_c1'];
        $c2     = $u['nilai_c2'];   
?>
<div class="chart-container" style="position: relative; height:20vh; width:40vw">
    <canvas id="myChart"></canvas>
</div>
<script>
var ctx = document.getElementById('myChart');

var myChart = new Chart(ctx, {
    type: 'scatter',
    data: {
        datasets: [{
            label: 'Scatter Dataset',
            pointBackgroundColor: ['yellow','blue','red','green'],
            data: [{
                x: -1,
                y: 0
            }, {
                x: 0,
                y: 1
            }, {
                x: 1,
                y: -1
            }, {
                x: <?= $c1; ?>,
                y: 1
            }]
        }]
    },
    options: {
        scales: {
            xAxes: [{
                type: 'linear',
                position: 'bottom'
            }]
        }
    }
});
</script>
    <?php } ?>
</body>
</html>