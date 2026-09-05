<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Ingresados</title>
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
        // Validación 1: que el nombre no venga vacío
        $Nombre = trim($_REQUEST['nombre']);
        if (empty($Nombre)) {
            echo "Debe ingresar un nombre<br>";
        } else {
            echo "El nombre es: " . $Nombre . "<br>";
        }
        $Edad = $_POST["edad"];
        // Validación 2: que la edad exista y sea un número (no letras ni vacío)
        if (isset($Edad) && is_numeric($Edad)) {
            $Edad = (int) $Edad;
        // Validación 3: edad inválida si es negativa o mayor a 180
        if ($Edad < 0 || $Edad > 180) {
            $mensaje = "edad invalida";
        } elseif ($Edad >= 18) {
        // Acciones
            $mensaje = "usted puede votar en las próximas elecciones 2028";
        } else {
            $mensaje = "usted no es mayor de edad";
        }
        // Todo el resultado en minúscula, como pidió la profe
        echo strtolower($mensaje);
        } else {
            echo "debe ingresar una edad válida (solo números)";
        }

?>
    </div>
</body>
</html>