<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
	
	$sql = "SELECT NAZWA, CENA FROM produkty";
	
	$rezultat = $polaczenie->query($sql);

}
	
		
?>
   
	
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
			echo ("LOGIN: ");
			echo ($_SESSION["user"]. " ");
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
					<td><img class="obraz" src=<?="".$wartosc["NAZWA"].".jpg" alt=htmlspecialchars($wartosc['NAZWA']) ?> ></td>
					<td><?php echo "cena: ".htmlspecialchars($wartosc['CENA'])." zł" ?></td>
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
		<div class="stopka">W razie pytań prosimy o kontakt! e-mail: sklep-majster@gmail.com, telefon: 000 000 000</div>
    </div>
</body>
</html>