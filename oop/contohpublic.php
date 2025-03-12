<?php
//buat class laptop
class laptop{

    //buat property untuk class laptop
    public $pemilik="Andi";
    public $merk;

    //buat method untuk class laptop
    public function hidupkan_laptop(){
        return "Hidupkan Laptop " .$this->pemilik; 
    }
}
//buat objek dari class laptop (instansiasi)
$laptop_baru = new laptop();

echo $laptop_baru->hidupkan_laptop(); //"Hidupkan Laptop"
?>