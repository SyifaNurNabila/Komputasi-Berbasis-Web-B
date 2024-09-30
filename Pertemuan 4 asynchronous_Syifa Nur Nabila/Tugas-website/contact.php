<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Kontak</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            margin: 0; 
        }

        .main-content {
            flex: 1; 
            padding: 30px; 
        }

        .footer {
            text-align: left;
            padding: 10px;
            background-color: #024aa7;
            color: white;
        }

        input[type="text"],
        input[type="password"] {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
        }

        input[type="submit"] {
            padding: 10px 15px;
        }

        
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        
        li {
            float: left;
            border-right: 1px solid #bbb;
        }
        
        li:last-child {
            border-right: none;
        }
        
        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: rgb(4, 105, 122);
        }
        
        .about {
            background-color: rgb(4, 105, 122);
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="dashboard.php" class="active">Home</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="about">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<div class="main-content">
    
    <form action="konfirmasi.php" method="get">
        <input type="text" name="nama" placeholder="Enter your name" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<footer>
    <div class="footer">
        <p>Web Rekomendasi:</p>
        <p><a href="https://www.google.com/" target="_blank"><i class="fab fa-google"></i><i> Google</i></a></p>
        <p><a href="https://www.microsoft.com/id-id/" target="_blank"><i class="fab fa-microsoft"></i><i> Microsoft</i></a></p>
        <p>&#169; 2024 Syifa Nur Nabila</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
