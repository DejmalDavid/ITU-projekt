<?php 
  session_start();
  if (!isset($_SESSION['user'])) {
    header('Location: index.php'); 
	exit;
  }
?> 
<!DOCTYPE html>
<html id="map">
<head>
<title>Šarkan-Monitoring</title>
	<meta charset="UTF-8">
	<meta name="author" content="Marek Kalabza, David Dejmal, Roman ÄŚabala">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	</head>

	<body onLoad="patro1();">
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
		
		
		
<!-- Start of David Dejmal -->

<section>
<script>
var man_black = {
"man_a11_1": "a", 
"man_a11_2": "b",

"man_a12_1":"b",
"man_a12_2":"b",
"man_a13_1":"b",
"man_a13_2":"b",

"man_b_11_1":"b",
"man_b_11_2":"b",
"man_b_12_1":"b",
"man_b_12_2":"b",
"man_b_13_1":"b",
"man_b_13_2":"b",
"man_b_14_1":"b",
"man_b_14_2":"b",

"man_c_11_1":"b",
"man_c_11_2":"b",
"man_c_12_1":"b",
"man_c_12_2":"b",
"man_c_13_1":"b",
"man_c_13_2":"b",
"man_c_14_1":"b",
"man_c_14_2":"b",

"man_d_11_1":"b",
"man_d_11_2":"b",
"man_d_12_1":"b",
"man_d_12_2":"b",
"man_d_13_1":"b",
"man_d_13_2":"b",
"man_d_14_1":"b",
"man_d_14_2":"b",


"man_ab_1":"b",
"man_ab_1_2":"b",
"man_cd_1":"b",
"man_h_1":"b",

"man_s_1":"b",
"man_s_1_2":"b",

"man_j_1":"b",
"man_j_1_2":"b",

};


function patro1() {
	document.getElementById("prizemi").style.visibility = "visible";
	document.getElementById("patro").style.visibility = "hidden";
	document.getElementById("btn_1").setAttribute("class","btn btn-outline-success");
	document.getElementById("btn_2").setAttribute("class","btn btn-outline-secondary");

	men(1);

}
function patro2() {
	document.getElementById("prizemi").style.visibility = "hidden";
	document.getElementById("patro").style.visibility = "visible";
	document.getElementById("btn_1").setAttribute("class","btn btn-outline-secondary");
	document.getElementById("btn_2").setAttribute("class","btn btn-outline-success");

	men(2);
}
function men(patro) {
	var stav_a = "visible";
	var stav_b = "hidden";

	if(patro==1)
	{
		stav_a="hidden";
		stav_b="visible";	
	}

	for (var key in man_black) {
		if(man_black[key]=="a")
		{
			document.getElementById(key).style.visibility = stav_a;
		}
		else
		{
			document.getElementById(key).style.visibility = stav_b;
		}
	} 

}
</script>

<div class="container" >
	<div class="row">
	<div class="col-md-1" >
		<ul class="nav flex-md-column vertical-align">
			<li class="nav-item">
				<button id="btn_1" class="btn btn-outline-success" type="button" onclick="patro1()" onLoad="patro1()" >1.Patro</button>
			</li>
			<li class="nav-item">
				<button id="btn_2" class="btn btn-outline-secondary" type="button" onclick="patro2()">2.Patro</button>
			</li>
		</ul>
	</div>
	<div class="col-md-8">

	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:60px; top:115px; z-index: 10;" id="man_a11_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:90px; top:115px; z-index: 10;" id="man_a11_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:60px; top:285px; z-index: 10;" id="man_a12_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:90px; top:285px; z-index: 10;" id="man_a12_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:60px; top:460px; z-index: 10;" id="man_a13_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:90px; top:460px; z-index: 10;" id="man_a13_2">

	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:400px; top:115px; z-index: 10;" id="man_b_11_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:430px; top:115px; z-index: 10;" id="man_b_11_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:410px; top:285px; z-index: 10;" id="man_b_12_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:430px; top:285px; z-index: 10;" id="man_b_12_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:410px; top:460px; z-index: 10;" id="man_b_13_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:430px; top:460px; z-index: 10;" id="man_b_13_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:410px; top:630px; z-index: 10;" id="man_b_14_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:430px; top:630px; z-index: 10;" id="man_b_14_2">

	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:580px; top:115px; z-index: 10;" id="man_c_11_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:610px; top:115px; z-index: 10;" id="man_c_11_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:580px; top:285px; z-index: 10;" id="man_c_12_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:610px; top:285px; z-index: 10;" id="man_c_12_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:580px; top:460px; z-index: 10;" id="man_c_13_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:610px; top:460px; z-index: 10;" id="man_c_13_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:580px; top:630px; z-index: 10;" id="man_c_14_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:610px; top:630px; z-index: 10;" id="man_c_14_2">

	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:950px; top:115px; z-index: 10;" id="man_d_11_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:980px; top:115px; z-index: 10;" id="man_d_11_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:950px; top:285px; z-index: 10;" id="man_d_12_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:980px; top:285px; z-index: 10;" id="man_d_12_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:950px; top:460px; z-index: 10;" id="man_d_13_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:980px; top:460px; z-index: 10;" id="man_d_13_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:950px; top:630px; z-index: 10;" id="man_d_14_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:980px; top:630px; z-index: 10;" id="man_d_14_2">


	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:250px; top:300px; z-index: 10;" id="man_ab_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:250px; top:350px; z-index: 10;" id="man_ab_1_2">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:760px; top:300px; z-index: 10;" id="man_cd_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:370px; top:720px; z-index: 10;" id="man_h_1">

	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:790px; top:825px; z-index: 10;" id="man_s_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:760px; top:825px; z-index: 10;" id="man_s_1_2">

	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:560px; top:1000px; z-index: 10;" id="man_j_1">
	<img src="./map/man_black.png"  height="42" width="42" style="position:absolute; left:590px; top:1000px; z-index: 10;" id="man_j_1_2">

	<img src="./map/map_1.png" usemap="#image-map" id="prizemi" >
<map name="image-map" >
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
    <area target="" alt="Kuchyne-1" title="Kuchyně-1" href="" coords="925,932,1018,1209" shape="rect">
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
		

	
</div>
</div>
</div>
</section>

	<footer style="text-align: center;">
		<span>Copyright © 2018 | Šarkan-Monitoring</span>
	</footer>	
	</body>
</html>