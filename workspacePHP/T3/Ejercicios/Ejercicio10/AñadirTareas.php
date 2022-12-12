<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Tareas</title>
</head>
<body>
    <form action="VerTareas.php" method="post">
            introduce la tarea 
            <input type="text" name="Tarea"><br>
            Empleado <select name="Empleados" id="">
                <option value="Pepe">Pepe</option>
                <option value="Juan">Juan</option>
                <option value="Ana">Ana</option>
            </select><br>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>