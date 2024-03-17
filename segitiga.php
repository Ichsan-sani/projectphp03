<!DOCTYPE html>
<html>

<head>
	<title>Hitung Luas Segitiga</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		.container {
			width: 65%;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			margin-top: 40px;
			border: 2px solid black;
			box-shadow: 0 0 18px silver;
		}

		h2 {
			text-align: start;
			margin-bottom: 30px;
            color:white;
		}

		form {
			display: flex;
			flex-wrap: wrap;
			margin-bottom: 20px;
		}

		.form-group {
			flex-basis: 50%;
			margin-bottom: 20px;
            color:white;
		}

		label {
			display: block;
			margin-bottom: 10px;
		}

		input[type="number"] {
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 4px;
			width: 90%;
		}

		input[type="number"]:hover {
			border: 2px solid #378CE7;
		}

		input[type="submit"] {
			flex-basis: 50%;
			padding: 10px;
			background-color: #CAFB55D9;
			color: black;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			margin-top: 5px;
            display:flex;
            justify-content: center;
		}

		.result {
            margin-top: 30px;
			padding: 20px;
			background-color: #f2f2f2;
			border-radius: 4px;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			color: black;
			margin-bottom: 15px;
			border: 2px solid black;
		}

	</style>
</head>

<body>
	<div class="container">
		<h2>Hitung Luas Segitiga</h2>
		<form method="post" class="mb-3">
			<div class="form-group">
				<label for="alas"><b>Nilai Alas</b></label>
				<input type="number" name="alas" id="alas" required>
			</div>
			<div class="form-group">
				<label for="tinggi"><b>Nilai Tinggi</b></label>
				<input type="number" name="tinggi" id="tinggi" required>
			</div>
			<input type="submit" value="Hitung" class="btn btn-primary">
		</form>
		<?php
		if (isset($_POST['alas']) && isset($_POST['tinggi'])) {
			$alas = $_POST['alas'];
			$tinggi = $_POST['tinggi'];
			$luas_segitiga = 0.5 * $alas * $tinggi;
			echo "<div class='result'>Luas Segitiga: <span>" . $luas_segitiga . "</span></div>";
		}
		?>
</body>
</body>

</html>