<?php 
include "koneksi.php";
if($_GET['aksi']=='daftar'){ 
    $nama_mhs  = $_POST['nama_mhs'];
    $npm_mhs = $_POST['npm_mhs'];
    $email_mhs = $_POST['email_mhs'];
    $prodi_mhs  = $_POST['prodi_mhs'];
    $hobi_mhs = $_POST['hobi_mhs'];
    $pass_mhs = md5($_POST['pass_mhs']);
    $hp_mhs  = $_POST['hp_mhs'];
    $pekerjaan_mhs = $_POST['pekerjaan_mhs'];
    $ayah_mhs = $_POST['ayah_mhs'];
    $ibu_mhs  = $_POST['ibu_mhs'];
    $alamat_mhs = $_POST['alamat_mhs'];
    $lulus_mhs = $_POST['lulus_mhs'];
    $status_mhs = $_POST['status_mhs'];
    $read_pass = $_POST['pass_mhs'];
     // Memeriksa apakah NPM sudah ada dalam database
     $query = "SELECT * FROM mhs WHERE npm_mhs = '$npm_mhs'";
     $result = mysqli_query($koneksi, $query);
 
     if (mysqli_num_rows($result) > 0) {
        echo "<script>window.alert('NPM sudah terdaftar. Silakan login atau reset password dengan npm anda');
        window.location=('index.php')</script>";
     }else{
        $allowed =  array('gif','png','jpg','jpeg');
        $filename = $_FILES['foto_mhs']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!in_array($ext,$allowed) ) {
            echo "<script>alert('Jenis file yang diunggah tidak diizinkan. Hanya file PNG, JPG, dan JPEG yang diperbolehkan');</script>";
        }else{
            move_uploaded_file($_FILES['foto_mhs']['tmp_name'], 'foto/foto_calon/'.$npm_mhs.'_'.$filename);
            $file_gambar = $npm_mhs.'_'.$filename;
            mysqli_query($koneksi, "insert into mhs (nama_mhs,
            npm_mhs,
            email_mhs,
            hp_mhs,
            hobi_mhs,
            lulus_mhs,
            foto_mhs,
            prodi_mhs,
            alamat_mhs,
            ayah_mhs,
            ibu_mhs,
            pekerjaan_mhs,
            status_mhs,
            pass_mhs,
            read_pass) 
            values ('$nama_mhs',
            '$npm_mhs',
            '$email_mhs',
            '$hp_mhs',
            '$hobi_mhs',
            '$lulus_mhs',
            '$file_gambar',
            '$prodi_mhs',
            '$alamat_mhs',
            '$ayah_mhs',
            '$ibu_mhs',
            '$pekerjaan_mhs',
            '$status_mhs',
            '$pass_mhs',
            '$read_pass')");
            echo "<script>window.alert('terimakasih data ada berhasil di iputkan');
            window.location=('proses.php?aksi=haldaftar&npm_mhs=$npm_mhs')</script>";
        }
 }  
} 
elseif($_GET['aksi']=='haldaftar'){ 
    $tebaru=mysqli_query($koneksi," SELECT * FROM mhs WHERE npm_mhs=$_GET[npm_mhs] ");
    $t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>

<div class='col-md-6'>
  <!-- Box Comment -->
  <div class='box box-widget'>
    <div class='box-header with-border'>
      <div class='user-block'>
        <img class='img-circle' src='foto/foto_calon/$t[foto_mhs]' alt='user image'>
        <span class='username'><a href='#'>$t[nama_mhs]</a></span>
        <span class='description'>Shared publicly - 7:30 PM Today</span>
      </div><!-- /.user-block -->
      <div class='box-tools'>
        <button class='btn btn-box-tool' data-toggle='tooltip' title='Mark as read'><i class='fa fa-circle-o'></i></button>
        <button class='btn btn-box-tool' data-widget='collapse'><i class='fa fa-minus'></i></button>
        <button class='btn btn-box-tool' data-widget='remove'><i class='fa fa-times'></i></button>
      </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class='box-body'>
      <img class='img-responsive pad' src='foto/foto_calon/$t[foto_mhs]' alt='Photo'>
      <p>$t[lulus_mhs]</p>
    </div><!-- /.box-body -->

  </div><!-- /.box -->
</div><!-- /.col -->

<div class='col-md-6'>
<div class='box box-widget widget-user-2'>
<!-- Add the bg color to the header using any of the bg-* classes -->
<div class='widget-user-header bg-yellow'>
  <h3 class='widget-user-username'>$t[nama_mhs]</h3>
  <h5 class='widget-user-desc'>$t[prodi_mhs]</h5>
</div>
<div class='box-footer no-padding'>
  <ul class='nav nav-stacked'>
    <li><a href='#'>NPM  : $t[npm_mhs] </a></li>
    <li><a href='#'>EMAIL: $t[email_mhs]</a></li>
    <li><a href='#'>NO HP :$t[hp_mhs]</a></li>
    <li><a href='#'>ALAMAT :$t[alamat_mhs]</a></li>
    <li><a href='#'>NAMA IBU :$t[ibu_mhs]</a></li>
    <li><a href='#'>NAMA AYAH :$t[ayah_mhs]</a></li>
    <li></li>
  </ul>
  <a href='proses.php?aksi=editdaftar&npm_mhs=$t[npm_mhs]' class='btn btn-info' >EDIT</a>
</div>
</div><!-- /.widget-user -->
</div><!-- /.col -->

</div><!-- /.row -->
";
} 
elseif($_GET['aksi']=='editdaftar'){ 
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
";
} 
elseif($_GET['aksi']=='proseseditdaftar'){ 
    $npm_mhs = $_POST['npm_mhs'];
    $nama_mhs  = $_POST['nama_mhs'];
    $email_mhs = $_POST['email_mhs'];
    $prodi_mhs  = $_POST['prodi_mhs'];
    $hobi_mhs = $_POST['hobi_mhs'];
    $hp_mhs  = $_POST['hp_mhs'];
    $pekerjaan_mhs = $_POST['pekerjaan_mhs'];
    $ayah_mhs = $_POST['ayah_mhs'];
    $ibu_mhs  = $_POST['ibu_mhs'];
    $alamat_mhs = $_POST['alamat_mhs'];
    $lulus_mhs = $_POST['lulus_mhs'];
    $status_mhs = $_POST['status_mhs'];
    // Memeriksa apakah NPM sudah ada dalam database
    $query = "SELECT * FROM mhs WHERE npm_mhs = '$npm_mhs'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        // Menghapus foto lama jika ada perubahan foto
        if ($_FILES['foto_mhs']['name']) {
            $query_hapus_foto = "SELECT foto_mhs FROM mhs WHERE npm_mhs = '$npm_mhs'";
            $result_hapus_foto = mysqli_query($koneksi, $query_hapus_foto);
            $row_hapus_foto = mysqli_fetch_assoc($result_hapus_foto);
            $foto_lama = $row_hapus_foto['foto_mhs'];
            unlink('foto/foto_calon/' . $foto_lama);

            // Upload foto baru
            $allowed =  array('gif', 'png', 'jpg', 'jpeg');
            $filename = $_FILES['foto_mhs']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if (!in_array($ext, $allowed)) {
                echo "<script>window.alert('Jenis file yang diunggah tidak diizinkan. Hanya file PNG, JPG, dan JPEG yang diperbolehkan');
                window.location=('proses.php?aksi=haldaftar&npm_mhs=$npm_mhs')</script>";
            } else {
                move_uploaded_file($_FILES['foto_mhs']['tmp_name'], 'foto/foto_calon/' . $npm_mhs . '_' . $filename);
                $file_gambar = $npm_mhs . '_' . $filename;

                // Update data mahasiswa termasuk foto
                $query_update = "UPDATE mhs SET nama_mhs = '$nama_mhs', email_mhs = '$email_mhs', prodi_mhs = '$prodi_mhs', hobi_mhs = '$hobi_mhs',  hp_mhs = '$hp_mhs', pekerjaan_mhs = '$pekerjaan_mhs', ayah_mhs = '$ayah_mhs', ibu_mhs = '$ibu_mhs', alamat_mhs = '$alamat_mhs', lulus_mhs = '$lulus_mhs', status_mhs = '$status_mhs', foto_mhs = '$file_gambar' WHERE npm_mhs = '$npm_mhs'";
                $result_update = mysqli_query($koneksi, $query_update);

                if ($result_update) {
                    echo "<script>window.alert('Data berhasil diperbarui');
                    window.location=('proses.php?aksi=haldaftar&npm_mhs=$npm_mhs')</script>";
                } else {
                    echo "<script>window.alert('Terjadi kesalahan dalam memperbarui data. Silakan coba lagi');
                    window.location=('proses.php?aksi=haldaftar&npm_mhs=$npm_mhs')</script>";
                }
            }
        } else {
            // Update data mahasiswa tanpa foto
            $query_update = "UPDATE mhs SET nama_mhs = '$nama_mhs', email_mhs = '$email_mhs', prodi_mhs = '$prodi_mhs', hobi_mhs = '$hobi_mhs',  hp_mhs = '$hp_mhs', pekerjaan_mhs = '$pekerjaan_mhs', ayah_mhs = '$ayah_mhs', ibu_mhs = '$ibu_mhs', alamat_mhs = '$alamat_mhs', lulus_mhs = '$lulus_mhs', status_mhs = '$status_mhs' WHERE npm_mhs = '$npm_mhs'";
            $result_update = mysqli_query($koneksi, $query_update);

            if ($result_update) {
                echo "<script>window.alert('Data berhasil diperbarui');
                window.location=('proses.php?aksi=haldaftar&npm_mhs=$npm_mhs')</script>";
            } else {
                echo "<script>window.alert('Terjadi kesalahan dalam memperbarui data. Silakan coba lagi');
                window.location=('proses.php?aksi=haldaftar&npm_mhs=$npm_mhs')</script>";
            }
        }
    } else {
        echo "<script>window.alert('NPM tidak ditemukan');
        window.location=('index.php')</script>";
    }
}

elseif($_GET['aksi']=='logindaftar'){ 
$npm_mhs = $_POST['npm_mhs'];
$pass_mhs = md5($_POST['pass_mhs']);
	$login = mysqli_query($koneksi, "SELECT * FROM mhs WHERE npm_mhs='$npm_mhs' AND pass_mhs='$pass_mhs'");
	$cek = mysqli_num_rows($login);
	if($cek > 0){
		session_start();
		$data = mysqli_fetch_assoc($login);
		$_SESSION['id_mhs'] = $data['id_mhs'];
		$_SESSION['nama_mhs'] = $data['nama_mhs'];
		$_SESSION['npm_mhs'] = $data['npm_mhs'];
			 echo "<script>window.alert('login berhasil');
        window.location=('proses.php?aksi=haldaftar&npm_mhs=$_SESSION[npm_mhs]')</script>";
	}else{
		 echo "<script>window.alert('password salah');
        window.location=('index.php')</script>";
	}

 
}
elseif($_GET['aksi']=='logoutndaftar'){
session_destroy();
echo "<script>window.alert('ada keluar halaman');
window.location=('index.php')</script>";
}
elseif($_GET['aksi']=='resetmhs'){
  mysqli_query($koneksi,"UPDATE mhs SET status_mhs='new'");
  echo "<script>window.alert('data di reset');
  window.location=('ajak.php')</script>";
}
elseif($_GET['aksi']=='resetmhspg'){
  mysqli_query($koneksi,"UPDATE mhs SET status_mhs='new'");
  echo "<script>window.alert('data di reset');
  window.location=('proses.php?aksi=listmhs')</script>";
}
elseif($_GET['aksi']=='listmhs'){
  $npm_mhs = $_GET['npm_mhs'];
  mysqli_query($koneksi,"UPDATE tampilmhs SET npm_mhs='$npm_mhs' WHERE id_mhs='1'");
  mysqli_query($koneksi,"UPDATE mhs SET status_mhs='udah' WHERE npm_mhs='$npm_mhs'");
  $no=0;
  $sql=mysqli_query($koneksi," SELECT * FROM mhs ORDER BY id_mhs ASC");
echo"<a class='btn btn-info' href='proses.php?aksi=resetmhspg'>
RESET SEMUA DATA
</a><br><br>
<div class='row'>
  <div class='col-md-12'>
      <div class='box box-widget'>";
      while ($t=mysqli_fetch_array($sql)){	
        $no++;
        if($t[status_mhs]=='new'){
 echo" <a href='proses.php?aksi=detailmhs&npm_mhs=$t[npm_mhs]' class='btn btn-success'>|$no| $t[npm_mhs] $t[nama_mhs] </a> "; 
      } else{ 
        echo"<a href='proses.php?aksi=detailmhs&npm_mhs=$t[npm_mhs]' class='btn btn-danger'>|$no| $t[npm_mhs] $t[nama_mhs]</a>"; 
       } 
    }
     echo" </div>
  </div>
</div>";
}
elseif($_GET['aksi']=='detailmhs'){
  $npm_mhs = $_GET['npm_mhs'];
  mysqli_query($koneksi,"UPDATE tampilmhs SET npm_mhs='$npm_mhs' WHERE id_mhs='1'");
  mysqli_query($koneksi,"UPDATE mhs SET status_mhs='udah' WHERE npm_mhs='$npm_mhs'");
  $no=0;
  $sql=mysqli_query($koneksi," SELECT * FROM mhs ORDER BY id_mhs ASC");
echo"<a class='btn btn-info' href='proses.php?aksi=resetmhspg'>
RESET SEMUA DATA
</a><br><br>
<div class='row'>
  <div class='col-md-12'>
      <div class='box box-widget'>";
      while ($t=mysqli_fetch_array($sql)){	
        $no++;
        if($t[status_mhs]=='new'){
 echo" <a href='proses.php?aksi=listmhs&npm_mhs=$t[npm_mhs]' class='btn btn-success'>|$no| $t[npm_mhs] $t[nama_mhs] </a>"; 
      } else{ 
        echo"<a href='proses.php?aksi=listmhs&npm_mhs=$t[npm_mhs]' class='btn btn-danger'>|$no| $t[npm_mhs] $t[nama_mhs]</a>"; 
       } 
    }
     echo" </div>
  </div>
</div>";
}

?>
