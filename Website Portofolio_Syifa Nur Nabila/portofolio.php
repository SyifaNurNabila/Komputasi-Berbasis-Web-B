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

    <!-- Portofolio Section Design -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Latest <span>Project</span></h2>

        <div class="portfolio-container">
            <?php
            // Query untuk mengambil data dari tabel pengalaman
            $sql = "SELECT project_title, project_description, project_image, project_link FROM pengalaman";
            $result = $conn->query($sql);

            // Cek apakah ada hasil
            if ($result && $result->num_rows > 0) {
                // Loop untuk menampilkan setiap proyek
                while($row = $result->fetch_assoc()) {
                    echo '<div class="portfolio-box">';
                    echo '<img src="' . htmlspecialchars($row['project_image']) . '" alt="">';
                    echo '<div class="portfolio-layer">';
                    echo '<h4>' . htmlspecialchars($row['project_title']) . '</h4>';
                    echo '<p>' . htmlspecialchars($row['project_description']) . '</p>';
                    if ($row['project_link']) {
                        echo '<a href="' . htmlspecialchars($row['project_link']) . '" class="bx bx-link-external"></a>';
                    }
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No projects found.</p>";
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
