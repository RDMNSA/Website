<!doctype html>
<html>
	<!--
	Questions:
	Das Video wird nur gerizised wenn man es andockt aber nicht über den vergrößerungs knopf.	
	-webkit-fill-available in height für andere Browser.
	Allgemein wie wichtig ist browserübergreifender support.
	-->
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<!--Loading all necessary stylesheets and disabeling the unselected-->
		<link href="./css/style_mainpage.css" rel="stylesheet" type="text/css" />
		<link href="./css/Fahrzeuge.css" rel="stylesheet" type="text/css" />
		<link href="./css/Übungen.css" rel="stylesheet" type="text/css" />
		<link href="./css/Events.css" rel="stylesheet" type="text/css" />
		<link href="./css/JF.css" rel="stylesheet" type="text/css" />
		<link href="./css/KF.css" rel="stylesheet" type="text/css" />
		<link href="./css/FF.css" rel="stylesheet" type="text/css" />
		<link href="./css/Über.css" rel="stylesheet" type="text/css" />
		<link href="./css/Förderverein.css" rel="stylesheet" type="text/css" />
		<link href="./css/Musikzug.css" rel="stylesheet" type="text/css" />
		<link href="./css/Altersabteilung.css" rel="stylesheet" type="text/css" />
		<link href="./css/Footer.css" rel="stylesheet" type="text/css" />
		<script>
			$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
			$('link[href="./css/Übungen.css"]').prop('disabled', true);
			$('link[href="./css/Events.css"]').prop('disabled', true);
			$('link[href="./css/JF.css"]').prop('disabled', true);
			$('link[href="./css/KF.css"]').prop('disabled', true);
			$('link[href="./css/FF.css"]').prop('disabled', true);
			$('link[href="./css/Über.css"]').prop('disabled', true);
			$('link[href="./css/Förderverein.css"]').prop('disabled', true);
			$('link[href="./css/Musikzug.css"]').prop('disabled', true);
			$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);			
		</script>
		
		
		<link rel="shortcut icon" href="./Img/Tuendern_0.ico" type="image/vnd.microsoft.icon" />
		<!--<script src="https://code.jquery.com/jquery-latest.js"></script>-->
		<script src="./js/jquery.js"></script>
		<title>Freiwillige Feuerwehr Tündern</title>
		<script>
		function video_size() {
			document.getElementById("title_video").style.minwidth = "-webkit-fill-available";
			document.getElementById("title_video").style.minheight = "-webkit-fill-available";
			console.log('resized title_video');
		}
		
		
		var Parts =["index.php#part_1","index.php#part_2","index.php#part_3","index.php#part_4","index.php#part_5",];
		var sj = 0;
		var previousScrollPosition;
		function scrolljump() {
			


			var currentScrollPosition=document.documentElement.scrollTop || document.body.scrollTop

			if (currentScrollPosition>previousScrollPosition) {
				console.log('down')
				if(sj < 4){
					sj = sj + 1;
					var h = Parts[sj];
					location.href=h;
				}
			}else if(currentScrollPosition<previousScrollPosition){
				console.log('up')
				if(sj > 0){
					sj = sj - 1;
					var h = Parts[sj];
					location.href=h;
				}
			}
			previousScrollPosition=currentScrollPosition

		

		};
		//var l;

		
		
		</script>
	</head>
	<body scroll="no" onresize="video_size()" ><!--onscroll="scrolljump()"-->
		<header>
			<?php
				echo file_get_contents('./menus/nav.html');
			?>
		</header>
		<iframe src="./Sound/silence.wav" allow="autoplay" id="audio" style="display:none"></iframe><!--Needed for working autoplay-->
		<audio autoplay>
		<source src="./Sound/alarm.wav" type="audio/wav">
		</audio>
			<!--<div id="main">-->
				<div class="part" id="part_1">

						<video src="./Video/test2_trimm.mp4" autoplay loop id="title_video" ></video><!--autoplap loop muted-->

				</div>
				<hr>
				<div class="part" id="part_2">
					<div id="einsaetze">
						<div class="reportbox">
							<div class="rb_head">
								Ölspur
							</div>	
							<a href="./Einsätze.php#rp1">							
								<div class="rb_img">
									<img src="./img/Ölspur.jpeg" alt="" class="rb_img_img">
									<div class="rb_text">
									Am Montag den 19.03.2018 wurden wir zu einem Ölbekämpfungseinsatz gerufen. Elf Kameraden waren zweieinhalb Stunden damit beschäftigt, eine dreieinhalb Kilometer lange Ölspur zu beseitigen. Sie wurden durch Kammeraden aus Hameln und einer Spezialfirma unterstützt.
									</div>
								</div>
							</a>
						</div>
						<div class="reportbox">
							<div class="rb_head">
								TH -Einsatz - auslaufende Betriebsstoffe groß
							</div>
							<a href="./Einsätze.php#rp2">
								<div class="rb_img">
									<img src="./img/Ölspur2.jpeg" alt="" class="rb_img_img">
									<div class="rb_text">
									Der erste Einsatz des Jahres 2017, kam am Vormittag des 03.01. . Auf der L424, Kreuzung Kiebitzweg ist es zu auslaufenden Betriebsstoffen einer Kehrmaschine gekommen. Zusammen mit der HWB  wurde die Gefahrenstelle abgesichert und beseitigt.
									</div>
								</div>
							</a>
						</div>
						
						<div class="reportbox">
							<div class="rb_head">
								Suchaktion eines vermissten Flugzeugs 
							</div>
							<a href="./Einsätze.php#rp3">
								<div class="rb_img">								
										<img src="./img/einsatz.jpg" alt="" class="rb_img_img">
										<div class="rb_text">
										Mit sieben Kameraden beteiligte sich die Feuerwehr Tündern, am 09.12.17 im Rahmen der Kreisbereitschaft West an der Suchaktion eines vermissten Flugzeuges. 
										</div>								
								</div>
							</a>
						</div>
					</div>
					<div id="dienste">
					<?php
						//Automatische Integration des Standard Dienstplanes mittels PhpSpreedsheet.
						require_once 'vendor/autoload.php';
						
						use PhpOffice\PhpSpreadsheet\IOFactory;
						use PhpOffice\PhpSpreadsheet\Reader\IReadFilter;
						
						$inputFileType = 'Xlsx';
						$inputFileName = './Dienste/Dienstplan.xlsx';
						
						/**  Define a Read Filter class implementing \PhpOffice\PhpSpreadsheet\Reader\IReadFilter  */
							class MyReadFilter implements \PhpOffice\PhpSpreadsheet\Reader\IReadFilter
							{
								private $startRow = 3;

								private $endRow = 68;

								private $columns = ['E','A','C'];
	
								public function readCell($column, $row, $worksheetName = '')
								{
									if ($row >= $this->startRow && $row <= $this->endRow) {
										if (in_array($column, $this->columns)) {
											return true;
										}
									}

									return false;
								}
							}
						
						/**  Create an Instance of our Read Filter  **/
						$filterSubset = new MyReadFilter();

						/**  Create a new Reader of the type defined in $inputFileType  **/
						$reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
						
						/**  Advise the Reader that we only want to load cell data  **/
						//$reader->setReadDataOnly(true);
						/**  Tell the Reader that we want to use the Read Filter  **/
						$reader->setReadFilter($filterSubset);
						
						/**  Load $inputFileName to a Spreadsheet Object  **/
						$spreadsheet = $reader->load($inputFileName);
						
						//Rohausgabe der Daten als Array
						//$sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
						//var_dump($sheetData);
						

						$startRow = 3;						
						$highestRow = 68;
						$highestColumn = 'E';
						$highestColumnIndex = 5;
						
						
						$worksheet = $spreadsheet->getActiveSheet();
						
						echo '<table id="dienste_table">' . "\n";
						echo '	<thead>
									<tr id="dienste_tr_head">
										<th class="d_1">Dienst</th>
										<th class="d_2">Uhrzeit</th>
										<th class="d_3">Datum</th>
									</tr>
								</thead>' . PHP_EOL;
						echo '<tbody>' . PHP_EOL;
						
						for ($row = $startRow; $row <= $highestRow; ++$row) {
							echo '<tr>' . PHP_EOL;
							$d =1;
							for ($col = 5; $col >= 1; --$col) {
								$value = $worksheet->getCellByColumnAndRow($col, $row)->getFormattedValue();
								//Get only the selected columns and add an empty cell if necessary.
								if($value != NULL or $col == 5 or $col == 3 or $col == 1){
									echo '<td class="d_'.$d.'">' . $value . '</td>' . PHP_EOL;
									++$d;
								}
							}
							echo '</tr>' . PHP_EOL;
						}
						echo '</tbody>' . PHP_EOL;
						echo '</table>' . PHP_EOL;
					?>
					
				
					<!--
						<table id="dienste_table">
							<thead>
								<tr id="dienste_tr_head">
									<th class="d_1">Dienst</th>
									<th class="d_2">Datum</th>
									<th class="d_3">Uhrzeit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="d_1"><?php echo $cellValue ?></td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
								<tr>
									<td class="d_1">Rohrbrunnen</td>
									<td class="d_2">3.11.18</td>
									<td class="d_3">19:00</td>
								</tr>
							</tbody>
						</table>
						-->
					</div>
				</div>
				<hr>
				<div class="part" id="part_3">
					<div id="media_options">
						<ul class="list">			
							<a id="o_Über"><li class="list_option" id="list_first">Über uns</li></a>
							<a id="o_Fahrzeuge"><li class="list_option">Fahrzeuge</li></a>
							<a id="o_Einsatzabteilung"><li class="list_option">Einsatzabteilung</li></a>
							<a id="o_Jugendfeuerwehr"><li class="list_option">Jugendfeuerwehr</li></a>
							<a id="o_Kinderfeuerwehr"><li class="list_option">Kinderfeuerwehr</li></a>
							<a id="o_Übungen"><li class="list_option">Übungen</li></a>
							<a id="o_Events"><li class="list_option">Events</li></a>
							<a id="o_Förderverein"><li class="list_option">Förderverein</li></a>
							<a id="o_Musikzug"><li class="list_option">Musikzug</li></a>
							<a id="o_Altersabteilung"><li class="list_option">Altersabteilung</li></a>
						</ul>
					</div>
					<div class="media">
						
						
						
					<!--Inhalt wird per JQuery script am Ende der seite geladen-->	
						
						
						
						
						
						
					</div>
				</div>
				<hr>
				<div class="part" id="part_4">
					<div class="contactbox">
						<div class="cb_head">
								Ortsbrandmeister<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Dirk Kiene</li>
								<li>Tündernsche Str. 13b</li>
								<li>31789 Hameln</li>
								<li>Tel. 05151/821122</li>
								<li><a href="mailto:einsatzabteilung@feuerwehr-tuendern.de?subject=Email%20%C3%BCber%20Feuerwehr-Tuendern.de">Email schreiben</a></li>
							</ul>
						</div>
					</div>
					<div class="contactbox">
						<div class="cb_head">
								Stellvertretender Ortsbrandmeister<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Jens Kiene</li>
								<li>Weser Str.12</li>
								<li>31789 Hameln</li> 
							</ul>
						</div>
					</div>
					<div class="contactbox">
						<div class="cb_head">
								Jugendwart<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Jens Kiene</li>
								<li>Weser Str.12</li>
								<li>31789 Hameln</li> 
							</ul>
						</div>
					</div>
					<div class="contactbox">
						<div class="cb_head">
								Kinderwart<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Mario Meyer</li>
								<li><a href="mailto:kinder@feuerwehr-tuendern.de?subject=Email%20%C3%BCber%20Feuerwehr-Tuendern.de">Email schreiben</a></li> 
							</ul>
						</div>
					</div>
					<div class="contactbox">
						<div class="cb_head">
								Altersabteilung<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Dieter Jendretzke</li>
								<li>Emmertaler Str. 3</li>
								<li>31789 Hameln</li> 
								<li>Tel. 05151/24000</li>
							</ul>
						</div>
					</div>
					<div class="contactbox">
						<div class="cb_head">
								Musikzug<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Henrik Tuckfeld</li>
								<li>Im Stift 10</li>
								<li>31789 Hameln</li> 
								<li>Tel. 0151/16727465</li>
								<li><a href="mailto:musikzug@feuerwehr-tuendern.de?subject=Email%20%C3%BCber%20Feuerwehr-Tuendern.de">Email schreiben</a></li>
							</ul>
						</div>
					</div>
					<div class="contactbox">
						<div class="cb_head">
								Förderverein<br>
						</div>
						<div class="cb_content">
							<ul>
								<li>Karl - Friedrich Meyer</li>
								<li>Kirchweg 2</li>
								<li>31789 Hameln</li> 
								<li>Tel. 05151/41046</li>
								<li><a href="mailto:foerderverein@feuerwehr-tuendern.de?subject=Email%20%C3%BCber%20Feuerwehr-Tuendern.de">Email schreiben</a></li>
							</ul>
						</div>
					</div>
				</div>
				<hr>
				<div class="part" id="part_5">
					<div>
						<h1>Auch du kannst bei uns <span>Mitglied</span> werden!</h1>
						<h2>Meld dich direkt hier an oder komm doch einfach zum Dienst.<br>Außerdem kannst du uns auch über den Förderverien unterstützen.</h2>
					</div>
					<form  action="pdf.php" method="POST">
					<p><label for "topic">Anmelden für:</label><br>
					<select id="select" name="topic">
						<option>den Förderverein</option> 
						<option>die Einsatzabteilung</option>
						<option>den Musikzug</option>
						<option>die Jugendfeuerwehr</option>
						<option>die Kinderfeuerwehr</option>
						<option>den Jugendmusikzug</option>
					</select></p>
	
					<input type="hidden" name="action" value="submit">
					<p>Name:</p>
					<input name="Name" type="text" value="" required size="30" maxlength="30"/><br>
					<p>Vorname:</p>
					<input name="Vorname" type="text" value="" required size="30"/><br>
					<p>Geburtstag:</p>
					<input name="Geb" type="date" value="" required size="30"/><br>
					<p>Straße:</p>
					<input name="Straße" type="text" value="" required size="10"/><br>
					<p>Hausnummer:</p>
					<input name="Nr" type="text" value="" required maxlength="4"/><br><!--type text for numbers like 23a-->
					<p>PLZ:</p>
					<input name="PLZ" type="number" value="" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5"/><br><!--javascript limiting the maxlength due to an incompatibility with the maxlength attribute, by comparing the current length with the given maxlength-->
					<p>Ort:</p>
					<input name="Ort" type="text" value="" required size="30"/><br>
					<p>Bestätigen:</p>
					<input id="submit" type="submit" value=""/>
					</form>
					
					
				</div>
			<!--</div>-->	
				<script><!--Lädt Part 4 Media Inhalt-->
				$("#o_Über").click(function(){
					$(".media").html('<div id="Über" class="media_content"><div id="Über_img_1"><div><img src="./img/Über_1.jpg"></div><div><img src="./img/Über_2.jpg"></div><div><img src="./img/Über_3.jpg"></div></div><div id="Über_text">Die Freiwillige Feuerwehr Tündern gehört zum Landkreis Hameln-Pyrmont und wurde im Jahr 1906 gegründet.Unsere Feuerwehr besteht aus mehreren Spaten.Das sind unteranderem die Einsatzabteilung,die Altersabteilung,der Musikzug,die Kinderfeuerwehr sowie die Jugendfeuerwehr.Beim aktiven Dienst sind ungefähr 33 Kameraden und Kameradinnen.Bei der Jugendfeuerwehr zählen wir 18 Mitglieder.Letztes Jahr hatten wir das Glück,unsere Jugendfeuerwehr,die größte Jugendfeuerwehr der Stadt Hameln nennen zu können.Unterstützt werden wir von dem Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebiet Tündern e.V.Der Durchschnitt der Einsätze im Jahr liegt bei 15.Unser derzeitiges Feuerwehrhaus befindet sich in der Degenerstraße 3.Dort werden auch alle Dienste durchgeführt.Allerdings soll 2021 die Planung unseres neuen Feuerwehrhauses weiter geführt werden.Wir sind eine Feuerwehr mit Grundausstattung und besitzen zwei Einsatzfahrzeuge.Einmal ein Löschgruppenfahrzeug (LF) 8/6 und ein Mannschaftstransportwagen (MTW).Auf dem Löschgruppenfahrzeug sind all die Utensilien die man als Feuerwehr benötigt, also Handscheinwerfer,Strahlrohre,Leinen,eine Steckleiter,eine Krankentrage,eine Axt,eine Schaufel,Schaummittel und noch vieles mehr.Bei Einsätzen werden wir von der Hauptamtlichen Wachbereitschaft Hameln unterstützt.Sie rücken bei jedem Einsatz ebenfalls an.</div><div id="Über_img_2"><div><img src="./img/Über_4.jpg"></div><div><img src="./img/Über_5.jpg"></div><div><img src="./img/Über_6.jpeg"></div></div></div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Über.css"]').prop('disabled', false);
				});
				$("#o_Fahrzeuge").click(function(){				
					$(".media").html('<div id="Fahrzeuge" class="media_content"><div id="LF"><img src="./img/6-45-4.jpg"><div id="F_text"><p>LF 8/6 (Löschgruppenfahrzeug) </p><p>Hersteller: MAN</p><p>Typ: LF 8/6</p><p>Baujahr: 2000</p><p>Funkname: Florian Hameln 06&#8209;45&#8209;04</p><p>Kennzeichen: HM - AM 71</p></div></div><div id="MTW"><img src="./img/test_e.jpg"><div id="F_text"><p>MTF (Mannschaftstransportfahrzeug)  </p><p>Hersteller: Volkswagen AG</p><p>Typ: Transporter T5</p><p>Baujahr: 2011</p><p>Funkname: Florian Hameln 06&#8209;17&#8209;04</p><p>Kennzeichen: HM - AM 129</p></div></div></div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', false);
				});
				$("#o_Einsatzabteilung").click(function(){
					$(".media").html('<div id="Einsatzabteilung" class="media_content"><div id="FF_text">In der Jugendfeuerwehr können Mädchen und Jungen ab dem 10. Lebensjahr mitmachen. Sie werden an den Übungsabenden bei Feuerwehrtechnik, Spiel und Spaß auf die Aufgaben in der aktiven Wehr vorbereitet.<br><br>Dienst ist jeden Donnerstag von 18.00 bis 19.30Uhr.<br>Weitere Dienste werden auf dem Dienstplan bekannt gegeben.</div><div id="FF_img"><div><img src="./img/FF_1.jpg"></div><div><img src="./img/FF_2.jpg"></div><div><img src="./img/FF_3.jpg"></div></div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/FF.css"]').prop('disabled', false);
				});
				$("#o_Jugendfeuerwehr").click(function(){
					$(".media").html('<div class="media_content"><div id="JF"><div id="JF_img_1"><img src="./img/JF_1.jpg" alt="Jugendliche im Fahrzeug"></div><div id="JF_text">In der Jugendfeuerwehr können Mädchen und Jungen ab dem 10. Lebensjahr mitmachen. Sie werden an den Übungsabenden bei Feuerwehrtechnik, Spiel und Spaß auf die Aufgaben in der aktiven Wehr vorbereitet.<br><br>Dienst ist jeden Donnerstag von 18.00 bis 19.30Uhr.<br>Weitere Dienste werden auf dem Dienstplan bekannt gegeben.</div></div><div id="JF_img_2"><img src="./img/JF_2.jpg" alt="Jugendwart Jens Kiene"></div></div></div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/JF.css"]').prop('disabled', false);
				});
				$("#o_Kinderfeuerwehr").click(function(){
					$(".media").html('<div class="media_content"><div id="KF"><div id="KF_img_1"><img src="./img/KF_1.jpg" alt="Gruppenfoto"></div><div class="KF_text">Am 01.09.2009 wurde die Kinderfeuerwehr Tündern gegründet, wir nennen uns 112 Kids. Jeden 2. Mittwoch treffen sich über 40 Kinder im Feuerwehrhaus, dort wird gebastelt, gespielt, gebacken und gekocht, Filme geschaut und natürlich auch Brandschutzerziehung und 1. Hilfe gelehrt. Wir fahren in Freizeitparks, machen Spassturniere, und im Sommer viele Wasserspiele.<br><br>Wenn Ihr zwischen 6 -10 Jahre alt seid, kommt doch einfach mal vorbei, wir freuen uns auf Euch.</div><div id="KF_img_2"><img src="./img/KF_2.jpg" alt="Versammlung in der Fahrzeughalle"></div></div><hr class="KF_hr"><div class="KF_text">Damit die Kinder auch einen kleinen Ansporn haben gibt es auch Auszeichnungen, für die wir Üben. Der Brandfloh und die Kinderflamme 1-3 bestehen aus Spiel und Spaß. Um den Feuerwehrteil nicht zu vernachlässigen wird auch in diesem Bereich das Wissen der Kinder abgefragt. Am Ende der "Prüfung" erhalten alle Teilnehmer, die bestanden haben eine Anstecknadel. Einmal im Jahr findet der Spaß-Marsch statt. Die Kinder können die umliegenden Dörfer erkunden und müssen dabei verschiedene Stationen absolvieren um den Pokal zu gewinnen. Im Jahr 2019 findet zum zweitenmal ein Kinderfeuerwehr-Zeltlager in Bad Pyrmont statt. Ein Wochenende lang können die Kinder in großen Zelten schlafen und sich schon ein bisschen fühlen wie die großen in der Jugendfeuerwehr die jedes Jahr ins Zeltlager fahren.</div></div></div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/KF.css"]').prop('disabled', false);
				});
				$("#o_Übungen").click(function(){
					$(".media").html('<div id="Übungen" class="media_content"><div id="Übungen" class="media_content"><div class="Übung"><div class="Ü_img"><img src="./img/Übung_Wehrbergen.jpg"></img></div><div class="Ü_text"><h1>Gemeinsame Übung Feuerwehren Tündern und Wehrbergen</h1><br><p>Am Abend des 09.10.2015 fand die, mittlerweile fünfte, gemeinsame Übung zwischen der Feuerwehr Tündern und Wehrbergen statt. Als Einsatzobjekt stellte Friedrich Tuckfeld seine Scheune, mit folgender Lage zur Verfügung: Scheunenbrand (Gefahr der Ausbreitung auf das angrenzende Wohnhaus), vermisste Personen und verschiedene Behälter mit unbekannten Flüssigenkeiten. Nachdem durch die anwesenden Führungskräfte Einsatzabschnitte gebildet worden sind, ging Trupps der beiden Feuerwehren, unter Atemschutz, in die Scheune zur Brandbekämpfung und Menschenrettung vor. An dem zweiten Einsatzabschnitt satnd die Brandbekämpfung der Scheune und die Riegelstellung zum Wohnhaus im Vordergrund. Da die Atemschutztrupps, die Flüssigkeitsbehälter zu erst fanden, wurden selbige erst geborgen und anschließend die Suche nach den Vermissten wieder aufgenommen, welche später auch zeitnah gefunden und gerettet wurden. An dieser alljährlich, mit wechselnden Orten, stattfinden Übung nahmen in diesem Jahr mehr als 30 Einsatzkräfte aus Tündern und Wehrbergen teil.</p></div></div><hr class="Ü_hr"><div class="Übung"><div class="Ü_img"><img src="./img/Übung_Kreisbereitschaft.jpg"></img></div><div class="Ü_text"><h1>Übung Kreisfeuerwehr&shy;bereitschaft</h1><br><p>Am 22.05.15 um 15.00 Uhr traf sich 9 Kameraden der Ortswehr Tündern um an einer Übung der Kreisbereitschaft West in Scheuen/Celle teilzunehmen. Um 15.30 Uhr, nach verladen der persönlichen Sachen, fuhren wir zum Treffpunkt des 2. Zuge der Kreisbereitschaft auf die Feuerwache in die Ruthenstr. um dann zum Treffpunkt der Kreisbereitschaft zum Hottenbergsfeld weiter zu fahren. Gegen  16.20 Uhr fuhr die Kreisbereitschaft über die A2 und A352 Richtung Celle und weiter zum Übungsgelände in Scheuen das wir um 17.30 Uhr erreichen. Nachdem wir unsere Sachen untergebracht hatten, fuhren wir zu unserer ersten Übung. Gegen 21.30 Uhr gab es dann ein leckeres Abendessen, welches von der Küche super zu bereitet wurde. Danach wurde dann eine zweite und dritte Übung von uns abgearbeitet. Gegen 2.30 Uhr kamen wir dann in unsere Feldbetten um ein wenig zu schlafen. Am Samstagmorgen, 6.30 Uhr war dann wecken. Nach dem Frühstück wurden dann von uns noch vier Übungen abgearbeitet. Um 15.30 Uhr traten wir dann den Rückweg nach Hameln, der uns wieder über Celle, die A352, A2 und Bad Münder führte, an. Nachdem wir unser Fahrzeug wieder einsatzbereit hatten fuhren wir zurück nach Tündern. Bevor wir aber das Feuerwehrhaus erreichten unterstützten wir die Wachbereitschaft bei der Beseitigung eines Baumes, der quer über eine Straße gefallen war. Um 20.00 Uhr erreichten wir dann unser Feuerwehrhaus und hatten endlich Wochenende. Die zwei Tage waren für alle sehr erfolgreich und wie man einhellig hörte auch lehrreich.r Lage zur Verfügung: Scheunenbrand (Gefahr der Ausbreitung auf das angrenzende Wohnhaus), vermisste Personen und verschiedene Behälter mit unbekannten Flüssigenkeiten. Nachdem durch die anwesenden Führungskräfte Einsatzabschnitte gebildet worden sind, ging Trupps der beiden Feuerwehren, unter Atemschutz, in die Scheune zur Brandbekämpfung und Menschenrettung vor. An dem zweiten Einsatzabschnitt satnd die Brandbekämpfung der Scheune und die Riegelstellung zum Wohnhaus im Vordergrund. Da die Atemschutztrupps, die Flüssigkeitsbehälter zu erst fanden, wurden selbige erst geborgen und anschließend die Suche nach den Vermissten wieder aufgenommen, welche später auch zeitnah gefunden und gerettet wurden. An dieser alljährlich, mit wechselnden Orten, stattfinden Übung nahmen in diesem Jahr mehr als 30 Einsatzkräfte aus Tündern und Wehrbergen teil.</p></div></div><hr class="Ü_hr"><div class="Übung"><div class="Ü_img"><img src="./img/Übung_ErsteHilfe.jpg"></img></div><div class="Ü_text"><h1>Unterweisung in Erster Hilfe</h1><br><p>Das Thema "Erste Hilfe" betrifft jeden, aber besonders in der Funktion des Feuerwehrmitglieds ist die Wahrscheinlichkeit allerdings höher das erlernte Wissen anwenden zu müssen. Aus diesem Grund trafen sich die tündernschen Kameraden am 21.11.2014, zum zweiten Mal in diesem Jahr, im Feuerwehrhaus um Ihre Qualifikation auf dem laufenden zu halten. Wieder erfolgte die Unterweisung durch Manuel Kutschera (Rettungsassistent), der auch aktives Mitglied der Feuerwehr ist. In zwei interessanten und lehrreichen Stunden übten die anwesenden Kameraden von der stabilien Seitenlage, über das abnehmen von Motorradhelmen bis zur Herz-Lungen-Wiederbelebeung (auch in Verbindung mit einem AED). Abschließend war das Urteil für alle klar, gut das man dies regelmäßig übt.</p></div></div></div>	</div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Übungen.css"]').prop('disabled', false);
				});
				$("#o_Events").click(function(){
					$(".media").html('<div id="Events" class="media_content"><div class="Event"><h1>Absicherung Felgenfest 2016</h1><br><h4>05.06.2016 - 09:00</h4><br>Wie schon die letzten Jahre unterstützten Kameraden der Feuerwehr Tündern die Absicherung des Felgenfestes. Bei bestem Wetter wurde zwei Sicherungspunkte in Tündern besetzt, um einen reibungslosen Ablauf der Veranstaltung zu ermöglichen. Nach ersten Schätzung nahmen in diesem Jahr ca. 45 000 Radler teil.</div><hr><div class="Event"><h1>Umwelttag 2016</h1><br><h4>05.03.2016 - 09:30 </h4><br>Auch im Jahr 2016 unterstützte die Feuerwehr Tündern wieder den Ortsrat, bei der Durchführung des Umwelttages. Sieben Kameraden schnitten mit Vertretern anderer Vereine und Parteien am heimischen Festplatz die Hecken zurück. Bei schlechtem Wetter und mit mäßiger Beteiligung wurde dieses nach gut zwei Stunden erreicht. Anschließend lud der Ortsrat zur Verköstigung in das Feuerwehrhaus ein, hier stärkten sich alle Beteiligten bei Bratwurst, Steak und einer Erfrischung.</div><hr><div class="Event"><h1>7. Feldgrenzbeziehung Tündern</h1><br><h4>31.05.2015 - 13:00</h4><br>Am letzten Maiwochenende 2015 fand die 7. Feldgrenzbeziehung in Tündern statt. Am 31.05.2015 begleitete die Feuerwehr Tündern mit allen Sparten den großen Festumzug durch den Ort, mit dabei alle Sparten der Wehr. Bei wechselhaften Wetter war es wieder schönes Zeltfest in Tündern.</div><hr><div class="Event"><h1>Fahrradtour der Einsatz- und der Altersabteilung</h1><br><h4>06.09.2014 - 13:00</h4><br>Am 06.09.2014 führten die Einsatzabteilung und die Altersabteilung wieder ihre jährliche Radtour durch. Diesmal ging es von Tündern, über Grohnde, nach Daspe und auf der anderen Weserseite zurück. Bei bestem Wetter nahmen über 20 Kameraden an der Tour teil und konnten sich an mehreren Verpflegungsstationen stärken, ein besonderes Highlight war frisch gebackener Blechkuchen, den es bei den Eltern eines Kameraden in Daspe gab. Einen gemeinsamen Abschluss gab es mit den Partnern anschließend am Feuerwehrhaus Tündern, hier warteten auch noch weitere Kameraden welche aus beruflichen Gründen nicht an der Radtour teilnehmen konnten. Bei Sparnferkel und frischen Salaten wurde bis tief in die Nacht gefeiert.</div><hr><div class="Event"><h1>Cold Water Challenge 2014</h1><br><h4>02.06.2014 - 18:00</h4><br>Durch die Nominierung, der Feuerwehr Wehrbergen, nahm die Feuerwehr Tündern am 02.06.2014 an der Cold Water Challenge teil. Wir bauten eine Wasserrutsche an einem der örtlichen Kiesteich und stürtzten uns sofort in kühle Naß! An dieser Stelle bedanken wir uns bei den Kameraden aus Wehrbergen für diesen feuchten Spaß! - Und Udo König für technische Unterstützung bei der Medienproduktion!Den ganzen Beitrag könnt Ihr bei Youtube sehen: <a href="http://www.youtube.com/watch?v=KvUUHaiO6Xg">http://www.youtube.com/watch?v=KvUUHaiO6Xg</a></div></div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Events.css"]').prop('disabled', false);
				});
				$("#o_Förderverein").click(function(){
					$(".media").html('<div id="Förderverein" class="media_content">Der Verein zur " Förderung des Feuerlöschwesen und des Musikzuges im Ortsgebiet Tündern e.V." wurde 1971 nach der Gemeindereform von der Feuerwehr gegründet.Bei der Gründung gehörten dem Verein 137 Mitglieder an, zur Zeit sind es 351 Förderer.Der Förderverein unterstützt die Feuerwehr, den Musikzug und die Jugendfeuerwehr finanziell. So wurden zum Beispiel Musikinstrumente für die Jungmusiker oder Ausrüstungsgegenstände für die Feuerwehr und Jugendfeuerwehr angeschafft.Die "Fahrt ins Blaue", die der Förderverein ausrichtet, ist immer ein Höhepunkt für den Ort.</div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Förderverein.css"]').prop('disabled', false);
				});
				$("#o_Musikzug").click(function(){
					$(".media").html('<div id="Musikzug" class="media_content">Der Musikzug der FFW Tündern mit seinen 37 Musikern sorgt für die Musik nicht nur in Tündern, sondern auch weit über die Dorfgrenzen hinaus. Er wurde 1910 als Bläsercorps gegründet und ist bis heute fester Bestandteil der Feuerwehr Tündern. Er spielt auf Feuerwehrveranstaltungen, Festen, Jubiläen und auf Umzügen. Auch bei den Festen anderer Vereine im Dorf trägt der Musikzug mit seinem Auftreten zum Gelingen bei.Seit 1996 existiert eine Nachwuchsgruppe mit z.Zt. 17 Jugendlichen, die die Möglichkeit haben, ein zur Verfügung gestelltes Instrument zu erlernen und eine theoretische Musikausbildung zu bekommen.Der Musikzug ist aber offen für alle Generationen, vermittelt Instrumente und Unterrichtsmöglichkeit in Tündern.</div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Musikzug.css"]').prop('disabled', false);
				});
				$("#o_Altersabteilung").click(function(){
					$(".media").html('<div id="Altersabteilung" class="media_content">Die Altersabteilung besteht zur Zeit aus 14 Kameraden.Unser Bestreben ist der kameradschaftliche Zusammenhalt der älteren Kameraden. Wir treffen uns regelmäßig alle vier Wochen. Da wird gemütlich über alles geredet, es werden Radtouren und kleine Fahrten gemacht. Auch haben wir eine Moselfahrt ( 5 Tage) im Kleinbus gemacht. Wir wünschen uns, dass es so weiter geht.</div>');
					$('link[href="./css/Fahrzeuge.css"]').prop('disabled', true);
					$('link[href="./css/Übungen.css"]').prop('disabled', true);
					$('link[href="./css/Events.css"]').prop('disabled', true);
					$('link[href="./css/JF.css"]').prop('disabled', true);
					$('link[href="./css/KF.css"]').prop('disabled', true);
					$('link[href="./css/FF.css"]').prop('disabled', true);
					$('link[href="./css/Über.css"]').prop('disabled', true);
					$('link[href="./css/Förderverein.css"]').prop('disabled', true);
					$('link[href="./css/Musikzug.css"]').prop('disabled', true);
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', true);	
					$('link[href="./css/Altersabteilung.css"]').prop('disabled', false);
				});
				</script>
			<hr class="footer_hr">
		<footer>
			<a href="./Impressum.php">Impressum</a>
		</footer>
	</body>
</html>