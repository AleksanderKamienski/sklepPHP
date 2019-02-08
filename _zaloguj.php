<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	
</head>
<body>
<?php
// define variables and set to empty values

session_start();

if(!isset($_SESSION['zalogowany']))
{
	header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
	exit();
}
if(isset($_SESSION['admin']))
{
	header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	exit();
}


if((!isset($_POST['login']))||(!isset($_POST['password'])))
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
	$login = $_POST['login'];
	$haslo = $_POST['password'];
	
	$sql = "SELECT * FROM daneosobowe where login = '$login' and haslo = '$haslo'"; 
	
	if($rezultat = @$polaczenie->query($sql))
	{
		$ilu_userow = $rezultat->num_rows;
		if($ilu_userow > 0)
		{
			$wiersz = $rezultat->fetch_assoc();
			
			if($wiersz["CZY_ADMIN"] == 1)
			{
				$_SESSION['admin'] = true;
			}
			$_SESSION['zalogowany'] = true;
			$_SESSION['id']=$wiersz['ID'];
			$_SESSION['user'] = $wiersz["LOGIN"];
			
			unset($_SESSION['blad']);
			$rezultat->free_result();
			header('Location: https://demo-php-store.herokuapp.com/_konto.php');

		}
		else
		{
			
			$_SESSION['blad'] = '<span style="color:red">Nieprawidolowy login lub haslo!</span>';
			header('Location: https://demo-php-store.herokuapp.com/_sklepInternetowy.php');
		}
	}
	
	$polaczenie->close();
}

?>
    
</body>
</html>
