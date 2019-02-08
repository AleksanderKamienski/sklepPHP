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
			
			<h2>Zalogowałeś się</h2> 
			
			<?php
			echo ("WITAJ". " ");
			echo ($_SESSION["user"]. " ");
			echo '[<a href="https://demo-php-store.herokuapp.com/_logout.php">Wyloguj sie!</a>]</p>';
			?>
			<form name ="dodajProdukt" method = post action = "https://demo-php-store.herokuapp.com/_dodajprodukt.php">

            Produkty, które mogą państwo u nas kupić:
			<br></br>
				<table style="width:100%">
				  <tr>
					<td>nazwa</td>
					<td>zdjęcie</td>
					<td>cena</td>
					<td>zaznacz aby dodać do koszyka</td>
				  </tr>	
				  <tr>
					<td>młotek</td>
					<td><img class="obraz" src="młotek.jpg" alt="młotek"  ></td>
					<td>cena : 10 zł</td>
					
					<td><input type="checkbox" name="lista[]" value=1/></td>
				  </tr>
				  <tr>
					<td>wiertarka</td>
					<td><img class="obraz" src="wiertarka.jpg" alt="wiertarka"></td>
					<td>cena : 100 zł</td>
					<td><input type="checkbox" name="lista[]" value=2/></td>
				  </tr>
				  <tr>
					<td>opakowanie gwoździ</td>
					<td><img class="obraz" src="gwoździe.jpg" alt="gwoździe"></td>
					<td>cena : 8 zł</td>
					<td><input type="checkbox" name="lista[]" value=3/></td>
				  </tr>
				  <tr>
					<td>łom</td>
					<td><img class="obraz" src="łom.jpg" alt="łom"></td>
					<td>cena : 40 zł</td>
					<td><input type="checkbox" name="lista[]" value=4/></td>
				  </tr>
				  <tr>
					<td>pilarka</td>
					<td><img class="obraz" src="pilarka.jpg" alt="pilarka"></td>
					<td>cena : 300 zł</td>
					<td><input type="checkbox" name="lista[]" value=5/></td>
				  </tr>
				  <tr>
					<td>brzeszczot</td>
					<td><img class="obraz" src="brzeszczot.jpg" alt="brzeszczot"></td>
					<td>cena : 15 zł</td>
					<td><input type="checkbox" name="lista[]" value=6/></td>
				  </tr>
				  <tr>
					<td>suwmiarka</td>
					<td><img class="obraz" src="suwmiarka.jpg" alt="suwmiarka"></td>
					<td>cena : 20 zł</td>
					<td><input type="checkbox" name="lista[]" value=7/></td>
				  </tr>
				  <tr>
					<td>ołówek</td>
					<td><img class="obraz" src="ołówek.jpg" alt="ołówek" ></td>
					<td>cena : 4 zł</td>
					<td><input type="checkbox" name="lista[]" value=8/></td>
				  </tr>
				  <tr>
					<td>hebel</td>
					<td><img class="obraz" src="hebel.jpg" alt="hebel"></td>
					<td>cena : 40 zł</td>
					<td><input type="checkbox" name="lista[]" value=9/></td>
				  </tr>
				  <tr>
					<td>śrubokręt</td>
					<td><img class="obraz" src="śrubokręt.jpg" alt="śrubokręt"></td>
					<td>cena : 25 zł</td>
					<td><input type="checkbox" name="lista[]" value=10/></td>
				  </tr>
				  <tr>
					<td>kombinerki</td>
					<td><img class="obraz" src="kombinerki.jpg" alt="kombinerki" ></td>
					<td>cena : 25 zł</td>
					<td><input type="checkbox" name="lista[]" value=11/></td>
				  </tr>
				  <tr>
					<td>elektrody</td>
					<td><img class="obraz" src="elektrody.jpg" alt="elektrody" ></td>
					<td>cena : 40 zł</td>
					<td><input type="checkbox" name="lista[]" value=12/></td>
				  </tr>
				    <tr>
					<td>kątówka</td>
					<td><img class="obraz" src="kątówka.jpg" alt="kątówka" ></td>
					<td>cena : 250 zł</td>
					<td><input type="checkbox" name="lista[]" value=13/></td>
				  </tr>
				  
				  <tr> 
				  <td></td>
				  <td></td>
				  <td></td>
				  <td><input style="padding:10px;margin:20px;" name="przycisk" type="submit" value="Dodaj do koszyka" /></td> 
				  
				  </tr>
				 </table>
			</form>
		</div>
		<div class="stopka">W razie pytań prosimy o kontakt! e-mail: sklep-majster@gmail.com, telefon: 000 000 000
		</div> 
</body>
</html>