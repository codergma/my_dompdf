<?php
require_once 'autoload.inc.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html = '<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <style>
		    @font-face {
					font-family: "Fireflysung":;
					font-style: normal;
					font-weight: normal;
					src: url() format("truetype");
			}
			* {
					font-family:  fireflysung, DejaVu Sans, sans-serif;
			}
		</style>
</head>
<body>
	<div>忠烈祠</div>
</body>
																				
</html>';
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
