Sesiones 
Una sesion es un sitema que permite al servidor guardar una ruta entre conexiones pero esta vez la informacion se almacena en el servidor esto es porque la conexion https es un protocolo sin estado lo que la conexion es independiente a los demas y no se puede guardar las conexiones entre una semana u otra
 Para un inicio de sesion se usa el metodo 
 session_start()
 que lo que hace es comprobar si la sesion esta abierta y en el caso de que no este abierta te creara una sesion con el mismo id 
 El servidor te crea una sesion y este mismo asocia el navegador del usuario con el archivo que esta hubicado en el servidor pero el identificador se guarda en forma de cookie y en el caso que no se permita cookies se le añade el id de la direccion del la pagina 
 al igual que en las cookies se manda por cabeceras por lo tanto el metodo session start debe de ir al primcipio de la pagina y devuelve true si la sesion inica perfectamente 
 Basicamente es una cookie pero del lado del servidor
 ----------------------------------------------------------------------------------------
 para eliminar una sesion session_destroy()
 Lo que hace es borrar todas las sesiones tambien borra la cookie de su sesion 
 y la puedes vaciar con unset("sesion a vaciar")
 Esta funcion vacia SOLO el contenido pero no la variable y se puede borrar todos a la vez o seleccionarlos uno por uno y se haria asi 
 unset($_SESSION['Nombre de la sesion']);
 y se puedes imprimir una variable de sesion en cualquier momento
Se pueden hacer sesiones sin cookies aunque (no es recomendables)

 ------------------------------------------------------------
