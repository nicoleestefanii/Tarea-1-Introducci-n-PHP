<html>
<head>
<title>Calculadora en PHP</title>
<style>
    /* Estilo general de la página */
    body {
        font-family: Verdana, sans-serif;
        background-color: #f4f6f8;
        display: flex;
        flex-direction: column;   /* apila los elementos en vez de ponerlos en fila */
        align-items: center;      /* los centra horizontalmente */
        padding: 40px;
    }

    /* Contenedor del formulario */
    form {
        background-color: #ffffff;
        padding: 25px 30px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        max-width: 400px;
        width: 100%;
        box-sizing: border-box;
    }

    /* Campos de texto */
    input[type="text"] {
        padding: 6px 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

    /* Botón de enviar */
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Caja para el resultado, debajo del formulario */
    .resultado {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        padding: 15px 30px;
        max-width: 400px;
        width: 100%;
        box-sizing: border-box;
        margin-top: 20px;
        color: #333;
    }
</style>
</head>
<body>

<form method="post" action="calculadora.php">
Ingrese el primer número:
<input type="text" name="num1" id="num1">
<br><br>
Ingrese el segundo número:
<input type="text" name="num2" id="num2">
<br><br>
Seleccione la operación:
<br>
<input type="radio" name="operacion" value="sumar" checked> Sumar
<input type="radio" name="operacion" value="restar"> Restar
<input type="radio" name="operacion" value="multiplicar"> Multiplicar
<input type="radio" name="operacion" value="redondear"> Redondear decimales
<br><br>
Cantidad de decimales a redondear (solo si eligió "Redondear decimales"):
<input type="text" name="decimales" id="decimales" value="2">
<br><br>
<input type="submit" value="Calcular">
</form>

<?php
// Solo se calcula si el formulario ya fue enviado
if (isset($_POST['num1'])) {
    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];
    $operacion = $_POST['operacion'];
    $decimales = (int) $_POST['decimales'];

    echo "<div class='resultado'>";

    if ($operacion == "sumar") {
        $resultado = $num1 + $num2;
        echo "La suma de $num1 y $num2 es: $resultado";
    } elseif ($operacion == "restar") {
        $resultado = $num1 - $num2;
        echo "La resta de $num1 y $num2 es: $resultado";
    } elseif ($operacion == "multiplicar") {
        $resultado = $num1 * $num2;
        echo "La multiplicación de $num1 y $num2 es: $resultado";
    } elseif ($operacion == "redondear") {
        $resultado = round($num1, $decimales);
        echo "El número $num1 redondeado a $decimales decimales es: $resultado";
    }

    echo "</div>";
}
?>
</body>
</html>