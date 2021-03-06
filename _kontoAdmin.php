<!DOCTYPE HTML >
<html>
<head>
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
<?php


session_start();
if(!(isset($_SESSION['zalogowany'])))
{
	header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
	exit();
}
if($_SESSION['admin']!=true)
{
	header('Location: https://demo-php-store.herokuapp.com/_konto.php');
	exit();
}

require_once "_connect.php";

$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	
	$sql = "SELECT ID, NAZWA, CENA FROM produkty";
	
	$rezultat = $polaczenie->query($sql);

}

?>
   
	<div class="calosc"> 
        <div class="naglowek">SKLEP INTERNETOWY "MAJSTER"
        </div> 
        <div class="menu"> 
			<form name ="koszyk" method = post  action ="https://demo-php-store.herokuapp.com/_koszyk.php">
            <h2>Sprawdź swój koszyk</h2> 
			<td><input type="submit" value="Sprawdź koszyk"/></td>
			</form>
			
        </div> 

        <div class="tresc"> 
			
			<h2>Zalogowałeś się jako administrator</h2> 
			
			<?php
			echo '[<a href="https://demo-php-store.herokuapp.com/_logout.php">Wyloguj sie!</a>]</p>';
			?>
			<form name ="dodajProdukt" method = post action = "https://demo-php-store.herokuapp.com/_dodajprodukt.php">

            Produkty, które mogą państwo u nas kupić:
			<br></br>
				<table style="width:100%">
				  <tr>
					<td>nazwa:</td>
					<td>zdjęcie:</td>
					<td>cena:</td>
					<td>zaznacz aby dodać do koszyka:</td>
				  </tr>	
				  
				<?php foreach ($rezultat as $wartosc) : ?>
					<tr>
						<td><?= htmlspecialchars($wartosc['NAZWA']) ?></td>
						<td><img class="obraz" src=<?="".$wartosc["NAZWA"].".jpg"?> alt="zdjecie"></td>
						<td><?php echo "cena: ".htmlspecialchars($wartosc['CENA'])." zł" ?></td>
						<td><input type="checkbox" name="lista[]" value=<?=$wartosc["ID"]?>/></td>
					</tr>
					<?php endforeach ?>
				  
				  <tr> 
				  <td></td>
				  <td></td>
				  <td></td>
				  <td><input style="padding:10px;margin:20px;" name="przycisk" type="submit" value="Dodaj do koszyka" /></td>
				  
				  </tr>
				 </table>
			</form>
		
        
		</div> 
		<form name ="zmien_cene" method = post  action ="https://demo-php-store.herokuapp.com/_zmiencene.php">
		<div class="tabelka">
		<h2>Zmień cenę produktów:</h2> 
			<?php
				echo "Wpisz nową cenę i wciśnij przycisk 'Zmień'. Musisz podać liczbę dodatnią. Jeśli nie chcesz zmienić ceny pozostaw puste pole."
			?>
			<br></br>
			<table>
					<tr>
						<td>Produkt:</td>
						<!--<td><img class="obraz" src=<?="".$wartosc["NAZWA"].".jpg"?> alt="zdjecie"></td>-->
						<td>Cena:</td>
						<td>Wpisz nową cenę</td>
					</tr>
				<?php foreach ($rezultat as $wartosc) : ?>
					<tr>
						<td><?= htmlspecialchars($wartosc['NAZWA']) ?></td>
						
						<td><?php echo "cena: ".htmlspecialchars($wartosc['CENA'])." zł" ?></td>
						<td><input type="text" name=<?= htmlspecialchars($wartosc['NAZWA']) ?> maxlength = "4" ></td>
					</tr>
					<?php endforeach ?>
					<tr> 
						<td></td>
						<td></td>
						<td><input style="padding:10px;margin:20px;" name="przycisk" type="submit" value="Zmień" /></td> 
						<td></td>
						
					</tr>
			<table>
			</form>
		</div>


	</div>

</body>
</html>