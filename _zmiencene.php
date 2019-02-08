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
$i=0;

/*
if(!(isset($_SESSION['zalogowany'])))
{
	header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
	exit();
}*/

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
	if ($_POST["MLOTEK"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["MLOTEK"]". WHERE id=1;";
			$polaczenie->query($sql);
		}
	if ($_POST["WIERTARKA"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["WIERTARKA"]". WHERE id=2;";
			$polaczenie->query($sql);
		}
	if ($_POST["GWOZDZIE"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["GWOZDZIE"]". WHERE id=3;";
			$polaczenie->query($sql);
		}
	if ($_POST["LOM"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["LOM"]". WHERE id=4;";
			$polaczenie->query($sql);
		}
	if ($_POST["PILARKA"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["PILARKA"]". WHERE id=5;";
			$polaczenie->query($sql);
		}
	if ($_POST["BRZESZCZOT"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["BRZESZCZOT"]". WHERE id=6;";
			$polaczenie->query($sql);
		}
	if ($_POST["SUWMIARKA"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["SUWMIARKA"]". WHERE id=7;";
			$polaczenie->query($sql);
		}
	if ($_POST["OLOWEK"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["OLOWEK"]". WHERE id=8;";
			$polaczenie->query($sql);
		}
	if ($_POST["HEBEL"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["HEBEL"]". WHERE id=9;";
			$polaczenie->query($sql);
		}
	if ($_POST["SRUBOKRET"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["SRUBOKRET"]". WHERE id=10;";
			$polaczenie->query($sql);
		}
	if ($_POST["KOMBINERKI"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["ELEKTRODY"]". WHERE id=11;";
			$polaczenie->query($sql);
		}
	if ($_POST["ELEKTRODY"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["ELEKTRODY"]". WHERE id=12;";
			$polaczenie->query($sql);
		}
	if ($_POST["KATOWKA"] != NULL)
		{
			$sql="UPDATE produkty SET cena=."$_POST["KATOWKA"]". WHERE id=13;";
			$polaczenie->query($sql);
		}
		
	/*
	if(!empty($_POST["lista"]))
	{
		echo "asas";
		foreach((array)$_POST["lista"] as $wartosc){
		
		if($wartość != "")	
		{
		echo $wartosc;
		//$sql="UPDATE produkty SET cena=.'"$wartosc"'. WHERE id=."$i".;";
		echo $sql;
		//$sql="delete from daneosobowe_produkty where daneosobowe_produkty.ID = ".$wartosc."";
		//$rezultat = @$polaczenie->query($sql);
		}
		$i=$i+1;

		}*/
	
	
	//header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	$polaczenie->close();

}
	
?>


</body>
</html>
