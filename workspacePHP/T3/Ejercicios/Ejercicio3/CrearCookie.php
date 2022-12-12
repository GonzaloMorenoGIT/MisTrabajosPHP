<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <h3>Nivel 0 -><a href="MuestroNivel0.php">Mostrar Listado</a></h3>
        <h3>Nivel 0-> Nivel 1 <a href="Nivel1\MuestroNivel1.php">Listado de Cookies</a></h3>
        <h3>Nivel 0-> Nivel 1 Nivel 2 <a href="Nivel1\Nivel2\MuestroNivel2.php">Listado de Cookies</a></h3>
    </nav>
    <form action="Menu.php" method="post">
        <fieldset>
            <legend>Creacion de Cookies</legend>
            nombre de la Cookie <input type="text" name="Cokienombre">
            Contenido <input type="text" name="Contenido"><br>
            </label>
            <label for="ids"> nivel
                <select name="numeros" id="ids">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <input type="submit" value="Crear Cookie">
        </fieldset>
    </form>
</body>

</html>