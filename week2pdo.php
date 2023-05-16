
<?php
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>

<?php
$variabele1 = 10;
$variabele2 = 12;

if ($variabele1 != $variabele2) {
    echo "De twee waarden zijn ongelijk";
}
?>


<?php
$variabele1 = 10;
$variabele2 = 10;

if ($variabele1 == $variabele2) {
    echo "De twee waarden zijn gelijk";
} else {
    echo "De twee waarden zijn ongelijk";
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulier</title>
</head>
<body>

<form method="POST" action="verwerk.php">
    <label for="username">Gebruikersnaam:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Wachtwoord:</label>
    <input type="password" id="password" name="password" required><br><br>

    <input type="submit" value="Verzenden">
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    echo "Gebruikersnaam: " . $username . "<br>";
    echo "Wachtwoord: " . $password;
}
?>


