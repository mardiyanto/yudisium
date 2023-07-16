<?php 
$tanggal=date("Y");
include "koneksi.php";
// Memeriksa apakah parameter npm_mhs telah diterima
if (isset($_GET['npm_mhs'])) {
    $npm_mhs = $_GET['npm_mhs'];
    mysqli_query($koneksi,"UPDATE mhs SET status_mhs='udah' WHERE npm_mhs='$npm_mhs'");
    // Query untuk mendapatkan data mahasiswa berdasarkan npm_mhs
    $query = "SELECT * FROM mhs WHERE npm_mhs = '$npm_mhs'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Tampilkan data mahasiswa dalam format HTML
        echo "
        <div class='row'>
            <div class='col-md-6'>
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
                    <div class='box-body'>
                        <img class='img-responsive pad' src='foto/foto_calon/" . $row['foto_mhs'] . "' alt='Photo'>
                        <p>" . $row['lulus_mhs'] . "</p>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class='col-md-6'>
                <div class='box box-widget widget-user-2'>
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class='widget-user-header bg-yellow'>
                        <h3 class='widget-user-username'>" . $row['nama_mhs'] . "</h3>
                        <h5 class='widget-user-desc'>" . $row['prodi_mhs'] . "</h5>
                    </div>
                    <div class='box-footer no-padding'>
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
  <td>SETALAH WISUDA</td>
  <td>" . $row['lulus_mhs'] . "</td>
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
                </div><!-- /.widget-user -->
            </div><!-- /.col -->
        </div><!-- /.row -->
        ";
    } else {
        echo "Data mahasiswa tidak ditemukan.";
    }
}
?>
