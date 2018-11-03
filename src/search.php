<?php 
  
  session_start();
  require_once "db.php";

  if(isset($_POST['search'])){
	$search = $_POST['search'];
  }

  $sql = "SELECT * FROM Prisoners WHERE first_name LIKE :search OR last_name LIKE :search";
  $result = $conn->prepare($sql);
  $result->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
  $result->execute();

  $fetch_result = $result->fetchAll();
  $conn = null;

  if (!isset($_SESSION['user'])) {
    header('Location: index.php'); 
	exit;
  }

?> 
<!DOCTYPE html>
<html id="search">
<head>
<title>Šarkan-Monitoring</title>
	<meta charset="UTF-8">
	<meta name="author" content="Marek Kalabza, David Dejmal, Roman Čabala">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".click-row").click(function() {
				window.location = $(this).data("href");
			});
		});
	</script>
	</head>

	<body>
	<header class="container-fluid">
		<nav class="navbar navbar-light">
			<form class="form-inline vertical-align form-header">
				<div class="navigation">
					<h1>Šarkan Monitoring System</h1>
					<img src="#" height="70" width="70" alt="Šarkan Monitoring System logo">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-4">
								<a href="/homepage.php"><button class="btn btn-outline-secondary" type="button">Domů</button>
								</a>
							</div>
							<div class="col-md-4">
								<a href="/map.php"><button class="btn btn-outline-secondary" type="button">Mapa</button>
								</a>
							</div>
							<div class="col-md-4">
								<a href="/search.php"><button class="btn btn-outline-success" type="button">Vyhledávání</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</nav>
	</header>
	<section>	
		
	<h2>VYHLEDAVANI VOLE!</h2>
		
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-10 col-lg-8">
				<form class="card card-sm" method="POST">
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<div class="col">
							<input class="form-control form-control-lg form-control-borderless" name="search" type="search" placeholder="Hledat vězně">
						</div>
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Hledat</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
		
	<table class="table">
  		<thead>
			<tr>
			  	<th>Jméno</th>
				<th>Příjimení</th>
				<th>Věk</th>
				<th>Délka trestu</th>
				<th>Číslo cely</th>
				<th>Level nebezpečí</th>
			</tr>
  		</thead>
  		<tbody>
		<?php
			foreach( $fetch_result as $row ){
				echo "<tr class='click-row' data-href='detail.php?personal_id=".$row["id"]."'>";
				echo "<td>".$row["first_name"]."</td>";
				echo "<td>".$row["last_name"]."</td>";
				echo "<td>".$row["age"]."</td>";
				echo "<td>".$row["penalty_time"]."</td>";
				echo "<td>".$row["num_of_cell"]."</td>";
				echo "<td>".$row["danger_level"]."</td>";
				echo "</tr>";
			}

		?>
	  	</tbody>
	</table>
		
		
	</section>

	<footer style="text-align: center;">
		<span>Copyright © 2018 | Šarkan-Monitoring</span>
	</footer>	
	</body>
</html>