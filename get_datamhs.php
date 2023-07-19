<?php
$bg_array = array("#CEED9D","#ECED9D","#EDCF9D","#EC9CA7","#ED9DD0","#EE9DE2","#D69DEC","#9E9CEC");
$bg = array_rand($bg_array,1);
  include "koneksi.php";
  include "class_paging.php";
?>

<?php 
$tebaru=mysqli_query($koneksi," SELECT * FROM tampilmhs WHERE id_mhs='1'");
$t=mysqli_fetch_array($tebaru);

        $sql=mysqli_query($koneksi," SELECT * FROM mhs  WHERE npm_mhs='$t[npm_mhs]'");
        $row=mysqli_fetch_array($sql); 
    echo "
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box Comment -->
            <div class='box box-widget'>
                <div class='box-header with-border'>
                    <div class='user-block'>
                        <img class='img-circle' src='foto/foto_calon/" . $row['foto_mhs'] . "' alt='user image'>
                        <span class='username' ><a style='background-color:$bg_array[$bg]'>" . $row['nama_mhs'] . "</a></span>
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
?>
 