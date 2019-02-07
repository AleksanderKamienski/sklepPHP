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
echo '[<a href="logout.php">Wyloguj sie!</a>]</p>';
echo '[<a href="gra.php">Wróć do dodawania produktów!</a>]</p>';
$SUMA = 0;

require_once "connect.php";

$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{

	$sql = "SELECT dp.ID as ID, CENA, NAZWA FROM produkty p, daneosobowe_produkty dp 
	where dp.ID_PRODUKT = p.ID and dp.ID_OSOBA=".$_SESSION["id"]."";
	
	if($rezultat = $polaczenie->query($sql))
	{	
		/*
		$SUMA = 0;
		//echo ($tablica['NAZWA']);
		echo "<table>";
		
		echo "<tr>";
		echo "<td>"."Produkt:"."</td>";
		echo "<td>"."Cena:"."</td>";
		echo "</tr>";
			
		foreach( $rezultat as $wartosc)
		{
			echo "<tr>";
			echo "<td>".$wartosc['NAZWA']."</td>";
			echo "<td>".$wartosc['CENA']."</td>";
			echo "<td>".$wartosc['ID']."</td>";
			echo "</tr>";
			$SUMA = $SUMA + $wartosc['CENA'];
		}
		
		echo "<tr>";
		echo "<td>"."SUMA"."</td>";
		echo "<td>".$SUMA."</td>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>"."SUMA"."</td>";
		echo "<td>".$SUMA."</td>";
		echo "</tr>";
		
		echo "</table>";
		$i = 0;
		//$SUMA = 0;
		*/
		
	}
}
	
?>


			
Produkty, które znajdują się w Państwa koszyku:
			<br></br>
			<form name ="dodajProdukt" method = post action = "http://localhost/Lekcja4/usunProdukt.PHP">
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


</body>
</html>
