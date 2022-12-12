<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dime tu nombre</title>
    <script>
        function FuncionAjax(){
            var Nombre=document.getElementById("Nombre").value;
            xmlHttp=new XMLHttpRequest();
            xmlHttp.open("Post","Saludar.php",true);
            xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            xmlHttp.send("nombre="+Nombre);
            xmlHttp.onreadystatechange=function() {
                if (xmlHttp.readyState==4 && xmlHttp.status==200) {
                    EscribirResultado(xmlHttp);
                }
        }
    }
    function EscribirResultado(xmlHttp){
        document.getElementById("resultado").innerHTML="!!Que pasa "+xmlHttp.responseText+"!!";
    }
    </script>
</head>
<body>
    <h1>SALUDADOR</h1>
    Introduce tu nombre <input type="text" id="Nombre">
    <button onclick="FuncionAjax()">Saludar</button>
    <div id="resultado"></div>
</body>
</html>