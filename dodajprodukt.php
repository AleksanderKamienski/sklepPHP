<?PHP
session_start();
require_once "connect.php";
$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	

	foreach((array) $_POST["lista"] as $wartosc){
	$sql="INSERT INTO DANEOSOBOWE_PRODUKTY (ID_OSOBA, ID_PRODUKT) VALUES (".$_SESSION["id"].",'" .$wartosc."')";
	
	$rezultat = @$polaczenie->query($sql);
	header('Location: gra.php');
	
	
	}
	
	$polaczenie->close();
}

?>