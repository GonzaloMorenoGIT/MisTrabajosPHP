Una Cookie es un mini archivo que guarda informacion del usuario que el servidor aloja en el 
equipo cliente con diferente fines para presentarle mejor los productos que el ve
1-.Tambien se pueden usar Para autentificar al usuario
2-.Tambien podemos establecer nuestras preferencias por ej personalizar las busquedas de Google
Se usan Cookies por que el protocolo http no tiene esta
Para trabajar con cookies se usa la variable super global $_Cookie que te devuelve un array asociativo con la clave de la cookie y el valor de la misma
para que el 
para que la cookie funcione en diferentes paguinas basicamente se coloca en la raiz y de ahi para abajo tendra esa cookie
Para indicar una ruta relativa al directorio donde está el script (donde se ejecute el setcookie), utilizar:
	pathinfo($_SERVER['REQUEST_URI'])['dirname']
