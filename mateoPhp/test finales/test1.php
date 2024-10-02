<?php
class animal{
    private $nombre;
    private $edad;
    public function __construct($nombre, $edad){
        $this-> nombre=$nombre;
        $this->edad=$edad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
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










class perro extends animal{
    public function __construct($nombre, $edad){
        parent::__construct($nombre, $edad);
    }
    //sobreescritura
    public function getEdad(){
        return parent ::getEdad()*7;
    }
    public function toString(){
        return "soy un perro". parent::getNombre();
    }
}



$miperrito = new perro ("pupy",4);

print($miperrito->getNombre());
echo"<br>";
print($miperrito->getEdad());
echo"<br>";
print($miperrito->toString());