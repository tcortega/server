<?php
?>

<html>
	<head>
		<title>
			BarcodeAPI.org
		</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="keywords" content="barcode, barcode app, barcode generator, barcode api, qr code, qr code generator">
		<meta name="description" content="An open source barcode server capable of dynamic barcode generation.">

		<link rel="icon" type="image/png" href="/s/favicon.png" />

		<script src="/s/index.js"></script>

		<link rel="stylesheet" type="text/css" href="/s/index.css" />
	</head>
	<body>
		<div id="global_wrapper" >

			<div id="content_wrapper" >

				<div id="header_wrapper" >
					<center>
						<h1>BarcodeAPI.org</h1>
					</center>
				</div>

				<div id="search_wrapper">
					<form>

						<input id="search_text" onkeyup="genCode()" type="text" placeholder="a code for anything..."/>

						<select id="search_type" onchange="genCode()">
							<option value="auto" selected>Auto</option>
							<option value="8">EAN-8</option>
							<option value="13">EAN-13</option>
							<option value="39">Code39</option>
							<option value="128">Code128</option>
							<option value="qr">QR Code</option>
							<option value="matrix">Data Matrix</option>
							<option value="codabar">Codabar</option>
						<select>

					</form>
				</div>

				<div id="barcode_wrapper">
					<center>
						<img id="barcode_output" src="/BarcodeAPI.org" />
					<center>
				</div>

				<div id="footer_wrapper" >
				</div>
			</div>
		</div>
	</body>
</html>

