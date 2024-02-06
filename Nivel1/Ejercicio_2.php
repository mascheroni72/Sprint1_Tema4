<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Shape { 
    public float $base; 
    public float $alto;

    public function __construct (float $base,float $alto){ 
        $this->base = $base; 
        $this->alto = $alto;
    }
    public function get_base (){ 
        return $this->base; 
    } 
    public function get_alto (){
        return $this->alto; 

    }
}
class Triangulo extends Shape {
    public function calcularAreaTri () {
        $areaTri = $this->base * $this->alto / 2; 
        return $areaTri;
    }
}
class Rectangulo extends Shape {
    public function calcularAreaRec () {
    $areaRec = $this->base * $this->alto;
        return $areaRec;
    }
}
$triangulo = new Triangulo(4.8, 7.3); 
$rectangulo = new Rectangulo (8.4, 4.2);

echo " El triángulo tiene un área de " . $triangulo-> calcularAreaTri();  
echo "<br>";
echo "Mientras que el área del rectángulo es " . $rectangulo-> calcularAreaRec();
?>
</body>
</html>
