<html>
<head>
    <title>Drop Box</title>
</head>
<body>

<form method="post" action="">
    <label for="angka1">Input 1 :</label>
    <input type="number" name="angka1" required>
<br><br>
    <label for="angka2">Input 2 :</label>
    <input type="number" name="angka2" required>
<br><br>
    <label for="operator">Operator :</label>
    <select name="operator" required>
        <option value="tambah">Tambah</option>
        <option value="kurang">Kurang</option>
        <option value="kali">Kali</option>
        <option value="bagi">Bagi</option>
    </select>
<br><br>
    <input type="submit" value="Input">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]) {
    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    $hitung = new Kalkulator();

    switch ($operator) {
        case 'tambah':
            echo $hitung->tambah($angka1,$angka2);
            break;
        case 'kurang':
            echo $hitung->kurang($angka1,$angka2);
            break;
        case 'kali':
            echo $hitung->kali($angka1,$angka2);
            break;
        case 'bagi':
            try {
                echo $hitung->bagi($angka1,$angka2);
            } catch(Exception $e){
               echo $e->getMessage();
            }
            break;
    }
}

class Kalkulator {
    public function tambah($angka1, $angka2) {
        return $angka1 + $angka2;
    }

    public function kurang($angka1, $angka2) {
        return $angka1 - $angka2;
    }

    public function kali($angka1, $angka2) {
        return $angka1 * $angka2;
    }

    public function bagi($angka1, $angka2) {
        if ($angka2 !=0){
            return $angka1 / $angka2;
        } else {
            throw new Exception("Tidak bisa dibagi angka 0");
        }
    }
}
?>
</body>
</html>