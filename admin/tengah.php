<?php
///////////////////////////lihat/////////////////////////////////////////////
if($_GET['aksi']=='home'){
echo"
 <div class='row'>
                   <div class='col-lg-12'>
			<div class='panel panel-default'>
                            <div class='panel-heading'>
                           Sambutan
                            </div>
                            <div class='panel-body'>                         
				<p>Selamat Datang Di halaman Admin, Silahkan Pilih menu untuk pengaturan data yang di butuhkan guna mendapatkan hasil yang maksimal sesuai keinginan.</p>
                            </div>
			</div>
                   </div>
</div>";
}
elseif($_GET['aksi']=='ikon'){
include "../ikon.php";
}

elseif($_GET['aksi']=='profil'){
echo"			
	<div class='row'>
	 <div class='col-xs-12'>
              <div class='panel panel-primary'>
			    <div class='box-header'>
				   <h3 class='box-title'>INFORMASI PROFIL</h3>
                </div>
                <div class='box-header'>
				</div>
                             <div class='box-body'>
		<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>
	 <thead> 
	 <tr>
                                            <th>No</th>
                                            <th>Profil</th>
                                        </tr>
                                    </thead>
				   <tbody> ";
				$no=0;   
				$tebaru=mysqli_query($koneksi," SELECT * FROM profil WHERE id_profil ='1'");
while ($t=mysqli_fetch_array($tebaru)){
                $isi_berita = strip_tags($t['isi']); 
                $isi = substr($isi_berita,0,70); 
                $isi = substr($isi_berita,0,strrpos($isi," ")); 
$no++;    
                                    echo"
                                        <tr>
                                            <td>$no</td>
                                            <td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[nama]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editprofil&id_p=$t[id_profil]'>edit</a></li>
						<li><a href='index.php?aksi=viewprofil&id_p=$t[id_profil]'>view</a></li>
                        </ul>
                    </div></td>
                                       </tr>                                      
                                    ";
}
                                echo"</tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
               </div>	
	";
}



/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($_GET['aksi']=='editprofil'){
$tebaru=mysqli_query($koneksi," SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT PROFIL
                        </div>
                        <div class='panel-body'>
<form id='form1'  method='post' enctype='multipart/form-data' action='master/profil.php?act=editpro&id_p=$_GET[id_p]'>
       <div class='form-grup'>
        <label>Nama Aplikasi</label>
        <input type='text' class='form-control' value='$t[nama_app]' name='nama_app'/><br>
        <label>Nama</label>
        <input type='text' class='form-control' value='$t[nama]' name='jd'/><br>
		<label>Alias</label>
        <input type='text' class='form-control' value='$t[alias]' name='alias'/><br>
		<label>Tahun</label>
        <input type='text' class='form-control' value='$t[tahun]' name='tahun'/><br>
		<label>Alamat</label>
        <input type='text' class='form-control' value='$t[alamat]' name='alamat'/><br>
        <label>Gambar Begroud Aplikasi</label>
        <input type='file' class='smallInput'  name='gambar'/><br>
		<label>Isi</label>
        <textarea id='text-ckeditor' class='form-control' name='isi'>$t[isi]</textarea></br>
		<script>CKEDITOR.replace('text-ckeditor');</script>
    	<div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form></div> </div></div> </div>
";
}



elseif($_GET['aksi']=='viewprofil'){
$tebaru=mysqli_query($koneksi," SELECT * FROM profil WHERE id_profil=$_GET[id_p] ");
$t=mysqli_fetch_array($tebaru);
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>$t[nama]
                        </div>
                        <div class='panel-body'>
<a href='javascript:history.go(-1)' class='btn btn-info'> Kembali</a></div>
";
echo"$t[isi] </div></div></div></div></div>";
}



elseif($_GET['aksi']=='admin'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI 
                        </div>
                        <div class='panel-body'>	
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data Admin
                            </button>
                           	<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>
                                    <thead>
                                        <tr>
                                            <th>nama</th>
                                            <th>User</th>		  
                                        </tr>
                                    </thead>
				    ";
			
$no=0;
$tebaru=mysqli_query($koneksi," SELECT * FROM user ");
while ($t=mysqli_fetch_array($tebaru)){	
$no++;
                                    echo"<tbody>
                                        <tr>
                                            <td>$t[user_nama]</td>
							<td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[user_username]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editadmin&user_id=$t[user_id]' title='Edit'><i class='fa fa-pencil'></i>edit</a></li>
						<li><a href='hapus.php?aksi=hapusadmin&user_id=$t[user_id]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[user_username] ?')\" title='Hapus'><i class='fa fa-remove'></i>hapus</li>
                        </ul>
                    </div></td>
                                        </tr>
                                    </tbody>";
}
                                echo"</table>
                            </div>
                        </div>
                    </div>
                </div>
               </div>";			

////////////////input admin			

echo"			
<div class='col-lg-12'>
                        <div class='modal fade' id='uiModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                            <h4 class='modal-title' id='H3'>Input</h4>
                                        </div>
                                                  <div class='box-body'>
            <form action='input.php?aksi=inputadmin' method='post' enctype='multipart/form-data'>
              <div class='form-group'>
                <label>Nama</label>
                <input type='text' class='form-control' name='nama' required='required' placeholder='Masukkan Nama ..'>
              </div>
              <div class='form-group'>
                <label>Username</label>
                <input type='text' class='form-control' name='username' required='required' placeholder='Masukkan Username ..'>
              </div>
              <div class='form-group'>
                <label>Password</label>
                <input type='password' class='form-control' name='password' required='required' min='5' placeholder='Masukkan Password ..'>
              </div>
              <div class='form-group'>
                <label>Foto</label>
                <input type='file' name='foto'>
              </div>
              <div class='form-group'>
                <input type='submit' class='btn btn-sm btn-primary' value='Simpan'>
              </div>
            </form>
          </div>
									
                                </div>
                            </div>
                    </div>
		    </div>			
"; 
}



/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($_GET['aksi']=='editadmin'){
$tebaru=mysqli_query($koneksi," SELECT * FROM user WHERE user_id=$_GET[user_id]");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT  $t[user_nama] $t[user_id]
                        </div>
                        <div class='panel-body'>
<form id='form1'  method='post' action='edit.php?aksi=proseseditadmin&user_id=$t[user_id]'  enctype='multipart/form-data'>
    	<label>Nama Lengkap</label>
        <input type='text' class='form-control'  name='nama' value='$t[user_nama]'/>
	<label>User Name</label>
        <input type='text' class='form-control'  name='username' value='$t[user_username]'/>     
	<label>Password</label>
        <input type='text' class='form-control'  name='password'/> </br>
		 <label>Foto</label>
                  <input type='file' name='foto'></br>
	 <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          <button type='submit' class='btn btn-primary'>Save </button>
    </form>  
</div> </div></div></div>
";
}


elseif($_GET['aksi']=='mhs'){
echo"<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>INFORMASI 
                        </div>
                        <div class='panel-body'>	
			<button class='btn btn-info' data-toggle='modal' data-target='#uiModal'>
                                Tambah Data
                            </button> </br></br>
                           	<div class='table-responsive'>		
	 <table id='example1' class='table table-bordered table-striped'>
                                    <thead>
                                        <tr> <th>No</th>
                                            <th>NPM</th>
                                            <th>Nama</th>
                                            <th>No Hp</th>	 
                                            <th>status</th>	 
                                            <th>jenis mhs</th>	
                                             
                                        </tr>
                                    </thead><tbody>
				    ";
			
$no=0;
$sql=mysqli_query($koneksi," SELECT * FROM mhs ORDER BY id_mhs ASC");
while ($t=mysqli_fetch_array($sql)){	
$no++;
                                    echo"
                                        <tr><td>$no</td>
                                            <td>$t[npm_mhs]</td>
                                            <td>$t[nama_mhs]</td> 
                                            <td>$t[hp_mhs]</td> 
                                            <td>$t[status_mhs]</td>
							<td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>$t[npm_mhs]</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='index.php?aksi=editmhs&id_mhs=$t[id_mhs]' title='Edit'><i class='fa fa-pencil'></i>edit</a></li>
						<li><a href='hapus.php?aksi=hapusmhs&id_mhs=$t[id_mhs]' onclick=\"return confirm ('Apakah yakin ingin menghapus $t[npm_mhs] ?')\" title='Hapus'><i class='fa fa-remove'></i>hapus</li>
                        </ul>
                    </div></td>
                                        </tr>";
}
                                echo"
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
               </div>";			 
}
/////////////////////////////////////////////////////////////////////////////////////////////////

elseif($_GET['aksi']=='editmhs'){
$tebaru=mysqli_query($koneksi," SELECT * FROM mhs WHERE id_mhs=$_GET[id_mhs] ");
$t=mysqli_fetch_array($tebaru);
echo"
<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
                        <div class='panel-heading'>EDIT $t[id_aset]
                        </div>
                        <div class='panel-body'>
<form id='form1'  method='post' action='edit.php?aksi=proseseditmhs&id_mhs=$t[id_mhs]'>
<div class='form-group'>
<label>PG</label>
<input type='text' class='form-control' value='$t[kode_mhs]' name='kode_mhs'/><br>
<label>LOKASI</label>
<input type='text' class='form-control' value='$t[lokasi_mhs]' name='lokasi_mhs'/><br>
<label>INFO LUAS</label>
<input type='text' class='form-control' value='$t[luas_mhs]' name='luas_mhs'/><br>
<label>STATUS</label>
<input type='text' class='form-control' value='$t[status_mhs]' name='status_mhs'/><br>
<label>JENIS BIBIT</label>
<input type='text' class='form-control' value='$t[jenis_mhs]' name='jenis_mhs'/><br>
<label>LUAS SEMPEL</label>
<input type='text' class='form-control' value='$t[sempel_luas]' name='sempel_luas'/><br>
<label>JUMALH NORMAL BIBIT</label>
<input type='text' class='form-control' value='$t[jml_btg_normal]' name='jml_btg_normal'/><br>
<label>JUMLAH AFKIR BIBIT</label>
<input type='text' class='form-control' value='$t[jml_btg_afkir]' name='jml_btg_afkir'/><br>
                              
		
    	<div class='modal-footer'>
                                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                            <button type='submit' class='btn btn-primary'>Save </button>
                                        </div> </div>
    </form></div> </div></div></div>
";
}
?>