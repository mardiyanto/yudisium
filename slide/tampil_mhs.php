<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var npm = '<?php echo $_GET["npm"]; ?>';

            function loadMahasiswaDetails() {
                $.ajax({
                    url: 'get_data.php',
                    method: 'GET',
                    data: { npm: npm },
                    success: function(response) {
                        $('#mahasiswa-details').html(response);
                    }
                });
            }

            setInterval(function() {
                loadMahasiswaDetails();
            }, 2000); // Refresh data every 2 seconds

            loadMahasiswaDetails(); // Load initial data on page load
        });
    </script>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <div id="mahasiswa-details">
        <!-- Detail mahasiswa akan ditampilkan di sini setelah NPM diklik -->
    </div>
</body>
</html>
