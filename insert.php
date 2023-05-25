

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h2>Voeg een nieuw product toe:</h2>
    <form method="POST" action="insert.php">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" id="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="text" name="prijs_per_stuk" id="prijs_per_stuk" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" id="omschrijving" required></textarea><br><br>

        <label for="product1">product1</label>
        <textarea name="product1" id="product1" required></textarea><br><br>

        <label for="product2">product2</label>
        <textarea name="product2" id="product2" required></textarea><br><br>
        
        <label for="product3">product3</label>
        <textarea name="product3" id="product3" required></textarea><br><br>

        
        <label for="product4">product4</label>
        <textarea name="product4" id="product4" required></textarea><br><br>

        
        <label for="product5">product5</label>
        <textarea name="product5" id="product5" required></textarea><br><br>

        <input type="submit" value="Toevoegen">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Verkrijg de ingediende waarden
        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];
        $product1 = $_POST["product1"];
        $product2 = $_POST["product2"];
        $product3 = $_POST["product3"];
        $product4 = $_POST["product4"];
        $product5 = $_POST["product5"];
     

        // Verbind met de database
        $host = "127.0.0.";
        $username = " root";
        $password = " ";
        $dbname = "winkels";

  

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Controleer de verbinding
        if ($conn->connect_error) {
            die("Kan geen verbinding maken met de database: " . $conn->connect_error);
        }

        // Voeg het product toe aan de tabel 'producten'
        $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving)
                VALUES ('$product_naam', '$prijs_per_stuk', '$omschrijving', '$product1'.'$product2')";

        if ($conn->query($sql) === TRUE) {
            echo "Product succesvol toegevoegd.";
        } else {
            echo "Er is een fout opgetreden bij het toevoegen van het product: " . $conn->error;
        }

        $conn->close();
    }
    ?>
</body>
</html>
