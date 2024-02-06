<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Employee {
    public string $nom;
    public float $sou;

    public function initialize (string $nom,float $sou){

        $this->nom = $nom; 
        $this->sou = $sou;
    }
    public function print (){
         echo "Soy " . $this->nom . ".<br>";
         echo "Gano " . $this->sou . " €, un sueldo que está muy por encima de la media española." . "<br>";
        if ($this->sou > 6000){
            echo "Tengo que pagar impuestos porque mi sueldo supera los 6000€.";
        }else{
            echo "No tengo que pagar impuestos porque mi sueldo es inferior a 6000€.";
        }
    } 
}
$employee = new Employee (); 

$employee-> initialize ("Roberto", 3000.800); 
$employee-> print ();
?>
</body>
</html>




