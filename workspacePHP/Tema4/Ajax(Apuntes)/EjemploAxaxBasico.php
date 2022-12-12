<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Ajax</title>
    <script>
        function Ajax() {
            var texto=document.getElementById("nombre").value;
            var Ajax=new XMLHttpRequest();
            Ajax.open("post","Nombre.php",true );
            Ajax.send();
            Ajax.onreadystatechange=function(){
                if (Ajax.readyState==4 && Ajax.status==200) {
                    document.getElementById("nombre").value=Ajax.responseText;
                    
                }
            }
        }
    </script>
</head>
<body>
    <h1>Dime tu nombre</h1>
    <form action="Nombre.php" method="post">
        <input type="text" name="nombre" id="nombre">
        <input type="submit" value="Enviar Ajax" onclick="Ajax()">
    </form>
</body>
</html>