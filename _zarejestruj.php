<?PHP
session_start();



require_once "_connect.php";
$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	if(!empty($_POST))
	{
		$login = $_POST['login'];
		
		$sql = "SELECT * FROM daneosobowe where login = '$login'";
		
		if($rezultat = @$polaczenie->query($sql))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow > 0)
			{
				$_SESSION['blad_rejestracja'] = '<span style="color:red">Taki login juz istnieje</span>';
				header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');

			}
			else
			{
				
				if ($_POST["flatNumber"] == NULL)
					{
						//mysql_select_db("test");
						$zapytanie="insert into daneosobowe (imie,nazwisko,login,haslo,email,miasto,kod_pocztowy,ulica,numer_domu) values
						('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["login"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["city"]."','".$_POST["zipCode"]."','".$_POST["street"]."',".$_POST["houseNumber"].")";
					}
				else{
						$zapytanie="insert into daneosobowe (imie,nazwisko,login,haslo,email,miasto,kod_pocztowy,ulica,numer_domu,numer_mieszkania) values
						('".$_POST["name"]."','".$_POST["surname"]."','".$_POST["login"]."','".$_POST["password"]."','".$_POST["email"]."','".$_POST["city"]."','".$_POST["zipCode"]."','".$_POST["street"]."',".$_POST["houseNumber"].",".$_POST["flatNumber"].")";
					}
					echo $zapytanie;
					$polaczenie->query($zapytanie);
					$link_pokaz="https://demo-php-store.herokuapp.com/_sklepInternetowy.php";
								
			}
		}
		
	$polaczenie->close();
	}
}
header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
?>
