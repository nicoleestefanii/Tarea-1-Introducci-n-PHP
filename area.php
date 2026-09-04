<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Área y Perímetro</title>
    <style>
        /* Estilo para la página */
        body {
            font-family: Verdana, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            padding: 40px;
        }

        /* Caja que contiene el resultado */
        .resultado {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            padding: 20px 30px;
            max-width: 500px;
        }

        p {
            color: #333;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="resultado">
        <?php
        $radio = (float) $_POST['radio'];
        $area = pi() * pow($radio, 2);
        echo "<p>El área de la circunferencia con radio $radio es: $area</p>";

        $radio = (float) $_POST['radio'];
        $area = pi() * pow($radio, 2);
        $perimetro = 2 * pi() * $radio;
        echo "<p>El perímetro de la circunferencia con radio $radio es: $perimetro</p>";
        ?>
    </div>
</body>
</html>