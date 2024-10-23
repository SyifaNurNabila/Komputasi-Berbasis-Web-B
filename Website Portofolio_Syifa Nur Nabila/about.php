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

// Ambil data dari tabel 'about'
$sql = "SELECT heading, subheading, description, cv_link FROM about LIMIT 1";
$result = $conn->query($sql);

$aboutData = null;
if ($result->num_rows > 0) {
    // Ambil data dari hasil query
    $aboutData = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
}
$conn->close();
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
    
    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>

    <!-- Custom CSS -->
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

    <!-- About Section Design -->
    <section class="about" id="about">
        <div class="about-img-container">
            <img src="about.png" alt="About section image"> 
        </div>
        
        <div class="about-content">
            <h2 class="heading">About <span>Me</span></h2>
            <h3><?php echo isset($aboutData['subheading']) ? $aboutData['subheading'] : ''; ?></h3>
            <p><?php echo isset($aboutData['description']) ? $aboutData['description'] : ''; ?></p>
            <a href="<?php echo isset($aboutData['cv_link']) ? $aboutData['cv_link'] : '#'; ?>" class="btn">Download CV</a>  
        </div>
    </section>

    <!-- Script Custom JS -->
    <script src="script.js"></script>
    <?php include 'footer.php'; ?>

</body>
</html>
