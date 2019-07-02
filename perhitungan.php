<!DOCTYPE html>
<h2>Hasil Perhitungan</h2>
<script>
		window.print();
	</script>
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

                  <!-- CUSTOM CONTENT -->

<?php 
include 'koneksi.php';
if(isset($_POST['proses'])){
    $jcluster = $_POST['cluster'];
    //echo "You have selected :" .$jcluster;
}
?>

Data Siswa, Prestasi dan Nilai Rata2,<br/>
Yang akan dihitung Keanggotaannya dalam Cluster.<br/>
    <table>
    <thead>
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Nama</th>
      <th colspan="2">Keanggotaan</th>
    </thead>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "SELECT * FROM dataset");
    while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $d['nama'] ?></td>
      <td><?= $d['c'] ?></td>
    </tr>
        <?php } ?>
        </table>
        <br/>
        <br/>

Bilangan Random :                
<table>
<?php
$z      = 5;
$j_sum  = 0;
$k_sum  = 0;
$l_sum  = 0;
$kj_sum = 0;
$lj_sum = 0;
$n_sum  = 0;
$o_sum  = 0;
$p_sum  = 0;
$on_sum = 0;
$pn_sum = 0;
$minc1  = 0;
$maxc1  = 0.33333333333333333333333333333333;
$minc2  = 0.33333333333333333333333333333333;
$maxc2  = 0.66666666666666666666666666666666;
$minc3  = 0.66666666666666666666666666666666;
$maxc2  = 0.99999999999999999999999999999999;
$no     = 1;
$data = mysqli_query($koneksi,"SELECT c . * , p . *
FROM bildom c, datatest p
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


    //echo number_format(0.3,6,".",",");
    //echo $maxc1;

        ?>
        
        <tr>
            <td><?= $u1;    ?></td>
            <td><?= $u2;    ?></td>
            </td>
            </td>
        </tr>
            <?php
            }
            ?>
            </table>

            <br/>
            Derajat keanggotaan C1 :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
                $id     = $u['id'];
                $u1     = $u['u1'];
                $u2     = $u['u2'];
                $x1     = $u['x1'];
                $x2     = $u['x2'];
                $dkc1   = $u1 * $u1;
            ?>
            <table>
            <tr>
            <td><?= $dkc1;    ?></td>
            </td>

            <?php }
            ?>
            </table>
            
            <br/>
            Data yang akan di cluster :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
                $x1     = $u['x1'];
                $x2     = $u['x2'];
            ?>
            <table>
            <tr>
            <td><?= $x1;    ?></td>
            <td><?= $x2;    ?></td>
            </td>

            <?php }
            ?>
            </table>

            <br/>
            Pusat penghitung Cluster :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>
            
            <table>
            <col width="80">
            <col width="80">
            <col width="100">
            <td><?= $j;     ?></td>
            <td><?= $k;     ?></td>
            <td><?= $l;     ?></td>
            <?php }
            ?>
            </table>
            <br/>
            Total : <?= $j_sum ?>
            <br/>
            <br/>
            Pusat Cluster :
            <table>
            <td><?= number_format( $kj_sum,6,".",",") ?>
            <td><?= number_format( $lj_sum,6,".",",") ?>
            </table>

            <br/>
            Derajat keanggotaan C2 :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
                $id     = $u['id'];
                $u1     = $u['u1'];
                $u2     = $u['u2'];
                $x1     = $u['x1'];
                $x2     = $u['x2'];
                $dkc1   = $u1 * $u1;
                $dkc2   = $u2 * $u2;
            ?>
            <table>
            <tr>
            <td><?= $dkc2;    ?></td>
            </td>

            <?php }
            ?>
            </table>

            <br/>
            Pusat penghitung Cluster :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>
            
            <table>
            <col width="80">
            <col width="80">
            <col width="100">
            <td><?= $j;     ?></td>
            <td><?= $k;     ?></td>
            <td><?= $l;     ?></td>
            <?php }
            ?>
            </table>
            <br/>
            Total Uik    : <?= $j_sum ?>
            <br/>
            Total Uik X1 : <?= $k_sum ?>
            <br/>
            Total Uik X2 : <?= $l_sum ?>
            <br/>
            <br/>
            Pusat Cluster :
            <table>
            <td><?= number_format( $kj_sum,6,".",",") ?>
            <td><?= number_format( $lj_sum,6,".",",") ?>
            </table>

            <br/>
            Pusat penghitung Cluster :
            <?php
            $no   = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>
            
            <table>
            <col width="80">
            <col width="80">
            <col width="100">
            <td><?= $n;     ?></td>
            <td><?= $o;     ?></td>
            <td><?= $p;     ?></td>
            <?php }
            ?>
            </table>
            <br/>
            Total Uik    : <?= $n_sum ?>
            <br/>
            Total Uik X1 : <?= $o_sum ?>
            <br/>
            Total Uik X2 : <?= $p_sum ?>
            <br/>
            <br/>
            Pusat Cluster :
            <table>
            <td><?= number_format( $on_sum,6,".",",") ?>
            <td><?= number_format( $pn_sum,6,".",",") ?>
            </table>

            <br/>
            L :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>

            <table>
            <col width="150">
            <col width="150">
            <td><?= $qqf;   ?></td>
            <td><?= $rrf;   ?></td>
            </table>
            <?php }
            ?>

            <br/>
            Total L :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
            // Total
            $s      = $qqf + $rrf;
                
            ?>

            <table>
            <col width="150">
            <td><?= $s;   ?></td>
            </table>
            <?php }
            ?>

        <?php 
          $add=mysqli_query($koneksi,'SELECT SUM(pn_sum) from `bildom`');
          while($row1=mysqli_fetch_array($add))
          {
            $mark = $row1['SUM(pn_sum)'];
         ?>
         <br/>
         Fungsi Objektif :<?= $mark   ?>
          <?php }
          ?>
          <br/>

            <br/>
            LT :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>

            <table>
            <col width="150">
            <col width="150">
            <td><?= $tl1;   ?></td>
            <td><?= $ul2;   ?></td>
            </table>
            <?php }
            ?>

            <br/>
            Total LT :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>

            <table>
            <col width="160">
            <td><?= $v;   ?></td>
            </table>
            <?php }
            ?>

            <br/>
            Keanggotaan baru :
            <?php
            $no     = 1;
            $data = mysqli_query($koneksi,"SELECT c . * , p . *
            FROM bildom c, datatest p
            WHERE c.id = p.id"); //menggabungkan data dari 2 table database
            while($u = mysqli_fetch_array($data)){
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
                
            ?>

            <table>
            <col width="160">
            <td><?= $w;   ?></td>
            <td><?= $x;   ?></td>
            </table>
            <?php }
            ?>
            <br/>
            <br/>
            Hasil Didapatkan,
            <br/>
            Keanggotaan Cluster Akhir :
            <table>
            <thead>
            <tr>
              <th rowspan="2">No</th>
              <th rowspan="2">Nama</th>
              <th colspan="2">Keanggotaan</th>
            </thead>
            <?php
            include 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM dataset");
            while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $d['nama'] ?></td>
              <td><?= $d['c'] ?></td>
            </tr>
                <?php } ?>
                </table>
            
