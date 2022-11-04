<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function Ajax() {
            xmlhttp=new XMLHttpRequest();
            xmlhttp.open("GET","todos.php",true);
            xmlhttp.send();
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                    EscribirResultadp(xmlhttp)
                }
            }
        }
        function EscribirResultadp(xmlhttp) {
            document.getElementById("Resultado").innerHTML+=xmlhttp.responseText+"<br>";
            
        }
    </script>
</head>
<body>
    <button onclick="Ajax()">Enviar</button>
    <div id="Resultado">

    </div>
</body>
</html>