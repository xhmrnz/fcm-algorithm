<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Proses Perhitungan</title>

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
  <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="bootstrap/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="bootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!-- Semantic here -->
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="semantic/semantic.min.js"></script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="databs.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dashboard</div>
      </a>


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Charts 
      <li class="nav-item">
        <a class="nav-link" href="databs.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data</span></a>
      </li>
      -->

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="databs.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <a href="excel.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
          <i class="fas fa-sm text-white-50">
          </i>
          Export to Excel
          </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                  <!-- CUSTOM CONTENT -->
                  <?php 
include 'koneksi.php';
if(isset($_POST['proses'])){
    $jcluster = $_POST['cluster'];
    echo "You have selected :" .$jcluster;
}
?>


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
    //echo $maxc1;

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
<!-- Other Table -->
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
    $nama  = $u['nama'];
    $c     = $u['c'];
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $nama ?> </td>
        <td><?= $c    ?></td>
    </tr>
<?php } ?>
</table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="bootstrap/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="bootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="bootstrap/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="bootstrap/js/demo/datatables-demo.js"></script>

</body>

</html>
