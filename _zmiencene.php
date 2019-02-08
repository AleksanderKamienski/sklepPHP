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
	if (is_numeric($_POST["MLOTEK"])&& $_POST["MLOTEK"] > 0 && $_POST["MLOTEK"] == round($_POST["MLOTEK"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["MLOTEK"]." WHERE id=1;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["WIERTARKA"])&& $_POST["WIERTARKA"] > 0 && $_POST["WIERTARKA"] == round($_POST["WIERTARKA"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["WIERTARKA"]." WHERE id=2;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["GWOZDZIE"])&& $_POST["GWOZDZIE"] > 0 && $_POST["GWOZDZIE"] == round($_POST["GWOZDZIE"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["GWOZDZIE"]." WHERE id=3;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["LOM"])&& $_POST["LOM"] > 0 && $_POST["LOM"] == round($_POST["LOM"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["LOM"]." WHERE id=4;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["PILARKA"])&& $_POST["PILARKA"] > 0 && $_POST["PILARKA"] == round($_POST["PILARKA"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["PILARKA"]." WHERE id=5;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["BRZESZCZOT"])&& $_POST["BRZESZCZOT"] > 0 && $_POST["BRZESZCZOT"] == round($_POST["BRZESZCZOT"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["BRZESZCZOT"]." WHERE id=6;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["SUWMIARKA"])&& $_POST["SUWMIARKA"] > 0 && $_POST["SUWMIARKA"] == round($_POST["SUWMIARKA"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["SUWMIARKA"]." WHERE id=7;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["OLOWEK"])&& $_POST["OLOWEK"] > 0 && $_POST["OLOWEK"] == round($_POST["OLOWEK"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["OLOWEK"]." WHERE id=8;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["HEBEL"])&& $_POST["HEBEL"] > 0 && $_POST["HEBEL"] == round($_POST["HEBEL"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["HEBEL"]." WHERE id=9;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["SRUBOKRET"])&& $_POST["SRUBOKRET"] > 0 && $_POST["SRUBOKRET"] == round($_POST["SRUBOKRET"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["SRUBOKRET"]." WHERE id=10;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["KOMBINERKI"])&& $_POST["KOMBINERKI"] > 0 && $_POST["KOMBINERKI"] == round($_POST["KOMBINERKI"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["KOMBINERKI"]." WHERE id=11;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["ELEKTRODY"])&& $_POST["ELEKTRODY"] > 0 && $_POST["ELEKTRODY"] == round($_POST["ELEKTRODY"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["ELEKTRODY"]." WHERE id=12;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	}
	
	if (is_numeric($_POST["KATOWKA"])&& $_POST["KATOWKA"] > 0 && $_POST["KATOWKA"] == round($_POST["KATOWKA"], 0))
		{
			$sql="UPDATE produkty SET cena=".$_POST["KATOWKA"]." WHERE id=13;";
			$polaczenie->query($sql);
		}
	else 
	{
		$_SESSION['nie_numer'] = '<span style="color:red">podaj liczbę dodatnią</span>';
			header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
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
	
	
	header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	$polaczenie->close();

}
	
?>


</body>
</html>
