<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        function AccionAjax() {
            var n=Document.getElementById('idNombre').value;
            var conexion= new XMLHttpRequest();
            conexion.open('GET','datos.php?nombre=' + n,true);
            conexion.send();
            conexion.onreadystatechange =function(){
                if(conexion.readyState==4 && conexion.status==200){
                    document.getElementById("idDiv").innerHTML=conexion.responseText;
            }
        }
    }
    </script>
</head>
<body>
    <h2>Texto Fijo</h2>
    <div id="idDiv">
        <h3>Texto Variable</h3>
    </div>
    Nombre <input type="text" id="idNombre">
    <button onclick="AccionAjax()">Accion AJAX</button>
</body>
</html>