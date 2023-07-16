<?php
  include '../koneksi.php';
  date_default_timezone_set('Asia/Jakarta');
  session_start();
  if($_SESSION['status'] != "administrator_logedin"){
    header("location:../login.php?alert=belum_login");
  }
///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='hapusmhs'){
$data = mysqli_query($koneksi, "select * from mhs where id_mhs='$_GET[id_mhs]'");
$d = mysqli_fetch_assoc($data);
$foto = $d['foto_mhs'];
unlink("../foto/foto_calon/$foto");
mysqli_query($koneksi,"DELETE FROM mhs  WHERE id_mhs='$_GET[id_mhs]'");
echo "<script>window.location=('index.php?aksi=mhs')</script>";
}

elseif($_GET['aksi']=='hapusadmin'){
$data = mysqli_query($koneksi, "select * from user where user_id='$_GET[user_id]'");
$d = mysqli_fetch_assoc($data);
$foto = $d['user_foto'];
unlink("../gambar/user/$foto");
mysqli_query($koneksi, "delete from user where user_id='$_GET[user_id]'");
echo "<script>window.location=('index.php?aksi=admin')</script>";
}
elseif($_GET['aksi']=='hapusgalud'){
  mysqli_query($koneksi,"DELETE FROM galud  WHERE id_galud='$_GET[id_galud]'");
  echo "<script>window.location=('index.php?aksi=galud&galud=$_POST[status_galud]')</script>";
}
?>