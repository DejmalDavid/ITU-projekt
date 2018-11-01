<?php 
  
  session_start();

?> 
<!DOCTYPE html>
<html id="homepage">
<head>
<title>Šarkan-Monitoring</title>
	<meta charset="UTF-8">
	<meta name="author" content="Marek Kalabza, David Dejmal, Roman Čabala">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
								<a href="/map.php"><button class="btn btn-outline-success" type="button">Mapa</button>
								</a>
							</div>
							<div class="col-md-4">
								<a href="/search.php"><button class="btn btn-outline-secondary" type="button">Vyhledávání</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</form>
		</nav>
	</header>
		
	<section>
		
		
		
		
	<h2>MAPA VOLE!</h2>
	
	<img src="./map/map_1.png" usemap="#image-map" id="prizemi">

<map name="image-map">
    <area target="" alt="Cela-A11" title="Cela-A11" href="" coords="7,168,190,3" shape="rect">
    <area target="" alt="Cela-A12" title="Cela-A12" href="" coords="5,340,188,175" shape="rect">
    <area target="" alt="Cela-A13" title="Cela-A13" href="" coords="192,515,6,345" shape="rect">
    <area target="" alt="Cela-A14" title="Cela-A14" href="" coords="7,517,190,685" shape="rect">
    <area target="" alt="Cela-B11" title="Cela-B11" href="" coords="321,3,513,169" shape="rect">
    <area target="" alt="Cela-B12" title="Cela-B12" href="" coords="323,172,512,339" shape="rect">
    <area target="" alt="Cela-B13" title="Cela-B13" href="" coords="321,349,511,514" shape="rect">
    <area target="" alt="Cela-B14" title="Cela-B14" href="" coords="323,522,510,684" shape="rect">
    <area target="" alt="Cela-C11" title="Cela-C11" href="" coords="515,3,703,172" shape="rect">
    <area target="" alt="Cela-C12" title="Cela-C12" href="" coords="516,175,702,342" shape="rect">
    <area target="" alt="Cela-C13" title="Cela-C13" href="" coords="513,344,701,515" shape="rect">
    <area target="" alt="Cela-C14" title="Cela-C14" href="" coords="516,519,703,685" shape="rect">
    <area target="" alt="Cela-D11" title="Cela-D11" href="" coords="828,3,1018,172" shape="rect">
    <area target="" alt="Cela-D12" title="Cela-D12" href="" coords="832,178,1020,342" shape="rect">
    <area target="" alt="Cela-D13" title="Cela-D13" href="" coords="830,350,1022,515" shape="rect">
    <area target="" alt="Cela-D14" title="Cela-D14" href="" coords="830,518,1020,684" shape="rect">
    <area target="" alt="Chodba-AB1" title="Chodba-AB1" href="" coords="195,3,322,685" shape="rect">
    <area target="" alt="Chodba-CD1" title="Chodba-CD1" href="" coords="705,4,828,687" shape="rect">
    <area target="" alt="Chodba-H1" title="Chodba-H1" href="" coords="1018,687,1018,770,516,770,513,797,382,797,2,800,2,685" shape="poly">
    <area target="" alt="Chodba-S1" title="Chodba-S1" href="" coords="387,801,517,1209" shape="rect">
    <area target="" alt="Sprchy-1" title="Sprchy-1" href="" coords="518,770,1017,930" shape="rect">
    <area target="" alt="Jidelna-1" title="Jidelna-1" href="" coords="521,933,925,1208" shape="rect">
    <area target="" alt="Kuchyne-1" title="Kuchyn�-1" href="" coords="925,932,1018,1209" shape="rect">
    <area target="" alt="Dozorna-1" title="Dozorna-1" href="" coords="3,802,386,1210" shape="rect">
</map>


	<img src="./map/map_2.png" usemap="#image-map2" id="patro">

<map name="image-map2">
    <area target="" alt="Cela-A21" title="Cela-A21" href="" coords="7,168,190,3" shape="rect">
    <area target="" alt="Cela-A22" title="Cela-A22" href="" coords="5,340,188,175" shape="rect">
    <area target="" alt="Cela-A23" title="Cela-A23" href="" coords="192,515,6,345" shape="rect">
    <area target="" alt="Cela-A24" title="Cela-A24" href="" coords="7,517,190,685" shape="rect">
    <area target="" alt="Cela-B21" title="Cela-B21" href="" coords="321,3,513,169" shape="rect">
    <area target="" alt="Cela-B22" title="Cela-B22" href="" coords="323,172,512,339" shape="rect">
    <area target="" alt="Cela-B23" title="Cela-B23" href="" coords="321,349,511,514" shape="rect">
    <area target="" alt="Cela-B24" title="Cela-B24" href="" coords="323,522,510,684" shape="rect">
    <area target="" alt="Cela-C21" title="Cela-C21" href="" coords="515,3,703,172" shape="rect">
    <area target="" alt="Cela-C22" title="Cela-C22" href="" coords="516,175,702,342" shape="rect">
    <area target="" alt="Cela-C23" title="Cela-C23" href="" coords="513,344,701,515" shape="rect">
    <area target="" alt="Cela-C24" title="Cela-C24" href="" coords="516,519,703,685" shape="rect">
    <area target="" alt="Cela-D21" title="Cela-D21" href="" coords="828,3,1018,172" shape="rect">
    <area target="" alt="Cela-D22" title="Cela-D22" href="" coords="832,178,1020,342" shape="rect">
    <area target="" alt="Cela-D23" title="Cela-D23" href="" coords="830,350,1022,515" shape="rect">
    <area target="" alt="Cela-D24" title="Cela-D24" href="" coords="830,518,1020,684" shape="rect">
    <area target="" alt="Chodba-AB2" title="Chodba-AB2" href="" coords="195,3,322,685" shape="rect">
    <area target="" alt="Chodba-CD2" title="Chodba-CD2" href="" coords="705,4,828,687" shape="rect">
    <area target="" alt="Chodba-H2" title="Chodba-H2" href="" coords="1018,687,1018,770,516,770,513,797,382,797,2,800,2,685" shape="poly">
    <area target="" alt="Chodba-S2" title="Chodba-S2" href="" coords="387,801,517,1209" shape="rect">
    <area target="" alt="Sprchy-2" title="Sprchy-2" href="" coords="518,770,1017,930" shape="rect">
    <area target="" alt="Knihovna-2" title="Jidelna-2" href="" coords="521,933,1018,1208" shape="rect">
    <area target="" alt="Dozorna-2" title="Dozorna-2" href="" coords="3,802,386,1210" shape="rect">
</map>
		

	<img src="./map/man_black.png"  height="42" width="42" id="black">
	<img src="./map/man_red.png" height="42" width="42" id="green">
	<img src="./map/man_green.png" height="42" width="42" id="green">

	</section>

	<footer style="text-align: center;">
		<span>Copyright © 2018 | Šarkan-Monitoring</span>
	</footer>	
	</body>
</html>
