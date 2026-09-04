<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 1</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .mensaje {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.15);
            padding: 20px 40px;
            font-size: 20px;
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <div class="mensaje">
        <?php
        echo 'Hello World!';
        ?>
    </div>
</body>
</html>