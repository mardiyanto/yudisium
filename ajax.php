<?php
  include "koneksi.php";
  include "class_paging.php";
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
        $tebaru = mysqli_query($koneksi, "SELECT * FROM mhs WHERE status_mhs='new'  LIMIT 5");
        while ($t = mysqli_fetch_array($tebaru)) {
            echo "<li><a href='#' class='pagination-link' data-npm='" . $t['npm_mhs'] . "'>" . $t['npm_mhs'] . "(" . $t['nama_mhs'] . ")</a></li>";
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
<?php 
  $p      = new Paging;
  $batas  = 1;
  $posisi = $p->cariPosisi($batas); 
	$mhs3=mysqli_query($koneksi," SELECT * FROM mhs  ORDER BY id_mhs DESC LIMIT $posisi,$batas");
	$jmldata     = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM mhs ORDER BY id_mhs DESC"));
  $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
  $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
	while ($row=mysqli_fetch_array($mhs3)){  
    echo "
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box Comment -->
            <div class='box box-widget'>
                <div class='box-header with-border'>
                    <div class='user-block'>
                        <img class='img-circle' src='foto/foto_calon/" . $row['foto_mhs'] . "' alt='user image'>
                        <span class='username'><a href='#'>" . $row['nama_mhs'] . "</a></span>
                        <span class='description'>Shared publicly - 7:30 PM Today</span>
                    </div><!-- /.user-block -->
                    <div class='box-tools'>
                        <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
                        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
                        <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
                    </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class='card mb-3 mt-3 mr-2'>
                  <div class='row no-gutters'>
                    <div class='col-md-6'>
                    <div class='container'><br>
                      <img class='img-thumbnail' width='350' height='450' src='foto/foto_calon/" . $row['foto_mhs'] . "' alt=''>
                     </div>
                    </div>
                    <div class='col-md-6'>
                      <div class='card-body'>
                            <h2>" . $row['nama_mhs'] . "</h2>
                            <h3>" . $row['prodi_mhs'] . "</h3>
                        <table class='table'>
                          <tr>
                            <td>NPM</td>
                            <td>" . $row['npm_mhs'] . "</td>
                          </tr>
                          <tr>
                            <td>HOBI</td>
                            <td>" . $row['hobi_mhs'] . "</td>
                          </tr>
                          
                          <tr>
                          <td>NAMA IBU</td>
                          <td>" . $row['ibu_mhs'] . "</td>
                        </tr>
                          <tr>
                            <td>NAMA AYAH</td>
                            <td>" . $row['ayah_mhs'] . "</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class='box-body'>
                    
                
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        <div class='col-md-12'>
            <div class='box box-widget widget-user-2'>
                <!-- Add the bg color to the header using any of the bg-* classes -->
                
                <div class='box-footer no-padding'>
                

                </div>
            </div><!-- /.widget-user -->
        </div><!-- /.col -->
    </div><!-- /.row -->
    ";
  	   }

echo"<div class='box-tools'>
<ul class='pagination pagination-lg'>
$linkHalaman 
</ul>
</div>"; ?>
         
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
    
</body>
</html>