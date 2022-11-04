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
            var n=document.getElementById('idNombre').value;
            var conexion= new XMLHttpRequest();
            conexion.open('GET','datos.php?nombre=' + n,true);
            conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
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
    </div>
    Nombre <input type="text" id="idNombre">
    <button onclick="AccionAjax()">Accion AJAX</button>
</body>
</html>