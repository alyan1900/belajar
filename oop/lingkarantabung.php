<?php
class lingkaran{
    public $jarijari;
    public $phi;
    public $tinggi;

    public function luaslingkaran(){
        return $this->phi*$this->jarijari**2;
    }
    public function kelilinglingkaran(){
        return (2*$this->phi*$this->jarijari);
    }
}
class tabung extends lingkaran{
    public function volumetabung($jarijari, $tinggi){
        return $this->phi*$this->jarijari**2*$this->tinggi;
    }
    public function luaspermukaan($jarijari, $phi){
        return 2*$this->phi*$this->jarijari**2;
    }
}

$lingkaran = new lingkaran();

$jj=$lingkaran->jarijari=10;
$p=$lingkaran->phi=3.14;

echo"<b>Lingkaran</b><br>";
echo"Jari Jari : ".$jj."<br>";
echo"Phi : ".$p."<br>";
echo"Luas : ".$lingkaran->luaslingkaran($jj, $p)."<br>";
echo"Keliling : ".$lingkaran->kelilinglingkaran($jj, $p)."<br>";
echo"<br>";
$tabung = new tabung();

$jj1=$tabung->jarijari=8;
$p1=$tabung->phi=3.14;
$t=$tabung->tinggi=3;

echo"<b>Tabung</b><br>";
echo"Jari Jari : ".$jj1."<br>";
echo"Phi : ".$p1."<br>";
echo"Tinggi :".$t."<br>";
echo"Volume : ".$tabung->volumetabung($jj1, $p1, $t)."<br>";
echo"Luas Permukaan : ".$tabung->luaspermukaan($jj1, $p1, $t)."<br>";