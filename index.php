<?php 
session_start();
$tanggal=date("Y");
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
    <?php include"menu.php"; ?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              SLIDE YUDISIUM DAN WISUDA
              <small>Example 2.0</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="callout callout-info">
              <h4>Tip!</h4>
              <p><h1><?php echo"$k_k[isi]";?></h1></p>
            </div>
            
            <!-- START CUSTOM TABS -->
          <h2 class="page-header">FORM REGIST SLIDE FOTO</h2>
          <div class="row">
            <div class="col-md-12">
              <!-- Custom Tabs -->
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Daftar</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Login</a></li>
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
               <form role="form" method='post' enctype='multipart/form-data' action='in.php?aksi=daftar'>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input type="hidden" value="new" class="form-control" name="status_mhs">
                      <input type="text" class="form-control" name="nama_mhs" placeholder="contoh ratnasari, S.Kom" required>
                    </div>
                    <div class="form-group">
                      <label>Npm</label>
                      <input type="text" class="form-control"  name="npm_mhs" placeholder="npm" required>
                    </div>
                    <div class="form-group">
                      <label >email</label>
                      <input type="email" class="form-control" name="email_mhs" placeholder="email anda" required>
                    </div>
                    <div class="form-group">
                      <label >Jurusan</label>
                      <select name="prodi_mhs" class="form-control">
                        <option value="">-Pilih Jurusan-</option>
                        <option value="Sistem informasi">sistem informasi</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Password</label>
                      <input type="password" class="form-control" name="pass_mhs" placeholder="password anda" required>
                    </div>
                    <div class="form-group">
                      <label >No HP/WA</label>
                      <input type="text" class="form-control" name="hp_mhs" placeholder="nomor wa/hp anda" required>
                    </div>
                    <div class="form-group">
                      <label >Hobi</label>
                      <input type="text" class="form-control" name="hobi_mhs" placeholder="isikan hobi anda" required>
                    </div>
                    <div class="form-group">
                      <label >Pekerjaan (*jika sudah bekerja*)</label>
                      <input type="text" class="form-control" name="pekerjaan_mhs">
                    </div>
                    <div class="form-group">
                      <label >Nama ayah</label>
                      <input type="text" class="form-control" name="ayah_mhs" placeholder="isikan nama ayah anda" required>
                    </div>
                    <div class="form-group">
                      <label >Nama Ibu</label>
                      <input type="text" class="form-control" name="ibu_mhs" placeholder="isikan nama ibu anda" required>
                    </div>
                
                    <div class="form-group">
                      <label >alamat</label>
                      <textarea class="form-control" name="alamat_mhs" rows="3" placeholder="isikan alamat lengkap anda" required></textarea>
                    </div>
                    <div class="form-group">
                      <label >Motivasi</label>
                      <textarea class="form-control" name="lulus_mhs" rows="3" placeholder="contoh : menjadi seorang programan yang handal/memulai bisnis" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">PASS FOTO</label>
                      <input type="file" name="foto_mhs" id="exampleInputFile" required>
                      <p class="help-block">MAX 5 MB</p>
                    </div>
              
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
                </form>
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                  <form role="form" method='post' enctype='multipart/form-data' action='in.php?aksi=logindaftar'>
                  <div class="box-body">
                    <div class="form-group">
                      <label>Npm</label>
                      <input type="text" class="form-control"  name="npm_mhs" placeholder="npm" required>
                    </div>
             
                    <div class="form-group">
                      <label >Password</label>
                      <input type="password" class="form-control" name="pass_mhs" placeholder="password anda" required>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                  </div>
                </form>
                  </div><!-- /.tab-pane -->
                
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->

          </div> <!-- /.row -->
          <!-- END CUSTOM TABS -->
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
