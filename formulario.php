<html>
<head>
<title>Formulario de entrada del dato</title>
<style>
    body {
        font-family: Verdana, sans-serif;
        background-color: #f4f6f8;
        display: flex;
        justify-content: center;
        padding: 40px;
    }

    form {
        background-color: #ffffff;
        padding: 25px 30px;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.15);
        max-width: 350px;
    }

    input[type="text"] {
        padding: 6px 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
    }

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
</style>
</head>
<body>

<form method="post" action="pagina2.php">
Ingrese su nombre:
<input type="text" name="nombre" id="nombre">
<br>
<br>
Ingrese su Edad:
<input type="text" name="edad" id="edad">
<br><br>
<input type="submit" value="confirmar">
</form>

</body>
</html>