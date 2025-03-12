<html>
<head>
    <title>Drop Box</title>
</head>
<body>

<form method="post" action="">
    <label for="nama">Nama :</label>
    <input type="text" name="nama" required>
<br><br>
    <label for="kelas">Kelas :</label>
    <select name="kelas" required>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select>
<br><br>
    <label for="asalsekolah">Asal Sekolah :</label>
    <input type="text" name="asalsekolah" required>
<br><br>
    <label for="jurusan">Jurusan :</label>
    <select name="jurusan" required>
        <option value="TKP">TKP</option>
        <option value="TPM">TPM</option>
        <option value="TOI">TOI</option>
        <option value="TEI">TEI</option>
        <option value="TSM">TSM</option>
        <option value="DPIB">DPIB</option>
        <option value="RPL">RPL</option>
        <option value="TLAS">TLAS</option>
        <option value="TPTU">TPTU</option>
    </select>
<br><br>
    <label for="tugas1">Tugas 1 :</label>
    <input type="number" name="tugas1" required>
<br><br>
    <label for="tugas2">Tugas 2 :</label>
    <input type="number" name="tugas2" required>
<br><br>
    <label for="sikap">Sikap :</label>
    <input type="number" name="sikap" required>
<br><br>
    <label for="uas">UAS :</label>
    <input type="number" name="uas" required>
<br><br>
    <input type="submit" value="Input">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]) {
    $n1 = $_POST['nama'];
    $k1 = $_POST['kelas'];
    $sk1 = $_POST['asalsekolah'];
    $j1 = $_POST['jurusan'];
    $t11 = $_POST['tugas1'];
    $t21 = $_POST['tugas2'];
    $s1 = $_POST['sikap'];
    $u1 = $_POST['uas'];
}
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

$t1=$akhir->tugas1=$t11;
$t2=$akhir->tugas2=$t21;
$s=$akhir->sikap=$s1;
$u=$akhir->uas=$u1;
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

$n=$id->nama=$n1;
$k=$id->kelas=$k1;
$sk=$id->sekolah=$sk1;
$j=$id->jurusan=$j1;

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
</body>
</html>