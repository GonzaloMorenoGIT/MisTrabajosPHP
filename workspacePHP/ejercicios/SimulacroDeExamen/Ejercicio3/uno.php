<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        var xmlhttp;
        function Peli(xmlhttp) {
            xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET", "Peli.php", true);
                xmlhttp.send();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        accionPeli(xmlhttp);
                    }
                }
            }
        function accionPeli(xmlhttp) {
            document.getElementById("idPeli").value = xmlhttp.responseText;
        }
        //canciones
        function Cancion(xmlhttp) {
            xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET", "Cancion.php", true);
            xmlhttp.send();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    accionCancion(xmlhttp);
                }
        }
        function accionCancion(xmlhttp) {
            document.getElementById("idCancion").value = xmlhttp.responseText;
        }
    }
    </script>
</head>

<body>
    <button onclick="Peli()">Peli Favorita</button>
    <input type="text" readonly="readonly" id="idPeli">
    <button onclick="Cancion()">Cancion Favorita</button>
    <input type="text" readonly="readonly" id="idCancion">
</body>

</html>