 <!doctype html>

<html >
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="file.js"></script>
<link rel="stylesheet" href="main.css" type="text/css" />
	<style type="text/css">
			body {
            background: #ffa;
			margin: 0px;
			padding: 0px;
         
        }
	</style>
  

 

</head>

<body>

<?PHP

session_start();

if(!(isset($_SESSION['zalogowany'])))
{
	header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
	exit();
}

echo '[<a href="https://demo-php-store.herokuapp.com/_logout.php">Wyloguj sie!</a>]</p>';
echo '[<a href="https://demo-php-store.herokuapp.com/_konto.php">Wróć do dodawania produktów!</a>]</p>';
$SUMA = 0;

require_once "_connect.php";

$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	
	$sql = "SELECT dp.ID as ID, CENA, NAZWA FROM produkty p, daneosobowe_produkty dp 
	where dp.ID_PRODUKT = p.ID and dp.ID_OSOBA=".$_SESSION["id"]."";
	
	$rezultat = $polaczenie->query($sql);

}
	
?>


			<div>
			Produkty, które znajdują się w Państwa koszyku:
			<br></br>
			<form name ="dodajProdukt" method = post action = "https://demo-php-store.herokuapp.com/_usunProdukt.php">
				<table style="width:40%">
					<tr>
						<td>Produkt:</td>
						<td>Cena:</td>
						<td>Czy usunąć?</td>
					</tr>	
					<?php foreach ($rezultat as $wartosc) : ?>
					<tr>
						<td><?= htmlspecialchars($wartosc['NAZWA']) ?></td>
						<td><?= htmlspecialchars($wartosc['CENA']) ?></td>
						<td><input type="checkbox" name="lista[]" value=<?= htmlspecialchars($wartosc['ID']) ?>></td>
						<?php $SUMA = $SUMA + $wartosc['CENA'];?>
					</tr>
					<?php endforeach ?>
					<tr>
						<td>SUMA:</td>
						<td><?=$SUMA?></td>
					</tr>
					<tr>
						<td></td>
						
						<td><input style="padding:10px;margin:20px;" name="przycisk" type="submit" value="Usuń z koszyka" />
						</td>
					</tr>
					
				</table>
				</form>
			</div>
			<div>
			Zamówienie:
			<br></br>
			<form name ="email" method="post" action="mailto:aleksanderkamienski.97@wp.pl?subject=zamowienie" enctype="text/plain" onsubmit="return validateFormEmail();">
			Imię: <input type="text" name="name" value="<?php echo $name;?>" maxlength = "30">
					  <span class="error">* </span>
					  <br><br>
					  Nazwisko: <input type="text" name="surname" maxlength = "30" value="<?php echo $surname;?>">
					  <span class="error">* </span>
					  <br><br>
					  Login: <input type="text" name="login" maxlength = "30" value="<?php echo $surname;?>">
					  <span class="error">* </span>
					  <br><br>
					  E-mail: <input type="text" name="email" maxlength = "30" value="<?php echo $email;?>">
					  <span class="error">* </span>
					  <br><br>
					  Miasto: <input type="text" name="city" maxlength = "30" value="<?php echo $city;?>">
					  <span class="error">* </span>
					  <br><br>
					  Kod pocztowy: <input type="text" name="zipCode" maxlength = "5" value="<?php echo $zipCode;?>">
					  <span class="error">* </span>
					  <br><br>
					  Ulica: <input type="text" name="street" maxlength = "30" value="<?php echo $street;?>">
					  <span class="error">* </span>
					  <br><br>
					  Numer domu: <input type="text" name="houseNumber" maxlength = "4" value="<?php echo $houseNumber;?>">
					  <span class="error">* </span>
					  <br><br>
					  Numer mieszkania: <input type="text" maxlength = "4" name="flatNumber" value="<?php echo $flatNumber;?>">
					  
					  <p>
					  <input type="submit" value="Wyślij zamówienie"/>
					  </p>

			
			</form>
</body>
</html>
