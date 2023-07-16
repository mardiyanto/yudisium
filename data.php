<?php 
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
<?php
   $tebaru=mysqli_query($koneksi," SELECT * FROM mhs WHERE npm_mhs=$_GET[npm_mhs] ");
    $t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
<div class='col-md-12'>
<div class='box box-widget'>
<form role='form' method='post' enctype='multipart/form-data' action='in.php?aksi=proseseditdaftar'>
<div class='box-body'>
  <div class='form-group'>
    <label for='exampleInputEmail1'>Nama</label>
    <input type='hidden' value='$t[status_mhs]' class='form-control' name='status_mhs'>
    <input type='text' class='form-control' value='$t[nama_mhs]' name='nama_mhs' placeholder='contoh ratnasari, S.Kom' required>
  </div>
  <div class='form-group'>
    <label>Npm</label>
    <input type='text' class='form-control' value='$t[npm_mhs]' name='npm_mhs' placeholder='npm' required>
  </div>
  <div class='form-group'>
    <label >email</label>
    <input type='email' class='form-control' value='$t[email_mhs]'  name='email_mhs' placeholder='email anda' required>
  </div>
  <div class='form-group'>
    <label >Jurusan</label>
    <select name='prodi_mhs' class='form-control'>
      <option value='$t[prodi_mhs]'>$t[prodi_mhs]</option>
      <option value='Sistem informasi'>sistem informasi</option>
      <option value='Manajemen Informatika'>Manajemen Informatika</option>
    </select>
  </div>
  <div class='form-group'>
    <label >No HP/WA</label>
    <input type='text' class='form-control' value='$t[hp_mhs]' name='hp_mhs' placeholder='nomor wa/hp anda' required>
  </div>
  <div class='form-group'>
    <label >Hobi</label>
    <input type='text' class='form-control' value='$t[hobi_mhs]' name='hobi_mhs' placeholder='isikan hobi anda' required>
  </div>
  <div class='form-group'>
    <label >Pekerjaan (*jika sudah bekerja*)</label>
    <input type='text' class='form-control' value='$t[pekerjaan_mhs]' name='pekerjaan_mhs'>
  </div>
  <div class='form-group'>
    <label >Nama ayah</label>
    <input type='text' class='form-control' value='$t[ayah_mhs]' name='ayah_mhs' placeholder='isikan nama ayah anda' required>
  </div>
  <div class='form-group'>
    <label >Nama Ibu</label>
    <input type='text' class='form-control' value='$t[ibu_mhs]' name='ibu_mhs' placeholder='isikan nama ibu anda' required>
  </div>

  <div class='form-group'>
    <label >alamat</label>
    <textarea class='form-control' name='alamat_mhs' rows='3' >$t[alamat_mhs]</textarea> 
  </div>
  <div class='form-group'>
    <label >Motivasi</label>
    <textarea class='form-control'  name='lulus_mhs' rows='3'>$t[lulus_mhs]</textarea>
  </div>
  <div class='form-group'>
    <label for='exampleInputFile'>PASS FOTO</label>
    <input type='file' name='foto_mhs' id='exampleInputFile'></br>";
    if ($t['foto_mhs'] != "") {
        echo "<img src='foto/foto_calon/$t[foto_mhs]' alt='user image' width='100'>";
    } else {
        echo "<p class='help-block'>ANDA BELUM ADA FOTO</p>";
    }
    echo"
  </div>

</div><!-- /.box-body -->

<div class='box-footer'>
  <button type='submit' class='btn btn-primary'>Kirim</button>
</div>
</form>
</div><!-- /.box -->
</div><!-- /.col -->
</div><!-- /.row -->
"; ?>
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