<!DOCTYPE html>.
<html lang="cs" dir="ltr">

<head>
	  <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ODESLÁNÍ EMAILU</title>
	<link rel="shortcut icon" type="image/svg" href="images/zijememedem_logo.svg" />
	<link href="https://fonts.googleapis.com/css?family=Caveat:400,700|Overlock:400,400i,700,700i,900,900i|Sarabun:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/default.css">
</head>
<div class="container">
<div class="row text-center">
	<?
	$name = $_POST['name'];
	$message = $_POST['message'];
	$email_address = $_POST['email_address'];

	if ($name!="" and $message!="" and $email_address!="")
	{
	Mail("info@zijememedem.cz", $name, $message, "From: " . $email_address);
	echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
	}
	else
	{
	echo "<p>Váš e-mail se <strong>nepodařilo odeslat</strong> pravděpodobně jste nevyplnili všechny údaje!</p>";
	}
	?>
<br />
<button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location='index.html'">Na hlavní stránku!</button>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>
