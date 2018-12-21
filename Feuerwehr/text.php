<!doctype html>
<html>

	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="./css/style_contentpage.css" rel="stylesheet" type="text/css" />
		<link href="./css/Footer.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="./Img/Tuendern_0.ico" type="image/vnd.microsoft.icon" />
		<script src="https://code.jquery.com/jquery-latest.js"></script>
		<title>Freiwillige Feuerwehr Tündern</title>
		
	</head>
	<body scroll="no">
		<header>
			<?php
				echo file_get_contents('./menus/nav.html');
			?>
		</header>
			<div class="all">

					<div id="media_options">
						<ul class="list" id="btn_list">			
							<a class="btn active" onclick="filterSelection('all')"><li class="list_option" id="list_first">Alle</li></a>
							<a class="btn" onclick="filterSelection('feuer')"><li class="list_option" id="list_first">Feuer</li></a>
							<a class="btn" onclick="filterSelection('th')"><li class="list_option">Technische Hilfeleistung</li></a>
							<a class="btn" onclick="filterSelection('bma')"><li class="list_option">Brandmeldaanlage</li></a>
							<a class="btn" onclick="filterSelection('fehl')"><li class="list_option">Fehlalarm</li></a>

						</ul>
					</div>

				<div class="content">
					<div class="month">
						<h1>Dezember</h1>
					<hr>
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Feuer Mittel: Sana Klinkum Hameln - Brandgeruch in der Notaufnahme</h3>
								</div>
								<hr>
								<div class="e_bericht">
									In der Notaufnahme wurde gegen 5 Uhr morgens Brandgeruch durch Pflegepersonal wahrgenommen. Am Einsatzort konnte jedoch kein Feuer gefunden werden jedoch finden zur Zeit Bauarbeiten statt die den Geruch erzeugt haben können.
								</div>
							</div>
						</div>
						<br>
						<div class="filterDiv th">
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Sturmtief „Friederike“ beschäftigt auch uns</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am Donnerstag den 18. Januar 2017 wurde die Ortswehr kurz nach 16 Uhr alarmiert, um die gemeldeten Einsätze mit abzuarbeiten. Mit 13 Kammeraden und Kameradinnen machten wir uns auf den Weg um gemeldete Schäden zu sichten und um sie gegebenenfalls zu beseitigen. Gegen 20 Uhr kehrten wir dann wieder zurück.
								</div>
							</div>
						</div>
						<br>
						<div class="filterDiv bma">
							<div class="e_img">
								<img src="./img/BMA.jpg" alt="Brandmeldanlage">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Feuer BMA: Tündern JA - Rauchentwicklung im Stromverteilerkasten + MANV</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am Abend war in einem Zellenblock der Jugendanstalt Hameln durch ein Stück Papier im Verteilerkasten ein Kabelbrand ausgelöst worden. Aufgrund der Entstandenden Rauchgase mussten mehrere Personen medizinische Versorgt werden. Der Brand selbst konnte schnell gelöscht werden und die Anlage wurde vom Stromnetz getrennt.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>November</h1>
					<hr>
					<div class="filterDiv fehl">
							<div class="e_img">
								<img src="./img/fail.png" alt="Fehlalarm">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Feuer BMA: Sana Klinkum Hameln</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Fehlauslösung
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>Oktober</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>September</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>August</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>Juli</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>Juni</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>Mai</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>April</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>März</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>Februar</h1>
					<hr>
					</div>
					<hr>
					<div class="month">
						<h1>Januar</h1>
					<hr>
					</div>
					<hr>
				</div>
			</div>
			<script>
			filterSelection("all")
			function filterSelection(c) {
			  var x, i;
			  x = document.getElementsByClassName("filterDiv");
			  if (c == "all") c = "";
			  <!--Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected-->
			  for (i = 0; i < x.length; i++) {
				RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
			  }
			}

			<!--Show filtered elements-->
			function AddClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				if (arr1.indexOf(arr2[i]) == -1) {
				  element.className += " " + arr2[i];
				}
			  }
			}

			<!--Hide elements that are not selected-->
			function RemoveClass(element, name) {
			  var i, arr1, arr2;
			  arr1 = element.className.split(" ");
			  arr2 = name.split(" ");
			  for (i = 0; i < arr2.length; i++) {
				while (arr1.indexOf(arr2[i]) > -1) {
				  arr1.splice(arr1.indexOf(arr2[i]), 1); 
				}
			  }
			  element.className = arr1.join(" ");
			}

			<!--Add active class to the current control button (highlight it)-->
			var btns = document.getElementsByClassName("btn");
			for (var i = 0; i < btns.length; i++) {
			  btns[i].addEventListener("click", function() {
				var current = document.getElementsByClassName("active");
				current[0].className = current[0].className.replace(" active", "");
				this.className += " active";
			  });
			}
			
		</script>
			<hr class="footer_hr">
		<footer>
			<a href="./Impressum.php">Impressum</a>
		</footer>
	</body>
</html>