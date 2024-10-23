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


    <!--contact section design-->
    <section class="contact" id="contact">
        <h2 class="heading">Contact <span>Me!</span></h2>

        <form action="simpandata.php" method="POST">
            <div class="input-box">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="emailaddress" placeholder="Email Address" required>
            </div>
            <div class="input-box">
                <input type="number" name="mobilenumber" placeholder="Mobile Number" required>
                <input type="text" name="emailsubject" placeholder="Email Subject" required>
            </div>
                <textarea name="yourmessage" id="" cols="3" rows="3" placeholder="Your Message"></textarea>
                <input type="submit" value="Send Message" class="btn">
         </form>
    </section>

    <!-- Script Custom JS -->
    <script src="script.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>
