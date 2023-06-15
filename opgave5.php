<?php
$tijd = date("H:i"); // Haal de huidige tijd op

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd >= "12:00" && $tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

echo "<br>";



function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(4, 8); // Roept de functie aan met de getallen 4 en 8
echo "<br>";

$datum = date("Y-m-d"); // Haal de huidige datum op

function resterendeDagen() {
    $huidigeJaar = date("Y"); // Haal het huidige jaar op
    $eindeJaar = ($huidigeJaar + 1) . "-01-01"; // Bepaal het begin van het volgende jaar
    $resterendeDagen = (strtotime($eindeJaar) - strtotime(date("Y-m-d"))) / (60 * 60 * 24); // Bereken het aantal resterende dagen

    echo "Er zijn nog " . $resterendeDagen . " dagen over tot het einde van het jaar.";
}

resterendeDagen(); // Roept de functie aan

echo "<br>";

function berekenTotaleLengte($array) {
    $totaleLengte = 0;

    foreach ($array as $string) {
        $totaleLengte += strlen($string); // Optellen van de lengte van elke string
    }

    return $totaleLengte;
}

$strings = array("Hello", "martino", "simic"); // Voorbeeldarray met strings
$resultaat = berekenTotaleLengte($strings); // Roept de functie aan met de array
echo "De  lengte van de strings is: " . $resultaat;
