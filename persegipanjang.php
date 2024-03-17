<!DOCTYPE html>
<html>

<head>
	<title>Hitung Luas Persegi Panjang</title>
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
		<h2>Hitung Luas Persegi Panjang</h2>
		<form method="post">
			<div class="form-group">
				<label for="panjang"><b>Nilai Panjang</b></label>
				<input type="number" name="panjang" id="panjang" required>
			</div>
			<div class="form-group">
				<label for="lebar"><b>Nilai Lebar</b></label>
				<input type="number" name="lebar" id="lebar" required>
			</div>
			<input type="submit" value="Hitung">
		</form>
		<?php
		if (isset($_POST['panjang']) && isset($_POST['lebar'])) {
			$panjang = $_POST['panjang'];
			$lebar = $_POST['lebar'];
			$luas_persegi_panjang = $panjang * $lebar;
			echo "<div class='result'>Luas Persegi Panjang: <span>" . $luas_persegi_panjang . "</span></div>";
		}
		?>

</body>
</body>

</html>