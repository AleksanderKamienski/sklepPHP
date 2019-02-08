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
i=0;
if(!(isset($_SESSION['zalogowany'])))
{
	header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
	exit();
}

echo '[<a href="https://demo-php-store.herokuapp.com/_logout.php">Wyloguj sie!</a>]</p>';
echo '[<a href="https://demo-php-store.herokuapp.com/_konto.php">Wróć do dodawania produktów!</a>]</p>';


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
		
		if($wartość != "")
		{
		$sql="UPDATE produkty SET cena=."$wartosc". WHERE id=."$i".;";
		echo $sql;
		//$sql="delete from daneosobowe_produkty where daneosobowe_produkty.ID = ".$wartosc."";
		$rezultat = @$polaczenie->query($sql);
		}
		i=i+1;

		}
	
	}
	//header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	$polaczenie->close();

}
	
?>


</body>
</html>
