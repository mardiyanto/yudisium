<!-- Halaman tampil_data_mahasiswa.php -->
<?php
$tanggal = date("Y");
include "koneksi.php";
?>
	<div class="col-md-6" id="screen"></div>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#screen").load('ajak.php')
    }, 2000);
});
</script>
