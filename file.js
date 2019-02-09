
	//validating input data
function validateForm() {

	//name

	var x = document.forms["myForm"]["name"].value;
	if (x == "") {
		alert("Imie jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W imieniu dozwolone są tylko niepolskie litery");
		return false;
	}
	//surname
	x = document.forms["myForm"]["surname"].value;

	if (x == "") {
		alert("Nazwisko jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W nazwisku dozwolone są tylko niepolskie litery");
		return false;
	}
	//login
	x = document.forms["myForm"]["login"].value;

	if (x == "") {
		alert("Login jest wymagany");
		return false;
		}

	else if (!(/^[a-zA-Z0-9]+$/.test(x)))
	{
		alert("W loginie dozwolone są tylko niepolskie litery i cyfry");
		return false;
	}
	//password
	x = document.forms["myForm"]["password"].value;

	if (x == "") {
		alert("Hasło jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z0-9]+$/.test(x)))
	{
		alert("W haśle dozwolone są tylko niepolskie litery i cyfry");
		return false;
	}

	x = document.forms["myForm"]["email"].value;

	if (x == "") {
		alert("Adres e-mail jest wymagany");
		return false;
		}
		
	else if (!(/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(x)))
	{
		alert("Zły format adresu e-mail");
		return false;
	}

	x = document.forms["myForm"]["city"].value;

	if (x == "") {
		alert("Miasto jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W mieście dozwolone są tylko niepolskie litery");
		return false;
	}

	x = document.forms["myForm"]["zipCode"].value;

	if (x == "") {
		alert("Kod pocztowy jest wymagany");
		return false;
		}

	else if (!(/^\d{5}$/.test(x)))
	{
		alert("Kod pocztowy powinien zawierac 5 cyfr nieoddzielonych przecinkiem");
		return false;
	}
	
	x = document.forms["myForm"]["street"].value;

	if (x == "") {
		alert("Ulica jest wymagana");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W nazwie ulicy dozwolone są tylko niepolskie litery");
		return false;
	}

	x = document.forms["myForm"]["houseNumber"].value;

	if (x == "") {
		alert("Numer domu jest wymagany");
		return false;
		}

	else if (!(/^\d{1,4}$/.test(x)))
	{
		alert("Numer domu powinien zawierac od 1 do 4 cyfr ");
		return false;
	}

	x = document.forms["myForm"]["flatNumber"].value;

	if (!(/^\d{0,4}$/.test(x)))
	{
		alert("Numer mieszkania powinien zawierac od 1 do 4 cyfr ");
		return false;
	}


}


function validateFormEmail() {

	//name

	var x = document.forms["myForm"]["name"].value;
	if (x == "") {
		alert("Imie jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W imieniu dozwolone są tylko niepolskie litery");
		return false;
	}
	//surname
	x = document.forms["myForm"]["surname"].value;

	if (x == "") {
		alert("Nazwisko jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W nazwisku dozwolone są tylko niepolskie litery");
		return false;
	}
	//login
	x = document.forms["myForm"]["login"].value;

	if (x == "") {
		alert("Login jest wymagany");
		return false;
		}

	else if (!(/^[a-zA-Z0-9]+$/.test(x)))
	{
		alert("W loginie dozwolone są tylko niepolskie litery i cyfry");
		return false;
	}
	//password
	

	x = document.forms["myForm"]["email"].value;

	if (x == "") {
		alert("Adres e-mail jest wymagany");
		return false;
		}
		
	else if (!(/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+([^<>()\.,;:\s@\"]{2,}|[\d\.]+))$/.test(x)))
	{
		alert("Zły format adresu e-mail");
		return false;
	}

	x = document.forms["myForm"]["city"].value;

	if (x == "") {
		alert("Miasto jest wymagane");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W mieście dozwolone są tylko niepolskie litery");
		return false;
	}

	x = document.forms["myForm"]["zipCode"].value;

	if (x == "") {
		alert("Kod pocztowy jest wymagany");
		return false;
		}

	else if (!(/^\d{5}$/.test(x)))
	{
		alert("Kod pocztowy powinien zawierac 5 cyfr nieoddzielonych przecinkiem");
		return false;
	}
	
	x = document.forms["myForm"]["street"].value;

	if (x == "") {
		alert("Ulica jest wymagana");
		return false;
		}

	else if (!(/^[a-zA-Z]+$/.test(x)))
	{
		alert("W nazwie ulicy dozwolone są tylko niepolskie litery");
		return false;
	}

	x = document.forms["myForm"]["houseNumber"].value;

	if (x == "") {
		alert("Numer domu jest wymagany");
		return false;
		}

	else if (!(/^\d{1,4}$/.test(x)))
	{
		alert("Numer domu powinien zawierac od 1 do 4 cyfr ");
		return false;
	}

	x = document.forms["myForm"]["flatNumber"].value;

	if (!(/^\d{0,4}$/.test(x)))
	{
		alert("Numer mieszkania powinien zawierac od 1 do 4 cyfr ");
		return false;
	}


}

