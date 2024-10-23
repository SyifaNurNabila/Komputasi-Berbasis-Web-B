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

// Ambil data dari tabel home
$sql = "SELECT * FROM home";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Syifa Nur Nabila</title>

    <!--Scroll Reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

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

    <section class="home" id="home">
        <div class="home-content">
            <?php
            // Tampilkan data
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<h3>Hello, I\'m</h3>';
                    echo '<h1>' . $row['name'] . '</h1>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '<div class="social-media">';
                    echo '<a href="https://www.instagram.com/nr.abila_/"><i class="bx bxl-instagram-alt"></i></a>';
                    echo '<a href="https://www.linkedin.com/in/syifa-nur-nabila-2b7952286/"><i class="bx bxl-linkedin"></i></a>';
                    echo '<a href="https://github.com/SyifaNurNabila"><i class="bx bxl-github"></i></a>';
                    echo '</div>';
                    echo '<a href="' . $row['cv_link'] . '" class="btn">Download CV</a>';
                }
            } else {
                echo "<p>Tidak ada data yang ditemukan.</p>";
            }
            ?>
        </div>

        <div class="profession-container">
            <div class="profession-box">
                <div class="profession" style="--i:0;">
                    <i class='bx bx-code-alt'></i>
                    <h3>Web Developer</h3>
                </div>
                <div class="profession" style="--i:1;">
                    <i class='bx bx-palette'></i>
                    <h3>Web Designer</h3>
                </div>
                <div class="profession" style="--i:2;">
                    <i class='bx bxs-color'></i>
                    <h3>UI/UX Designer</h3>
                </div>
                <div class="profession" style="--i:3;">
                    <i class='bx bx-code-block'></i>
                    <h3>Front-end Developer</h3>
                </div>

                <div class="circle"></div>
            </div>

            <div class="overlay"></div>
        </div>

        <div class="home-img">
            <img src="home.png" alt="">
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="script.js"></script>
    <?php include 'footer.php'; ?>

</body>
</html>

<?php
$conn->close();
?>
