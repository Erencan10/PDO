<!DOCTYPE html>
<html>
<head>
	<title>Gebruikersgegevens formulier</title>
</head>
<body>
	<?php
	if (isset($_GET['naam']) && isset($_GET['achternaam']) && isset($_GET['leeftijd']) && isset($_GET['adres']) && isset($_GET['email'])) {
		// Haal de gegevens uit de GET-array
		$naam = $_GET['naam'];
		$achternaam = $_GET['achternaam'];
		$leeftijd = $_GET['leeftijd'];
		$adres = $_GET['adres'];
		$email = $_GET['email'];

		// Print de gegevens op een mooie manier
		echo "<h2>Ingevoerde gegevens:</h2>";
		echo "<ul>";
		echo "<li>Naam: " . $naam . "</li>";
		echo "<li>Achternaam: " . $achternaam . "</li>";
		echo "<li>Leeftijd: " . $leeftijd . "</li>";
		echo "<li>Adres: " . $adres . "</li>";
		echo "<li>Email: " . $email . "</li>";
		echo "</ul>";
	}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
		<label for="naam">Naam:</label>
		<input type="text" id="naam" name="naam"><br>

		<label for="achternaam">Achternaam:</label>
		<input type="text" id="achternaam" name="achternaam"><br>

		<label for="leeftijd">Leeftijd:</label>
		<input type="number" id="leeftijd" name="leeftijd"><br>

		<label for="adres">Adres:</label>
		<input type="text" id="adres" name="adres"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<input type="submit" value="Verzenden">
	</form>

</body>
</html>

hierna is POST methode.




<!DOCTYPE html>
<html>
<head>
	<title>Gebruikersgegevens formulier</title>
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Haal de gegevens uit de POST-array
		$naam = $_POST['naam'];
		$achternaam = $_POST['achternaam'];
		$leeftijd = $_POST['leeftijd'];
		$adres = $_POST['adres'];
		$email = $_POST['email'];

		// Print de gegevens op een mooie manier
		echo "<h2>Ingevoerde gegevens:</h2>";
		echo "<ul>";
		echo "<li>Naam: " . $naam . "</li>";
		echo "<li>Achternaam: " . $achternaam . "</li>";
		echo "<li>Leeftijd: " . $leeftijd . "</li>";
		echo "<li>Adres: " . $adres . "</li>";
		echo "<li>Email: " . $email . "</li>";
		echo "</ul>";
	}
	?>

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
		<label for="naam">Naam:</label>
		<input type="text" id="naam" name="naam"><br>

		<label for="achternaam">Achternaam:</label>
		<input type="text" id="achternaam" name="achternaam"><br>

		<label for="leeftijd">Leeftijd:</label>
		<input type="number" id="leeftijd" name="leeftijd"><br>

		<label for="adres">Adres:</label>
		<input type="text" id="adres" name="adres"><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email"><br>

		<input type="submit" value="Verzenden">
	</form>

</body>
</html>




GET en POST zijn twee efficiënte technieken die de gegevens naar de server kunnen verzenden en de browser heeft deze noodzakelijkerwijs nodig om met de server te communiceren.
De twee methoden zijn verschillend waar de GET-methode de gecodeerde gegevens aan de URI toevoegt,
terwijl in het geval van de POST-methode de gegevens aan het lichaam worden toegevoegd in plaats van aan de URI.
Bovendien wordt de GET-methode gebruikt voor het ophalen van de gegevens.
Omgekeerd wordt de POST-methode gebruikt voor het opslaan of bijwerken van de gegevens.