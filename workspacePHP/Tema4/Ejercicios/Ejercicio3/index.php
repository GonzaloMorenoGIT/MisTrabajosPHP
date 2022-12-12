<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        .imagenes {
            width: 5%;
        }
    </style>
    <script>
        function FuncionAjax() {
            var valor = document.querySelector("input[name=Banderas]:checked").value;
            xmlHttp = new XMLHttpRequest();
            xmlHttp.open("Post", "Metodos.php", true);
            xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xmlHttp.send("valor=" + valor);
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    document.getElementById("Resultado").innerHTML = "hola "+xmlHttp.responseText;
                }
            }
        }
    </script>
</head>

<body>
    <label for="España">
        <input type="radio" onclick="FuncionAjax()" name="Banderas" id="España" value="ES">
        <img class="imagenes" src="\ejercicios\Tema4\Ejercicios\Ejercicio3\img\España.png" alt="España">
    </label>
    <label for="Reino_Unido">
        <input type="radio" onclick="FuncionAjax()" name="Banderas" id="Reino_Unido" value="EN">
        <img class="imagenes" src="\ejercicios\Tema4\Ejercicios\Ejercicio3\img\UK.jpg" alt="Reino unido">
    </label>
    <label for="Francia">
        <input type="radio" onclick="FuncionAjax()" name="Banderas" id="Francia" value="FR">
        <img class="imagenes" src="\ejercicios\Tema4\Ejercicios\Ejercicio3\img\Francia.png" alt="">
    </label>
    <div id="Resultado">
    </div>
</body>

</html>