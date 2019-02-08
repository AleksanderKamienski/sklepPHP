 <!doctype html>

<html >
<head>
  <meta charset="utf-8">
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


			
Produkty, które znajdują się w Państwa koszyku:
			<br></br>
			<form name ="zmiencene" method = post action = "https://demo-php-store.herokuapp.com/_zmien.php" onsubmit="return validateFormNumber();">
            Produkty, które mogą państwo u nas kupić:
			<br></br>
				<table style="width:100%">
				  <tr>
					<td>nazwa:</td>
					<td>zdjęcie:</td>
					<td>cena:</td>
					<td>wpisz cenę</td>
				  </tr>	
				  
				  <tr>
					<td>MLOTEK</td>
					<td><img class="obraz" src="MLOTEK.jpg" alt="młotek"  ></td>
					<td><?php echo "cena: ".htmlspecialchars($wartosc["MLOTEK"])." zł" ?></td>
					<td><input type="text" name="lista[]" value=<?=$wartosc["ID"]?> ></td>
					
					
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
					
					
					
				  
				<?php foreach ($rezultat as $wartosc) : ?>
					<tr>
						<td><?= htmlspecialchars($wartosc['NAZWA']) ?></td>
						<td><img class="obraz" src=<?="".$wartosc["NAZWA"].".jpg"?> alt="zdjecie"></td>
						<td><?php echo "cena: ".htmlspecialchars($wartosc['CENA'])." zł" ?></td>
						<td><input type="text" name="lista[]" value=<?=$wartosc["ID"]?> ></td>
					</tr>
					<?php endforeach ?>
				  
				  <tr> 
				  <td></td>
				  <td></td>
				  <td></td>
				  <td><input style="padding:10px;margin:20px;" name="przycisk" type="submit" value="zmień cenę na wpisaną obok" /></td> 
				  
				  </tr>
				 </table>
				</form>


</body>
</html>
