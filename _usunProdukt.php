<?PHP
session_start();

if(!(isset($_SESSION['zalogowany'])==true))
{
	header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
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
	
	
	if(!empty($_POST["lista"]))
	{
			
		foreach((array) $_POST["lista"] as $wartosc){
		
		
		$sql="delete from daneosobowe_produkty where daneosobowe_produkty.ID = ".$wartosc."";
		$rezultat = @$polaczenie->query($sql);
		
			header('Location: https://demo-php-store.herokuapp.com/_koszyk.php');

		}
	
	}
	header('Location: https://demo-php-store.herokuapp.com/_koszyk.php');
	$polaczenie->close();
}

?>