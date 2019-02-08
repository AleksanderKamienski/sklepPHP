<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<script type="text/javascript" src="file.js"></script>
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

<?php
// define variables and set to empty values
session_start();
if(isset($_SESSION['user'])==true)
{
	header('Location: https://demo-php-store.herokuapp.com/_konto.php');
	exit();	
}
if(isset($_SESSION['admin']) and $_SESSION['admin']==true)
{
	header('Location: https://demo-php-store.herokuapp.com/_kontoAdmin.php');
	exit();	
}
$name = $surname = $login = $password = $email = $city = $zipCode = $street = $houseNumber = $flatNumber = $education = "";

require_once "_connect.php";

$polaczenie = @new mysqli($host,$db_user, $db_password, $db_name);
if($polaczenie->connect_errno!=0)
{
	echo "Error: ".$polaczenie->connect_errno;
}
else
{
	
	$sql = "SELECT NAZWA, CENA FROM produkty";
	
	$rezultat = $polaczenie->query($sql);

}
	
?>


    <div class="calosc"> 
        <div class="naglowek">SKLEP INTERNETOWY "MAJSTER"
            </div> 
        <div class="menu"> 
            <h2>Zaloguj się</h2> 
			<form name="myFormLogin" method="post" action="https://demo-php-store.herokuapp.com/_zaloguj.php"> 
			Login: <input type="text" name="login" maxlength = "30">
			<br></br>
			Hasło: <input type="password" name="password" maxlength = "30">
			<p>
			<input type="submit" value="Zaloguj się" >
			</p>
			<?php
				if(isset($_SESSION['blad']))
				echo($_SESSION['blad']);
			?>
			</form>
        </div> 
        <div class="tresc"> 
			Należy być zalogowanym w celu dodania produktu do koszyka 
			<br></br>
            Produkty, które mogą państwo u nas kupić:
						<br></br>
				<table style="width:100%">
				<?php foreach ($rezultat as $wartosc) : ?>
					<tr>
						<td><?= htmlspecialchars($wartosc['NAZWA']) ?></td>
						<td><img class="obraz" src=<?="".$wartosc["NAZWA"].".jpg"alt=htmlspecialchars($wartosc['NAZWA']) ?> ></td>
						<td><?php echo "cena: ".htmlspecialchars($wartosc['CENA'])." zł" ?></td>
					</tr>
					<?php endforeach ?>
				 
				 </table>
        </div> 
		<div class="menu"> 
				<h1>Formularz rejestracyjny</h1>
					<p><span class="error">* wymagane pola</span></p>

					 <form name="myForm" method="post" action="https://demo-php-store.herokuapp.com/_zapisujemy.php" onsubmit="return validateForm();"> 


  
					  Imię: <input type="text" name="name" value="<?php echo $name;?>" maxlength = "30">
					  <span class="error">* </span>
					  <br><br>
					  Nazwisko: <input type="text" name="surname" maxlength = "30" value="<?php echo $surname;?>">
					  <span class="error">* </span>
					  <br><br>
					  Login: <input type="text" name="login" maxlength = "30" value="<?php echo $surname;?>">
					  <span class="error">* </span>
					  <br><br>
					  Hasło: <input type="password" name="password" maxlength = "30" value="<?php echo $surname;?>">
					  <span class="error">* </span>
					  <br><br>
					  E-mail: <input type="text" name="email" maxlength = "30" value="<?php echo $email;?>">
					  <span class="error">* </span>
					  <br><br>
					  Miasto: <input type="text" name="city" maxlength = "30" value="<?php echo $city;?>">
					  <span class="error">* </span>
					  <br><br>
					  Kod pocztowy: <input type="text" name="zipCode" maxlength = "5" value="<?php echo $zipCode;?>">
					  <span class="error">* </span>
					  <br><br>
					  Ulica: <input type="text" name="street" maxlength = "30" value="<?php echo $street;?>">
					  <span class="error">* </span>
					  <br><br>
					  Numer domu: <input type="text" name="houseNumber" maxlength = "4" value="<?php echo $houseNumber;?>">
					  <span class="error">* </span>
					  <br><br>
					  Numer mieszkania: <input type="text" maxlength = "4" name="flatNumber" value="<?php echo $flatNumber;?>">
					  
					  <p>
					  <input type="submit" value="Zarejestruj się"/>
					  </p>
					  <?php
						if(isset($_SESSION['blad_rejestracja']))
							echo($_SESSION['blad_rejestracja']);
						?>

					  </form>
        </div> 
        <div class="stopka">W razie pytań prosimy o kontakt! e-mail: sklep-majster@gmail.com, telefon: 000 000 000</div> 
    </div>
</body>
</html>
