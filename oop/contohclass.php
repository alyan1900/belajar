<?php
// buat class laptop
class persegipanjang {

    // buat property untuk class laptop
    var $panjang, $lebar;

    // buat method untuk class laptop
    function luaspersegi($panjang,$lebar){
        return $this->panjang*$this->lebar;
    }
}

// buat objek dari class laptop (instansiasi)
$luas_persegi = new persegipanjang();


// set property 
$p=$luas_persegi->panjang=10;
$l=$luas_persegi->lebar=6;

// tampilkan property
echo"panjang :";
echo $luas_persegi->panjang;
echo "<br>";
echo"lebar :";
echo $luas_persegi->lebar;
echo"<br>";


// tampilkan method
echo "luas persegi :";
echo $luas_persegi->luaspersegi($p,$l);
?>