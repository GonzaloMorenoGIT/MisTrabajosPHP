<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidades Autonomas</title>
    <script>
        function FuncionAjax() {
            XMLDocument = new XMLDocument();
            alert("hola");
            XMLDocument.open('Post', 'Metodo.php', true);
            xmlHttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xmlHttp.send();
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    xmlHttp.getElementById("Resultado").innerHTML = xmlHttp.responseText;
                }
            }
        }
    </script>
</head>

<body>
    <div class="inicio">
        <h1>comundades Autonomas</h1>
        CCAA
        <select onclick="FuncionAjax()" name="Andalucia" id="">
            <option onclick="FuncionAjax()" value="Andalucia">Anaducia</option>
        </select>
        </option>
    </div>
    <div id="Resultado"></div>
</body>

</html>