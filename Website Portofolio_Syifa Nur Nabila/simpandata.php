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

<?php

// Memasukkan file koneksi
include 'koneksi.php';

// Mengecek apakah form sudah dikirim dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Menangkap data dari form
    $fullname = $_POST['fullname'];
    $emailaddress = $_POST['emailaddress'];
    $mobilenumber = $_POST['mobilenumber'];
    $emailsubject = $_POST['emailsubject'];
    $yourmessage = $_POST['yourmessage'];

    // Menyimpan data ke database
    $sql = "INSERT INTO portofolio (fullname, mobilenumber, emailaddress, emailsubject, yourmessage) 
            VALUES ('$fullname', '$mobilenumber', '$emailaddress', '$emailsubject', '$yourmessage')";

    if ($conn->query($sql) === TRUE) {
        echo "
        <div id='popup' class='popup'>
            <div class='popup-content'>
                <h2 class='heading'><span>Submitted Successfully</span></h2>
                <a href='contact.php' class='btn'>Back</a>
            </div>
        </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup koneksi
    $conn->close();
}
?>
 <script src="script.js"></script>
 <?php include 'footer.php'; ?>
</body>
</html>
