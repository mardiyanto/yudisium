<?php
// class paging untuk halaman administrator
class Paging{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas){
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
}
else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}

// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas){
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 (untuk admin)
function navHalaman($halaman_aktif, $jmlhalaman){
$link_halaman = "";

// Link ke halaman pertama (first) dan sebelumnya (prev)
if($halaman_aktif > 1){
	$prev = $halaman_aktif-1;
	$link_halaman .= "<li><a href=ajax.php?halaman=1><< First</a></li>
	<li><a href=ajax.php?halaman=$prev>< Prev</a></li>";
}
else{ 
	$link_halaman .= "<li><a><< First </a></li><li><a>< Prev</a></li>";
}

// Link halaman 1,2,3, ...
$angka = ($halaman_aktif > 3 ? " ... " : " "); 
for ($i=$halaman_aktif-2; $i<$halaman_aktif; $i++){
  if ($i < 1)
  	continue;
	  $angka .= "<li><a href=ajax.php?halaman=$i>$i</a></li>";
  }
	  $angka .= "  <li><a>$halaman_aktif</a></li>  ";
	  
    for($i=$halaman_aktif+1; $i<($halaman_aktif+3); $i++){
    if($i > $jmlhalaman)
      break;
	  $angka .= "<li><a href=ajax.php?halaman=$i>$i</a></li>";
    }
	  $angka .= ($halaman_aktif+2<$jmlhalaman ? " <li><a>... </a></li><li><a href=ajax.php?halaman=$jmlhalaman>$jmlhalaman</a></li> " : " ");

$link_halaman .= "$angka";

// Link ke halaman berikutnya (Next) dan terakhir (Last) 
if($halaman_aktif < $jmlhalaman){
	$next = $halaman_aktif+1;
	$link_halaman .= "<li> <a href=ajax.php?halaman=$next>Next ></a></li>
	<li><a href=ajax.php?halaman=$jmlhalaman>Last >></a></li> ";
}
else{
	$link_halaman .= " <li><a>Next > </a></li><li><a>Last >></a></li>";
}
return $link_halaman;
}
}
?>