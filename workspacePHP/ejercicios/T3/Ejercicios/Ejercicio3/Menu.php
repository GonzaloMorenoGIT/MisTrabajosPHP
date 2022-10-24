<?php 
$Nivel=isset($_POST['numeros'])?$_POST['numeros']:null;
//---------------------------funciones
function Nivel0($NombreCookie=null,$ValorCookie=null,$valor=0){
    echo <<<Radio
    <h1>Cookie Guardada con exito en el nivel 
    {$valor}</h1>
    <a href="CrearCookie.php">Volver</a>
    Radio;
   return  setcookie($NombreCookie,$ValorCookie,0,"/ejercicios/T3/Ejercicios/Ejercicio3/Nivel1/Nivel2");
}
function Nivel1($NombreCookie=null,$ValorCookie=null,$valor=0){
    echo <<<Radio
    <h1>Cookie Guardada con exitoen el nivel {$valor} <br></h1>;
    <a href="CrearCookie.php">Volver</a>
    Radio;
    return setcookie($NombreCookie,$ValorCookie,0,"/ejercicios/T3/Ejercicios/Ejercicio3/Nivel1");    
    }
function Nivel2($NombreCookie=null,$ValorCookie=null,$valor=0){
    echo <<<Radio
    <h1>Cookie Guardada con exito en el nivel {$valor}</h1><br>
    <a href="CrearCookie.php">Volver</a>
    Radio;
    return setcookie($NombreCookie,$ValorCookie,0,"/ejercicios/T3/Ejercicios/Ejercicio3");
}
//----------------- Funciones para mostrar las cokkies
function Muestro0(){
    echo "<h1>{$_COOKIE[Nivel0()]}</h1>";
    
}
function Muestro1()
{
    foreach ($_COOKIE[Nivel1()] as $k => $v){
        echo "$k ---- $v";
    }
}

        //------------------------Menu----------------
switch ($Nivel) {
    case 0:
        Nivel0($NombreCookie=isset($_POST['Cokienombre'])?$_POST['Cokienombre']:null,$ValorCookie=isset($_POST['Contenido'])?$_POST['Contenido']:null,$Nivel);
        break;
    case 1:
        Nivel1($NombreCookie=isset($_POST['Cokienombre'])?$_POST['Cokienombre']:null,$ValorCookie=isset($_POST['Contenido'])?$_POST['Contenido']:null,$Nivel);
        break;
    case 2:
        Nivel2($NombreCookie=isset($_POST['Cokienombre'])?$_POST['Cokienombre']:null,$ValorCookie=isset($_POST['Contenido'])?$_POST['Contenido']:null,$Nivel);
    break;
    default:
        echo <<<R
        <h3>opcion no contemplada vuelve a intentarlo</h3><br>
        <a href="CrearCookie.php">Volver</a>
R;

        break;
}

?>