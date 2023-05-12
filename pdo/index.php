<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gegevensformulier</title>
</head>
<body>

<form method="GET"><br>

<label for="naam">Naam</label><br>

<input type="text" id="naam" name="naam"><br>

<label for="achternaam">Achternaam</label><br>

<input type="text" id="achternaam" name="achternaam"><br>

<label for="leeftijd">Leeftijd</label><br>

<input type="number" id="leeftijd" name="leeftijd"><br>

<label for="adres">Adres</label><br>

<input type="text" id="adres" name="adres"><br>

<label for="email">Email</label><br>

<input type="email" id="email" name="email"><br>

<input type="submit" value="Verstuur"><br>

</form>

</body>
</html>



Hierna POST methode



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gegevensformulier</title>
</head>
<body>
<form id='Gegevens' action='Gegevens.php' method='post' 
    accept-charset='UTF-8'>

<fieldset >

<legend>Gegevens</legend><br>

<input type='hidden' name='submitted' id='submitted' value='1'/><br>

<label for='naam' >Naam </label><br>

<input type='text' name='naam' id='naam' maxlength="50" /><br>

<label for='achternaam' >Achternaam</label><br>

<input type='text' name='achternaam' id='achternaam' maxlength="50" /><br>

<label for='leeftijd' >Leeftijd:</label><br>

<input type='text' name='leeftijd' id='leeftijd' maxlength="50" /><br>

<label for='adres' >Adres</label><br>

<input type='adres' name='adres' id='adres' maxlength="50" /><br>

<input type='submit' name='Submit' value='Submit' /><br>

<label for='email' >Email</label><br>

<input type='text' name='email' id='email' maxlength="50" /><br>

</fieldset>
</form>
</body>
</html>




Verschil tussen GET en POST methode:

GET en POST zijn twee efficiënte technieken die de gegevens naar de server kunnen verzenden,
 en de browser heeft deze noodzakelijkerwijs nodig om met de server te communiceren.
De twee methoden zijn verschillend waar de GET-methode de gecodeerde gegevens aan de URI toevoegt,
terwijl in het geval van de POST-methode de gegevens aan het lichaam worden toegevoegd in plaats van aan de URI.
Bovendien wordt de GET-methode gebruikt voor het ophalen van de gegevens.
Omgekeerd wordt de POST-methode gebruikt voor het opslaan of bijwerken van de gegevens.
