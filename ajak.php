<?php
$tanggal = date("Y");
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Top Navigation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="sys/bootstrap/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="sys/bootstrap/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="sys/bootstrap/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
    <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="ajak.php" class="navbar-brand"><b>Admin</b>LTE</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
              <?php
$limit = 3; // Jumlah data yang ditampilkan per halaman
$offset = isset($_GET['offset']) ? $_GET['offset'] : 0; // Mengambil offset dari parameter GET
$prevOffset = $offset - $limit; // Hitung offset untuk data sebelumnya

if ($prevOffset >= 0) {
    echo "<li><a href='?offset=$prevOffset'>Sebelumnya</a></li>";
}
$query = "SELECT * FROM mhs WHERE status_mhs = 'new' LIMIT $limit OFFSET $offset";
$result = mysqli_query($koneksi, $query);

while ($t = mysqli_fetch_array($result)) {
    echo "<li><a href='#' class='pagination-link' data-npm='" . $t['npm_mhs'] . "'>" . $t['npm_mhs'] . "(" . $t['nama_mhs'] . ")</a></li>";
}
?>


<!-- Tampilkan tombol Next -->
<?php
$nextOffset = $offset + $limit; // Hitung offset untuk data selanjutnya
$queryCount = "SELECT COUNT(*) as total FROM mhs WHERE status_mhs = 'new'";
$resultCount = mysqli_query($koneksi, $queryCount);
$rowCount = mysqli_fetch_assoc($resultCount);
$totalData = $rowCount['total'];

if ($nextOffset < $totalData) {
    echo "<li><a href='?offset=$nextOffset'>Next</a></li>";
}
?>


              </ul>

            </div><!-- /.navbar-collapse -->
           
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1 class="text-center">
              PESERTA YUDISIUM
            </h1>
            
          </section>

          <!-- Main content -->
          <section class="content">
          <a class='btn btn-info' href='proses.php?aksi=resetmhs'>
                               RESET SEMUA DATA
                            </a><br>

<div id="data-mahasiswa">
    <!-- Tempat untuk menampilkan data mahasiswa -->
</div>

</section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
      <?php include"bawah.php"; ?>
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="sys/bootstrap/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="sys/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="sys/bootstrap/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="sys/bootstrap/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="sys/bootstrap/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="sys/bootstrap/dist/js/demo.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
        // Mengatur event click untuk setiap tautan pagination
        $(document).on('click', '.pagination-link', function(e) {
            e.preventDefault();
            var npm_mhs = $(this).data("npm");

            // Memuat data mahasiswa berdasarkan npm_mhs menggunakan AJAX
            $.ajax({
                url: "data_mahasiswa.php",
                type: "GET",
                data: { npm_mhs: npm_mhs },
                success: function(data) {
                    // Memperbarui konten dengan data mahasiswa
                    $("#data-mahasiswa").html(data);
                },
                error: function() {
                    alert("Terjadi kesalahan dalam memuat data mahasiswa.");
                }
            });
        });
    });
</script>

</body>
</html>