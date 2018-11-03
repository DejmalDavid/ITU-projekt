<?php 
  session_start();
  require_once 'db.php';

  $Login=$_POST['Login'];
  $Password=md5($_POST['Password']);	

  $sql = "SELECT * FROM Users WHERE password=:pswd AND login=:login"; 
  $result = $conn->prepare($sql); 
  $result->bindParam(':login', $Login);
  $result->bindParam(':pswd', $Password);
  $result->execute(); 
  $rows = count($result->fetchAll()); 
  $conn = null;

  if (isset($_SESSION['user'])){
	header('Location: homepage.php');
	exit;
  }else if (isset($_GET['logout'])) {
    unset($_SESSION['user']);      
    header('Location: index.php');
	exit;  
  }else if (isset($_GET['login']) && ($rows == 1)) {
	$_SESSION['user']=$_POST['Login'];   
    header('Location: homepage.php');
	exit;
  }else if (isset($_GET['login'])) {
    header('Location: index.php');	  
	exit;
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
		  			<div class="col-xs-24 mb-2"><input type="text" class="login" name="Login" placeholder="Uživatelské jméno" required></div>
					<div class="col-xs-24 mb-2"><input type="password" class="passwd" name="Password" placeholder="Heslo" required></div>
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