<?php 
  	session_start();

	if(isset($_GET['login'])){
	  	header('location: homepage.php');
	}else{
		
	}

?> 
<!DOCTYPE html>
<html>
<head>
<title>Šarkan-Monitoring</title>
	<meta charset="UTF-8">
	<meta name="author" content="Marek Kalabza, David Dejmal, Roman Čabala">
	<link rel="shortcut icon" href="Images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>

<body class="container">
	<section>

	<div class="vertical-center">
  		<div class="container">
	  		<form action="index.php?login=true" method="POST" class="container-center login-form">
				<fieldset>  
					<h2 class="col-xs-24 mb-2">Příhlášení</h2>
		  			<div class="col-xs-24 mb-2"><input type="text" class="login" name="Login_In" placeholder="Uživatelské jméno" required></div>
					<div class="col-xs-24 mb-2"><input type="password" class="passwd" name="Password_In" placeholder="Heslo" required></div>
					<div class="col-xs-24"><input type="submit" name="submit_in" value="Přihlásit" class="btn-primary btn login-btn"></div>
        		</fieldset>
			</form>
	 	</div>
  	</div>
		
	</section>
    
	<footer style="text-align: center;">
		<span>Copyright © 2018 | Šarkan-Monitoring</span>
	</footer>	
	</body>
</html>