<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        //Metodo Get
        function Ajax() {
            var texto = document.getElementById("Texto").value;
            xmlHttp=new XMLHttpRequest();
            xmlHttp.open("GET", "Servidor.php?a="+texto, true);
            xmlHttp.send();
            xmlHttp.onreadystatechange=function() {
                if (xmlHttp.readyState==4 && xmlHttp.status==200) {
                    MostrarAjax(xmlHttp);
                }
            }
        }
        function MostrarAjax(xmlHttp) {
            document.getElementById("Resultado").innerHTML+=xmlHttp.responseText+"<br>"; 
        }
        //Metodo Post
        function MetodoPost() {
            var texto1 = document.getElementById("TextoPost").value;
            Ajax=new XMLHttpRequest();
            Ajax.open("POST", "ServidorPost.php", true);
            Ajax.setRequestHeader('Content-type','application/x-www-form-urlencoded');
            Ajax.send("dato1="+texto1);
            Ajax.onreadystatechange=function() {
                if (Ajax.readyState==4 && Ajax.status==200) {
                    MostrarAjaxPost(Ajax);
                }
        }
    }
    function MostrarAjaxPost(Ajax) {
        document.getElementById("ResultadoPost").innerHTML+=Ajax.responseText+"<br>";
    }
    </script>
    <style>
        body {
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 10px;
            background-image:url() ;
            text-align: center;
        }
        .FormularioGet{
            font-size: 15px;
            border: 1px solid black;
            display: block;
            margin-right: 50%;
            margin-left: 25%;
            text-align: center;
            padding: 2%;
            border-radius: 20px ;
        }
        .FormularioGet button{
            background-color: blanchedalmond;
            border-radius: 20px;
        }
        .FormularioPost{
            font-size: 15px;
            border: 1px solid black;
            display: block;
            margin-right: 25%;
            margin-left: 50%;
            margin-top: -14.8%;
            text-align: center;
            border-radius: 20px;
            padding: 2%;
        }
        
    </style>
</head>
<body>
    <h1>Pasa un texto</h1>
    <div class="FormularioGet">
    <p>Metodo Get</p>
    <input type="text" id="Texto"><br><br>
    <button onclick="Ajax()">EnviarGet</button>
    <hr>
    <div id="Resultado">
    </div>
    </div>
    <div class="FormularioPost">
    <p>Metodo Post</p>
    <input type="text" id="TextoPost"><br><br>
    <button onclick="MetodoPost()">EnviarPost</button>
    <hr>
    <div id="ResultadoPost"></div>
    </div>
</body>
</html>