<?php 
$tanggal=date("Y");
include "koneksi.php";
// Memeriksa apakah parameter npm_mhs telah diterima
if (isset($_GET['npm_mhs'])) {
    $npm_mhs = $_GET['npm_mhs'];
    mysqli_query($koneksi,"UPDATE tampilmhs SET npm_mhs='$npm_mhs' WHERE id_mhs='1'");
    mysqli_query($koneksi,"UPDATE mhs SET status_mhs='udah' WHERE npm_mhs='$npm_mhs'");
    // Query untuk mendapatkan data mahasiswa berdasarkan npm_mhs
    $query = "SELECT * FROM mhs WHERE npm_mhs = '$npm_mhs'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Tampilkan data mahasiswa dalam format HTML
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
    } else {
        echo "Data mahasiswa tidak ditemukan.";
    }
}
?>
