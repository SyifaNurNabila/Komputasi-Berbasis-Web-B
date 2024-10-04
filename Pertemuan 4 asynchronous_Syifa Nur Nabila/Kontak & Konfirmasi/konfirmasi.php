<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $hobbies = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : 'Tidak ada hobi dipilih';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'Tidak disebutkan';
    $birthdate = $_POST['tanggal_lahir'];

  
    $today = new DateTime();
    $birthDateObj = new DateTime($birthdate);
    $age = $today->diff($birthDateObj)->y;

  
    
    echo "Nama: $name <br>";
    echo "Email: $email <br>";
    echo "Hobi: $hobbies <br>";
    echo "Jenis Kelamin: $gender <br>";
    echo "Umur: $age tahun <br><br>";

    $connection = new mysqli("127.0.0.1", "root", "basisdata", "kontak");
    $perintah = $connection->prepare("INSERT INTO kontak_kami (Nama, Email, Hobi, Jenis_Kelamin, Umur) VALUES (?, ?, ?, ?, ?)");
    $perintah->bind_param("ssssi", $name, $email, $hobbies, $gender, $age);

    $perintah->execute();
    
    
}
?>
<input type="submit" value="submit">
</body>

</html>