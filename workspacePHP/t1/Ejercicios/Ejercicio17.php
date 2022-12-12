<?php
//DODO
echo <<<Radio
    <form action="http://localhost/ejercicios/t1/Ejercicios/Ejercicio17.php" method="get">
        Escoge un fichero <input type="file" name="fichero1"><br>
        Escoge una carpeta de dsestino <select name="Texto[]" id=""><br>
            <option value="Texto">Texto</option><br>
            <option value="Imagen">Imagen</option><br>
            <option value="URL">URL</option><br>
        </select>
        <input type="submit" value="Enviar">
    </form>
Radio;
?>