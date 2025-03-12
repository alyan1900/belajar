<?php

class nilai{
    public $tugas1;
    public $tugas2;
    public $sikap;
    public $uas;

    public function nilaiakhir(){
        return (($this->tugas1+$this->tugas2)*2/10)+($this->sikap*1/4)+($this->uas*7/20);
    }
}
class idd extends nilai{
    public $nama;
    public $kelas;
    public $sekolah;
    public $jurusan;
}

$akhir = new nilai();

$t1=$akhir->tugas1=80;
$t2=$akhir->tugas2=75;
$s=$akhir->sikap=95;
$u=$akhir->uas=80;
$a=$akhir->nilaiakhir();

if ($a >90) {
    $grade = "A+";
}elseif($a >80){
    $grade = "A";
}elseif($a >70){
    $grade = "B+";
}elseif($a >60){
    $grade = "B";
}elseif($a >50){
    $grade = "C+";
}elseif($a >40){
    $grade = "C";
}elseif($a >30){
    $grade = "D";
}elseif($a >20){
    $grade = "E";
}else {
    $grade = "F";
}

$id = new idd();

$n=$id->nama="Pandu";
$k=$id->kelas="XIII";
$sk=$id->sekolah="SMKN 1 JENANGAN PONOROGO";
$j=$id->jurusan="TOI";

echo"Nama : ".$n."<br>";
echo"Kelas : ".$k."<br>";
echo"Asal Sekolah : ".$sk."<br>";
echo"Jurusan : ".$j."<br>";
echo"Tugas 1 : ".$t1."<br>";
echo"Tugas 2 : ".$t2."<br>";
echo"Sikap : ".$s."<br>";
echo"UAS : ".$u."<br>";
echo"Nilai Akhir : ".$a."<br>";
echo"Grade : ".$grade."<br>";
?>