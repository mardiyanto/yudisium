<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_yudisium");

// Ambil NPM dari permintaan Ajax
if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];
    mysqli_query($koneksi,"UPDATE tampilmhs SET npm_mhs='$npm_mhs' WHERE id_mhs='1'");
    // Query untuk mengambil data mahasiswa berdasarkan NPM
    $query = "SELECT * FROM mhs WHERE npm_mhs = '$npm'";
    $result = mysqli_query($conn, $query);

    // Membangun tampilan HTML untuk detail mahasiswa
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama_mhs'];
        $prodi = $row['prodi_mhs'];

        echo '<h2>' . $npm . '</h2>';
        echo '<p>Nama: ' . $nama . '</p>';
        echo '<p>Prodi: ' . $prodi . '</p>';
    } else {
        echo '<p>kjhhjhj dengan NPM ' . $npm . ' tidak ditemukan.</p>';
    }
}

?>

