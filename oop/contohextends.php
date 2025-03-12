<?php
class komputer{
    public $merk;
    public $ukuranlayar;
    public $processor;

    public function beli_komputer(){
        echo "Beli Komputer Merk " .$this->merk."<br>";
        echo "Ukuran Layar".$this->ukuranlayar."<br>";
        echo "Processor".$this->processor;
        echo "<br>";
    }
}
class laptop extends komputer{
    public function beli_laptop(){
        echo "Beli Laptop Merk " .$this->merk."<br>";
        echo "Ukuran Layar".$this->ukuranlayar."<br>";
        echo "Processor".$this->processor;
    }
}

$kom = new komputer();
$kom ->merk= "HP";
$kom ->ukuranlayar= 14 ;
$kom ->processor= " AMD Ryzen 9";
$kom-> beli_komputer();

$laptop = new laptop();
echo "<br>";
$laptop ->merk= "Macbook";
$laptop ->ukuranlayar= 17;
$laptop ->processor= " M1 core";
$laptop ->beli_laptop();
?>