<?PHP
session_start();
require_once "_connect.php";
$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	
	if(!empty($_POST["lista"]))
	{
		
		foreach((array) $_POST["lista"] as $wartosc)
		{
		$sql="INSERT INTO DANEOSOBOWE_PRODUKTY (ID_OSOBA, ID_PRODUKT) VALUES (".$_SESSION["id"].",'" .$wartosc."')";
		
		$rezultat = @$polaczenie->query($sql);
		header('Location: https://demo-php-store.herokuapp.com/_konto.php');
	
	
		}
	}
	header('Location: https://demo-php-store.herokuapp.com/_konto.php');
	$polaczenie->close();
}

?>