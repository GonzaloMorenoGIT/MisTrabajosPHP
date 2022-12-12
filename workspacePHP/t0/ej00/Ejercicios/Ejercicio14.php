<?php
/*Utilizar un array asociativo para emular un sistema gestor de base de datos relacional, en el que poder
crear una estructura como la que propone el siguiente esquema:	
Crear un programa, que mediante un menú, implemente un CRUD para todos los objetos descritos.
El Caso de Uso (R) que tenga dos facetas: “mostrar todos los objetos” y “Recuperar un objeto por Id.”.
En el caso de “mostrar todos los empleados”, que en lugar del idDpt, se muestre el nombre del departamento.
SUGERENCIA: Utilizar la siguiente estructura de arrays asociativos.
*/
use function PHPSTORM_META\map;
//DEfino Variables,Arrays Etc;
$bd=[
    "Departamento"=>[10=>["nombre"=>"ventas","desc"=>"Departammento de ventas"]],
    "Empleado"=>[100=>["nombre"=>"pepe","apellido"=>"sanchez","idDpto"=>10],
                200=>["nombre"=>"ana","apellido"=>"Garcia","idDpto"=>10]]
    ];
//Defino las funciones
function menuEntrada($bd)
{
    echo "dime las opciones a desear \n
    1-. Mostrar todos los empleados del departamento de ventas \n
    2-. Mostrar todos los departamentos\n
    3-. Insertar un nuevo empleado\n
    4-. Insertar un nuevo departamento\n";
    fscanf(STDIN, "%d/n", $numero);
    print_r($bd);
    switch ($numero) {
        case 1:MostrarTodoslosEmpleados($bd);break;
        case 2:MostrarTodosLosDepartamentos($bd);break;
        case 3:InsertoEmpleado($bd);break;
        case 4:menuEntrada(InsertoDepartamento($bd));break;
        case 5:break;
        default:
        echo "Opcion no encontrada vuelve a intentarlo\n";menuEntrada($bd);break;
    }
}
//mostrar la listas
function MostrarTodosLosDepartamentos($bd)
{
    foreach($bd["Departamento"]  as $k=>$v){
        foreach($v as $k =>$v){
            echo "$k---$v\n";
        }
        echo"-------------------------\n";
    }
}
function MostrarTodoslosEmpleados($bd){
    foreach($bd["Empleado"]  as $k=>$v){
        foreach($v as $k =>$v){
            echo "$k---$v\n";
        }
        echo"-------------------------\n";
    }
}
//todoinsertar usuarios
function InsertoEmpleado($bd){}
function InsertoDepartamento($bd){
    echo"Dime el nombre del departamento : \n";
    fscanf(STDIN,"%s/n",$nombre);
    echo "Dime una descripcion : \n";
    fscanf(STDIN,"%s/n",$Descripcion);
    //array_pop($bd["Departamento"],["Nombre"=>$nombre,"Descripcion"=>$Descripcion]);
    array_unshift($bd["Departamento"],["Nombre"=>$nombre,"Descripcion"=>$Descripcion]);
    print_r($bd); 
return ($bd);
}
//Borrrar Usuarios
//Seleccionar usuarios tanto de departamentos como de empleados


//Ejecuto el programa
echo "Dime un numero";
fscanf(STDIN,"%d/n",$entrada);
if($entrada==1){
menuEntrada($bd);
}else{

}

