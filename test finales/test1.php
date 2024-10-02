<?php
class Animal{
    private $nombre;
    private $edad;
    public function __construct($nombre, $edad){
        $this-> nombre=$nombre;
        $this->edad=$edad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setEdad(){
        $this->nombre=$nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function toString(){
        return"soy un animal".$this->nombre;
    }
}










class Perro extends Animal{
    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }
    //sobreescritura
    public function getEdad(){
        return parent ::getEdad()*7;
    }
    public function toString(){
        return "soy un perro  ". parent::getNombre();
    }
}



$miperrito = new Perro ("pupy",4);

print($miperrito->getNombre());
echo"<br>";
print($miperrito->getEdad());
echo"<br>";
print($miperrito->toString());


$miperrito2 = new Perro ("tofi",8);

print($miperrito2->getNombre());
echo"<br>";
print($miperrito2->getEdad());
echo"<br>";
print($miperrito2->toString());
// 