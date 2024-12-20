<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Yume Ramen</title>
</head>
<body>
<h2>Registreer een nieuw account</h2>
<form action="register.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" required>
    <br>
    <label for="fName">Voornaam:</label>
    <input type="text" name="fName" required>
    <br>
    <label for="lName">Achternaam:</label>
    <input type="text" name="lName" required>
    <br>
    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Registreer</button>
</form>
</body>
</html>