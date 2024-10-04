<!-- konfirmasi.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Konfirmasi</title>
</head>
<body>

<h1>Kontak Kami</h1>
<form method="POST" action="konfirmasi.php">
  
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    Hobi:<br>

    <input type="checkbox" name="hobi[]" value="Nyanyi"> Nyanyi<br>
    <input type="checkbox" name="hobi[]" value="Baca"> Baca<br>
    <input type="checkbox" name="hobi[]" value="Lari"> Lari<br><br>

    Jenis kelamin:<br>
    <input type="radio" name="gender" value="Laki-laki"> Laki-laki<br>
    <input type="radio" name="gender" value="Perempuan"> Perempuan<br><br>

    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

    <input type="submit" value="Konfirmasi">
</form>

</body>
</html>
