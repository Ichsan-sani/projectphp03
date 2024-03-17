<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas Persegi Panjang atau Segitiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            gap: 5rem;
        }

        .container {
            width: 65%;
            margin: 0 auto;
            padding: 20px;
            background-image: url("purple.jpg");
            box-shadow: #CAFB55D9;
            border-radius: 4px;
            margin-top: 40px;
            text-align: center;
        }

        .container-2 {
            display: flex;
            gap: 1em;
            justify-content: center;
            padding-top: 20px;
        }

        .container-2 a {
            width: 250px;
        }

        h1 {
            margin-bottom: 30px;
        }

        a {
            display: block;
            padding: 20px;
            background-color: silver;
            color: black;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #rectangle-link {
            background-color: #CAFB55D9;
            color: white;
            border: 1px solid black;
        }

        #triangle-link {
            background-color: #CAFB55D9;
            color: white;
            border: 1.px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container-2">
            <a href="?shape=triangle" id="triangle-link">Luas Segitiga</a>
            <a href="?shape=rectangle" id="rectangle-link">Luas Persegi Panjang</a>
        </div>
        <?php
        $shape = isset($_GET['shape']) ? $_GET['shape'] : '';

        switch ($shape) {
            case 'triangle':
                include 'segitiga.php';
                break;
            case 'rectangle':
                include 'persegipanjang.php';
                break;
        }
        ?>
</body>

</html>