<?php
							$pdfAuthor = "Feuerwehr Tündern";

							$Datum = date("d.m.Y");							
							
							/*Request*/

							$Name = $_REQUEST['Name'];

							$Vorname = $_REQUEST['Vorname'];

							$Geb = $_REQUEST['Geb'];

							$Straße = $_REQUEST['Straße'];

							$Nr = $_REQUEST['Nr'];

							$PLZ = $_REQUEST['PLZ'];

							$Ort = $_REQUEST['Ort'];

							$IBAN = "0545646464654616131302551";

							$BIC = "7899665465";

							$Institut = "Sparkasse Hameln";

							$Betrag = "17";

							$pdfName = "Anmeldung_".$Vorname."_".$Name.".pdf";

	//////////////////////////// Inhalt des PDFs als HTML-Code \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\





	// Erstellung des HTML-Codes. Dieser HTML-Code definiert das Aussehen des PDFs.

	// tcpdf unterstützt recht viele HTML-Befehle. Die Nutzung von CSS ist allerdings

	// stark eingeschränkt.
	
		$t1="&nbsp;&nbsp;";
		$t2="&nbsp;&nbsp;";
		$t3="&nbsp;&nbsp;";
		$t4="&nbsp;&nbsp;";
		$t5="&nbsp;&nbsp;";
		$t6="&nbsp;&nbsp;";
	
		switch ($_POST['topic']) {
			case "den Förderverein":
			$t1="x";
			break;
			case "die Einsatzabteilung":
			$t2="x";
			break;
			case "den Musikzug":
			$t3="x";
			break;
			case "die Jugendfeuerwehr":
			$t4="x";
			break;
			case "die Kinderfeuerwehr":
			$t5="x";
			break;
			case "den Jugendmusikzug":
			$t6="x";
			break;
		}
	
	$html = '

	<table cellpadding="5" cellspacing="0" style="width: 100%;" >

		<tr>

			<td style="text-align:center;line-height:1.7">
				<p>Freiwillige Feuerwehr</p>
				<p>Hameln</p>
				<p><h2>Ortswehr Tündern</h2></p>
			</td>
			<td style="text-align:center;"><img src="img/logo.png"></td>
			<td style="text-align:right;">
				<p>Verein zur "Förderung des</p>
				<p>Feuerlöschwesens und des</p>
				<p>Musikzuges im</p>
				<p>Ortsgebiet Tündern e.V."</p>
			</td>
		</tr>
		<tr style="font-size:30;width:100%;">
			<td colspan="3" style="text-align:center;"><u>Anmeldung</u></td>
		</tr>
		<tr>
			<td colspan="3">
			<p>Hiermit trete ich ein:</p>
			</td>
		</tr>
		<tr>
			<td cellpadding="0" style="width:30px;">('.$t1.')</td>
			<td colspan="3">
			<p>als Mitglied in den Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebier Tündern e.V.</p>
			</td>
		</tr>
		<tr>
			<td cellpadding="0" style="width:30px;">('.$t2.')</td>
			<td colspan="3" style="width:1000px;">
			in die Einsatzabteilung der Ortswehr Tündern und<br>
			den Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebier Tündern e.V.
			</td>
		</tr>
		<tr>
			<td cellpadding="0" style="width:30px;">('.$t3.')</td>
			<td colspan="3">
			in den Musikzug der Ortswehr Tündern und<br>
			den Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebier Tündern e.V.
			</td>
		</tr>
		<tr>
			<td cellpadding="0" style="width:30px;">('.$t4.')</td>
			<td colspan="3">
			in die Jugendfeuerwehr der Ortswehr Tündern und<br>
			den Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebier Tündern e.V.
			</td>
		</tr>
		<tr>
			<td cellpadding="0" style="width:30px;">('.$t5.')</td>
			<td colspan="3">
			in die Kinderfeuerwehr der Ortswehr Tündern und<br>
			den Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebier Tündern e.V.
			</td>
		</tr>
		<tr>
			<td cellpadding="0" style="width:30px;">('.$t6.')</td>
			<td colspan="4">
			in den Jugendmusikzug der Ortswehr Tündern und <br>
			den Verein zur Förderung des Feuerlöschwesens und des Musikzuges im Ortsgebier Tündern e.V.
			</td>

		</tr>
		<br>
		<tr>
			<td width="280px">
				'.$Name.'
			</td>
			<td width="100px">
				'.$Vorname.'
			</td>
			<td width="300px">
				'.$Geb.'
			</td>
		</tr>
		<tr>
			<td width="280px" style="border-top:1px dotted grey">
				Name
			</td>
			<td style="border-top:1px dotted grey">
				Vorname
			</td>
			<td style="border-top:1px dotted grey">
				geb. am
			</td>
		</tr>
		<br>
		<tr>
			<td>
				'.$Straße.'
			</td>
			<td>
				'.$Nr.'
			</td>		
			<td width="100px">
				'.$PLZ.'
			</td>
			<td>
				'.$Ort.'
			</td>
		</tr>
		<tr>
			<td style="border-top:1px dotted grey">
				Straße
			</td>
			<td style="border-top:1px dotted grey">
				Hausnr.
			</td>
			<td style="border-top:1px dotted grey">
				PLZ
			</td>
			<td width="200px" style="border-top:1px dotted grey">
				Ort
			</td>
		</tr>
		<br><br>
		<tr>
			<td>
				
			</td>
		</tr>
		<tr>
			<td style="border-top:1px dotted grey">
				Unterschrift
			</td>
		</tr>
	</table>



	';




	//////////////////////////// Erzeugung des PDF Dokuments \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\



	// TCPDF Library laden

	require_once('php/TCPDF-master/tcpdf.php');



	// Erstellung des PDF Dokuments

	$pdf = new TCPDF('P','mm', 'A4', true, 'UTF-8', false);



	// Dokumenteninformationen









	// Header und Footer Informationen





	// Auswahl des Font





	// Auswahl der MArgins




	// Automatisches Autobreak der Seiten





	// Image Scale 

	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);



	// Schriftart

	$pdf->SetFont('dejavusans', '', 10);



	// Neue Seite

	$pdf->AddPage();



	// Fügt den HTML Code in das PDF Dokument ein

	$pdf->writeHTML($html, true, false, true, false, '');



	//Ausgabe der PDF



	//Variante 1: PDF direkt an den Benutzer senden:

	$pdf->Output($pdfName, 'I');



	//Variante 2: PDF im Verzeichnis abspeichern:

	//$pdf->Output(dirname(__FILE__).'/'.$pdfName, 'D');

	//echo 'PDF herunterladen: <a href="'.$pdfName.'">'.$pdfName.'</a>';


						
?>