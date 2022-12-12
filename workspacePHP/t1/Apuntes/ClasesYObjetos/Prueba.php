<?php
class A{
    //variables
    public $a;
    private $b;
    //tengo que dejar en privados las variables y usar los getters y los setters
    //Consturctor
    public function __construct($a=0){
        $this->a=$a;
    }
    //Getters y setters
    public function  setA($a){
        $this->a=$a;
    }
    public function getA(){
        return $this->a;
    }
    public function __toString()
    {
        return "OBJETOOOO";
    }
    //Otros funciones
}
function F(){
    return "Adios";
}
$o = new A();
//para acceder dentro de un objeto se usa el -> para acceder a cualquiera de sus variables o metodos y para 
//acceder a una variable dentro de una clase es sin el dolar
echo $o->setA(40);
echo $o->getA();
echo $o->__toString();
?>