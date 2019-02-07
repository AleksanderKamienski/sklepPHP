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
	
	
	$sql="delete from daneosobowe_produkty where daneosobowe_produkty.ID = ".$wartosc."";
	$rezultat = @$polaczenie->query($sql);
	
		header('Location: koszyk.php');

	}
	
	
	
	$polaczenie->close();
}

?>