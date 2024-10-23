<?php
// Koneksi ke database
$servername = "localhost"; 
$username = "root"; 
$password = "basisdata"; 
$dbname = "portofolio"; 

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Syifa Nur Nabila</title>

    <!--Scroll Reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!--box icons-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!--custom css-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <!-- Header Design -->
    <header class="header">
        <a href="#" class="logo">Portofolio</a>
        <nav class="navbar">
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="services.php" class="nav-link">Services</a>
            <a href="portofolio.php" class="nav-link">Portofolio</a>
            <a href="contact.php" class="nav-link">Contact</a>
        </nav>
        <div class="bx bx-moon" id="darkMode-icon"></div>
        <div class="container" id="menu-icon" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </header>

    <!-- Services Section Design -->
    <section class="services" id="services">
        <h2 class="heading">My <span>Services</span></h2>

        <div class="services-container">
            <?php
            // Query untuk mengambil data dari tabel services
            $sql = "SELECT service_name, service_description FROM services";
            $result = $conn->query($sql);

            // Cek apakah ada hasil
            if ($result && $result->num_rows > 0) {
                // Loop untuk menampilkan setiap layanan
                while($row = $result->fetch_assoc()) {
                    echo '<div class="services-box">';
                    // Ganti icon sesuai dengan layanan
                    if ($row['service_name'] == 'Web Development') {
                        echo '<i class="bx bx-code-alt"></i>';
                    } elseif ($row['service_name'] == 'Web Designer') {
                        echo '<i class="bx bx-palette"></i>';
                    } elseif ($row['service_name'] == 'UI/UX Designer') {
                        echo '<i class="bx bxs-color"></i>';
                    } elseif ($row['service_name'] == 'Front-end Developer') {
                        echo '<i class="bx bx-code-block"></i>';
                    }
                    echo '<h3>' . htmlspecialchars($row['service_name']) . '</h3>';
                    echo '<p>' . htmlspecialchars($row['service_description']) . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No services found.</p>";
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </div>      
    </section>

    <!-- Script Custom JS -->
    <script src="script.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>
