<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Pulgadas</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        .resultado {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            padding: 20px 30px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        $pulgadas = (float) $_POST['pulgadas'];
        $centimetros = $pulgadas * 2.54;
        echo "$pulgadas pulgadas equivalen a $centimetros centímetros";
        ?>
    </div>
</body>
</html>