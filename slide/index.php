<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa Real-Time</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.npm-link').click(function() {
                var npm = $(this).data('npm');
                loadMahasiswaDetails(npm);
            });

            function loadMahasiswaDetails(npm) {
                $.ajax({
                    url: 'get_data.php',
                    method: 'GET',
                    data: { npm: npm },
                    success: function(response) {
                        $('#mahasiswa-details').html(response);
                    }
                });
            }
        });
    </script>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <div id="mahasiswa-details">
        <!-- Detail mahasiswa akan ditampilkan di sini setelah NPM diklik -->
    </div>
    <div id="mahasiswa-list">
        <?php
        // Koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "db_yudisium");

        // Query untuk mengambil data mahasiswa
        $query = "SELECT * FROM mhs";
        $result = mysqli_query($conn, $query);

        // Menampilkan daftar mahasiswa dengan NPM sebagai link
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<a href="#" class="npm-link" data-npm="' . $row['npm_mhs'] . '">' . $row['npm_mhs'] . '</a><br>';
        }
        ?>
    </div>
   
</body>
</html>
