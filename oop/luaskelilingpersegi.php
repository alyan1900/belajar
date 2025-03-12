<?php
class segipanjang{
    protected $panjang;
    protected $lebar;

    public function data($p, $l){
        $this ->panjang = $p;
        $this ->lebar = $l;
    }

    public function kembalikan(){
        return[$this ->panjang, $this ->lebar];
    }

    public function luas(){
        return $this ->panjang *$this ->lebar;
    }

    public function keliling(){
        return ($this ->panjang + $this ->lebar);
    }
}

$penghitung = new segipanjang;
$penghitung -> data(35, 20);
$luas = $penghitung -> luas();
$keliling = $penghitung -> keliling();
$d = $penghitung -> kembalikan();

echo"
<b>PERSEGI<br></b>
- panjang : ". $d[0]."<br>
- lebar : ".$d[1]."<br>
- luas : $luas <br>
- keliling : $keliling <br>
";
?>