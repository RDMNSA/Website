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
	<body scroll="no" onload="animateValue('value1', 0, 1000,'filterDiv');animateValue('value2', 0, 1000,'filterDiv feuer');animateValue('value3', 0, 1000,'filterDiv th');animateValue('value4', 0, 1000,'filterDiv bma');animateValue('value5', 0, 1000,'filterDiv fehl');">
		<header>
			<?php
				echo file_get_contents('./menus/nav.html');
			?>
		</header>
			<div class="all">

					<div id="media_options">
						<ul class="list" id="btn_list">			
							<a class="btn active" onclick="filterSelection('all')"><li class="list_option" id="list_first">Alle&nbsp; <span id="value1">0</span>&nbsp;Einsätze</li></a>
							<a class="btn" onclick="filterSelection('feuer')"><li class="list_option" id="list_first">Feuer:&nbsp; <span id="value2">0</span></li></a>
							<a class="btn" onclick="filterSelection('th')"><li class="list_option">Technische Hilfeleistungen:&nbsp; <span id="value3">0</span></li></a>
							<a class="btn" onclick="filterSelection('bma')"><li class="list_option">Brandmeldaanlagen:&nbsp; <span id="value4">0</span></li></a>
							<a class="btn" onclick="filterSelection('fehl')"><li class="list_option">Fehlalarme:&nbsp; <span id="value5">0</span></li></a>

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
						<br class="filterBr all">
						<div class="filterDiv th">
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Sturmtief „Friederike“ beschäftigt auch uns</h3>
								</div>
								<hr>
								<div class="e_bericht" id="rp1">
									Am Donnerstag den 18. Januar 2017 wurde die Ortswehr kurz nach 16 Uhr alarmiert, um die gemeldeten Einsätze mit abzuarbeiten. Mit 13 Kammeraden und Kameradinnen machten wir uns auf den Weg um gemeldete Schäden zu sichten und um sie gegebenenfalls zu beseitigen. Gegen 20 Uhr kehrten wir dann wieder zurück.
								</div>
							</div>
						</div>
						<br class="filterBr th">
						<div class="filterDiv th" >
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Ölspur</h3>
								</div>
								<hr>
								<div class="e_bericht" id="rp2">
									Am Montag den 19.03.2018 wurden wir zu einem Ölbekämpfungseinsatz gerufen. Elf Kameraden waren zweieinhalb Stunden damit beschäftigt, eine dreieinhalb Kilometer lange Ölspur zu beseitigen. Sie wurden durch Kammeraden aus Hameln und einer Spezialfirma unterstützt.
								</div>
							</div>
						</div>
						<br class="filterBr th">
						<div class="filterDiv th" >
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>TH -Einsatz - auslaufende Betriebsstoffe groß</h3>
								</div>
								<hr>
								<div class="e_bericht" id="rp3">
									Der erste Einsatz des Jahres 2017, kam am Vormittag des 03.01. . Auf der L424, Kreuzung Kiebitzweg ist es zu auslaufenden Betriebsstoffen einer Kehrmaschine gekommen. Zusammen mit der HWB  wurde die Gefahrenstelle abgesichert und beseitigt. Der Verkehrsfluß auf der Landesstraße wurde nicht beeinträchtigt. Es waren 7 Kameraden aus Tündern vor Ort.
								</div>
							</div>
						</div>
						<br class="filterBr th">
						<div class="filterDiv th">
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Suchaktion eines vermissten Flugzeugs</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Mit sieben Kameraden beteiligte sich die Feuerwehr Tündern, am 09.12.17 im Rahmen der Kreisbereitschaft West an der Suchaktion eines vermissten Flugzeuges. Hierzu trafen sich die Kameraden um 7.00 Uhr am Feuerwehrhaus und fuhren dann mit dem 2. Zug, gegen 8.00 Uhr den Sammelplatz Hottenbergsfeld an. Von hieraus wurde dann die Einheit nach Unsen verlegt. Nach einer weiteren Lagevorgabe wurden dann die Waldgebiete oberhalb des BHW´s durchsucht. Gegen 16.10 Uhr verließen die Einheiten die Waldgebiete und brachen die Suche, wegen der einsetzenden Dunkelheit ab. Auf der Rückfahrt zu den Standorten wurden die Einheiten informiert, dass das Flugzeug im Bereich von Coppenbrügge gefunden wurde. Der Einsatz war nach 11 Std. gegen 18.00 Uhr beendet.
								</div>
							</div>
						</div>
						<br class="filterBr all">
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
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Rauchentwicklung aus Kanal, Am Thie</h3>
								</div>
								<hr>
								<div class="e_bericht">
									In der Mittagszeit des 31.08.2016 kam es am Thie zu einer Rauchentwicklung aus einem Gulli. Gegen 13:05 Uhr wurden die Feuerwehr Tündern und die Wachbereitschaft alarmiert. Vor Ort stellte sich heraus das der Inhalt des Gullis brannte. Die eingesetzten Kräfte entfernten das Brandgut, ein weiteres ablöschen war nicht erforderlich. Es waren 6 Kameraden aus Tündern vor Ort.
								</div>
							</div>
						</div>
						<br class="filterBr feuer">
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Feuer Ladengeschäft - Hameln-Rohrsen</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am 1. Weihnachtsfeiertag kam es zu einem Großbrand in einem ehemaligen Ladengeschäft im hamelner Stadtteil Rohrsen. Die Feuerwehr Tündern wurde zur Unterstützung der Käfte der Feuerwehr Hameln alarmiert. In dem Laden, der nun als Lager genutzt wird, brannte sowohl der Inhalt (Möbel, Baumaterialien und Elektrogeräte) als auch das Gebäude an sich. Die tündernschen Kräfte lösten Kameraden in der Brandbekämpfung ab. 16 Kameraden waren am Abend im Einsatz.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>September</h1>
					<hr>
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Wohnungsbrand - Stettiner Str.</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Zu einem Wohnungsbrand in der Stettiner Straße, kam es am 15.12.2015 am Nachmittag. Nach Eintreffen an der Einsatzstelle, wurde schnell klar es in der Küche eines Mehrfamiliengebäudes zu einem Feuer gekommen ist. Während ein Angriffstrupp der Wachbereitschaft über das Treppenhaus in die Wohnung vorging, stellte Feuerwehr Tündern die Wasserversorgung und eine Abluftöffnung her. Durch die Abluftöffnung, im Brandraum, und dem Vorgehen des Atemschutztrupps mit Überdruckbelüftung konnte sowohl eine Durchzündung als auch die Verrauchung des Treppenhauses verhindert werden. Aufgrund von mehreren Nachalarmierungen waren die Freiwilligen Feuerwehren Hastenbeck, Afferde, Hilligsfeld und Hameln vor Ort, ihr Einsatz war aber nicht von nöten. Die Feuerwehr Tündern war mit 11 Einsatzkräften vor Ort.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>August</h1>
					<hr>
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>FEU Schuppen KGV Am Hastebach</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am späten Abend des 24.08.2016 wurde die Feuerwehr Tündern zu einem Schuppenbrand in einer Kleingartenkolonie gerufen. Vor Ort stellte sich heraus, dass ein massiver Schuppen brannte. Zwei tündernsche Trupps bekämpften, unter Atemschutz, den Brand. Ebenfalls vor Ort waren die Wachbereitschaft, Kameraden der Feuerwehr Kirchohsen und die Taortgruppe der Polizei. Aus Tündern waren 15 Kameraden am Einsatz beteiligt.
								</div>
							</div>
						</div>
						<br class="filterBr feuer">
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Kellerbrand Hilligsfeld</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am Nachmittag, des 08.02.2016, kam es zu einem Kellerbrand im Hamelner Ortsteil Hilligsfeld. Zur Unterstützung der Hamelner und Hilligsfelder Kameraden wurde die Feuerwehr Tündern um 15:15 Uhr von der Leitstelle alarmiert. Noch auf der Anfahrt wurde klar, dass die vor Ort befindlichen Einsatzkräfte ausreichten. Ein Einsatz der 7 tündernschen Einsatzkräfte war daher nicht mehr erforderlich.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>Juli</h1>
					<hr>
						<div class="filterDiv bma">
							<div class="e_img">
								<img src="./img/BMA.jpg" alt="Brandmeldanlage">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>BMA Jugendanstalt - Zellenbrand - Tündernsche Straße</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Durch die Brandmeldeanlage, einer Wohngruppe, der Jugendanstalt, wurde die Feuerwehr Tündern zu einem Zellenbrand alarmiert. Noch auf der Anfahrt wurde das Feuer durch die Leitstelle bestätigt, wodurch sich die anrückenden Kräfte gleich mit Atemschutz ausgestattet haben. Vor Ort hatten Beamte des Justizvollzuges den betroffenen Insassen bereits gerettet und den Brand bekämpft, für die eingesetzten Kräfte der Feuerwehr bestand der Auftrag aus der Brandnachschau. Aus Tündern waren 4 Einsatzkräfte vor Ort, die Wachbereitschaft rückte mit der selben Stärke an.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>Juni</h1>
					<hr>
						<div class="filterDiv fehl">
							<div class="e_img">
								<img src="./img/fail.png" alt="Brandmeldanlage">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>BMA-Fehlalarm Seniorenheim</h3>
								</div>
								<hr>
								<div class="e_bericht">
									In den Morgenstunden des 08.11.2015 wurde die Feuerwehr Tündern zu einer ausgelösten Brandmeldeanlage (BMA) in das Seniorenheim in Tündern alarmiert. Da sich das Objekt direkt neben dem Feuerwehrhaus befindet waren nach kürzester Zeit über 19 Einsatzkräfte aus Tündern und die Wachbereitschaft vor Ort. Es konnte schnell Entwarnung gegeben werden, da es sich um einen Fehlalarm handelte.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>Mai</h1>
					<hr>
						<div class="filterDiv th">
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>VU eingeklemmte Person - Am Hastebach/Otto-Körting-Str.</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am nebeligen Morgen des 03. November, ereignete sich an der Kreuzung Am Hastebach/Otto-Körting-Str. ein Zusammenstoß zwischen einem LKW und einem Kleinwagen. Die Fahrerin des Kleinwagenes wurde in Folge dessen in Ihrem Fahrzeug eingeklemmt. Einsatzkräfte der Feuerwehr Tündern und der hauptberuflichen Wachbereitschaft der Feuerwehr Hameln waren im Einsatz um die Fahrerin zu befreien und die Einsatzstelle im Anschluss zu räumen. Aus Tünern waren 7 Kameraden vor Ort.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>April</h1>
					<hr>
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Schwelbrand Kompostmiete Hilligsfeld</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Am Nachmittag des 11.10. wurde die Feuerwehr Tündern zu der, landkreiseigenen, Kompostierungsanlage alarmiert. Vor Ort kämpften bereits seit Vormittags die Feuerwehren aus Hameln und Hilligsfeld gegen einen Schwelbrand in einer Kompostmiete. Die tündernschen Einsatzkräfte lösten hier Kameraden ab und waren in der Brandbekämpfung tätig. Zur effektiven Bekämpfung wurde die Miete nicht nur von Außen, sondern auch mit sog. Löschlanzen im Inneren gelöscht. Der Einsatz für die 13 Kameraden aus Tündern endete gegen halb neun am Abend.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>März</h1>
					<hr>
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Ausgedehnter Wohnungsbrand - Kuckucksweg Emmerthal</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Zur Unterstützung bei einem ausgedehnten Wohnungsbrand wurde die Feuerwehr Tündern, am Vormittag des 21. August 2015, nach Emmerthal alarmiert. Vor Ort waren bereits mehrere Feuerwehr aus der Gemeinde Emmerthal und der Stadt Hameln im Einsatz, vorrangig wurden daher Atemschutzgeräteträger an der Einsatzstelle benötigt. Aufgrund der Bauart des Hauses (Fertigbauweise) war mit einem möglichen Übergreifen der Flammen auf weitere Räume bzw. Etagen zu rechnen. Die Feuerwehr Tündern unterstützte mit 8 Kameraden, kam aber wegen der sich entwickelten Lage nicht mehr zum Einsatz.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>Februar</h1>
					<hr>
						<div class="filterDiv th">
							<div class="e_img">
								<img src="./img/TH.png" alt="Technische Hilfeleistung">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Unwettereinsätze</h3>
								</div>
								<hr>
								<div class="e_bericht">
									In der Nacht vom 25. auf den 26. Juli zog ein Sturmtief über den Landkreis Hameln-Pyrmont, auch die Ortschaft Tündern wurde von diesem nicht verschohnt. Um kurz nach 20:00 Uhr kam die erste Alarmierung des Abends für die Feuerwehr Tündern, am tündernschen Bahnhof wahren zahlreiche große Äste auf die Fahrbahn der L424 und der K16 gestürzt und blockierten eine Fahrspur. Nachdem dieser Einsatz zeitnah abgearbeitet war und die Kameraden aus Tündern sich bereits wieder zu Hause aufhielten, kam der zweite und letzte Einsatz des Abends. Am Windmühlenweg drohte eine Linde auf ein angrenzendes Haus zu stürzen. Zusammen mit einer Drehleiter und deren Besatzung aus Hameln, sicherten die Einsatzkräfte aus Tündern den Baum und begannen ihn von oben bis auf eine Höhe von ca. 2m abzutragen. Eine schlagkräftige Anzahl von tündernschen Einsatzkräften war vor Ort.
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="month">
						<h1>Januar</h1>
					<hr>
						<div class="filterDiv feuer">
							<div class="e_img">
								<img src="./img/fire.png" alt="Feuer">
							</div>
							<div class="e_text">
								<div class="e_name">
									<h3>Feuer Abzugsanlage - Industrie Hastenbeck</h3>
								</div>
								<hr>
								<div class="e_bericht">
									Zur Unterstützung der Feuerwehren Hameln und Hastenbeck bei einem Brand im Industriegebiet sind, am 06.07.2015 um 13:40 Uhr, 4 Kameraden der Feuerwehr Tündern ausgerückt. Nach Eintreffen an der Einsatzstelle waren aber keine weiteren Massnahmen durch die tündernschen Kräfte zu ergreifen und ein verbleib an der Einsatzstelle war auch nicht nötig.
								</div>
							</div>
						</div>
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
			  var x, i;
			  x = document.getElementsByClassName("filterBr");
			  if (c == "all") c = "";
			  <!--Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected-->
			  for (i = 0; i < x.length; i++) {
				RemoveClass(x[i], "show");
				if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
			  }
			}
			
			function animateValue(id, start, duration, classname) {
				var y = document.getElementsByClassName(classname);
				var end = y.length;
				var range = end - start;
				var current = start;
				var increment = end > start? 1 : -1;
				var stepTime = Math.abs(Math.floor(duration / range));
				var obj = document.getElementById(id);
				var timer = setInterval(function() {
					current += increment;
					obj.innerHTML = current;
					if (current == end) {
						clearInterval(timer);
					}
				}, stepTime);
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