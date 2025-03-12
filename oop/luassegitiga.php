<html>
    <head>
        <title>Luas Segitiga</title>
    </head>
<body align =center style="
background-color:yellow;
background-repeat:no-repeat;
background-size:cover;">
  <form action="" method="post">
    <label for="alas">Alas :</label>
    <input type="number" name="alas" id="alas" required>
<br><br>
    <label for="tinggi">Tinggi :</label>
    <input type="number" name="tinggi" id="tinggi" required>
<br><br>
    <button type="submit">Hasil</button>
  </form>

<?php
class Segitiga {
    public function LuasSegitiga($alas, $tinggi) {
        return 1/2 * $alas * $tinggi;
    }
}

$segitiga = new Segitiga();

if ($_SERVER["REQUEST_METHOD"]) {
    $alas = $_POST["alas"];
    $tinggi = $_POST["tinggi"];
    $luas = $segitiga->LuasSegitiga($alas, $tinggi);
    echo "Alas : $alas<br>";
    echo "Tinggi : $tinggi<br>";
    echo "Luas : $luas<br>";
    
}
?>
</body>
</html>