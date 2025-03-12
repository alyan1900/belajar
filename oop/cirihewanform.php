<!DOCTYPE html>
<head>
    <title>Klasifikasi Hewan</title>
</head>
<body align = "left"
style="
background-color:;
background-repeat:no-repeat;
background-size:cover;
">
<form action="" method="post">



<table border="0" cellspacing="0" cellpadding="10" align="" WIDTH="300px"height="0px">
		<tr>
        <td><label for="nama">Nama :</label></td>
        <td><input type="text" name="nama" required></td>
</tr>
<tr>
        <td><label for="napas">Napas :</label></td>
        <td><select name="napas" required>
        <option value="paruparu">Paru paru</option>
        <option value="trakea">Trakea</option>
        <option value="kulit">Kulit</option>
        <option value="ingsang">Ingsang</option>
    </select></td>
</tr>
<tr>
        <td><label for="habitat">Habitat :</label></td>
        <td><select name="habitat" required>
        <option value="darat">Darat</option>
        <option value="udara">Udara</option>
        <option value="air">Air</option>
    </select></td>
</tr>
<tr>
        <td><label for="reproduksi">Reproduksi :</label></td>
        <td><select name="reproduksi" required>
        <option value="melahirkan">Melahirkan</option>
        <option value="bertelur">Bertelur</option>
    </select></td>
</tr>
</table>
    <input type="submit" value="CARI">
    </form>

    <?php
    class Hewan {
        private $nama;
        private $napas;
        private $habitat;
        private $reproduksi;

        public function __construct($nama, $napas, $habitat, $reproduksi) {
            $this->nama = $nama;
            $this->napas = $napas;
            $this->habitat = $habitat;
            $this->reproduksi = $reproduksi;
        }

        public function klasifikasikan() {
            if ($this->napas == 'paruparu' && $this->habitat == 'darat' && $this->reproduksi == 'melahirkan') {
                return "Mamalia";
            } elseif($this->napas == 'paruparu' && $this->habitat == 'air' && $this->reproduksi == 'melahirkan') {
                return "Mamalia";
            } elseif ($this->napas == 'paruparu' && $this->habitat == 'udara' && $this->reproduksi == 'bertelur') {
                return "Unggas";
            } elseif ($this->napas == 'trakea' && $this->habitat == 'darat' && $this->reproduksi == 'bertelur') {
                return "Serangga";
            } elseif ($this->napas == 'kulit' && $this->habitat == 'air' && $this->reproduksi == 'bertelur') {
                return "Amfibi";
            } elseif ($this->napas == 'kulit' && $this->habitat == 'darat' && $this->reproduksi == 'bertelur') {
                return "Amfibi";
            } elseif ($this->napas == 'paruparu' && $this->habitat == 'darat' && $this->reproduksi == 'bertelur') {
                return "Reptil";
            } elseif ($this->napas == 'paruparu' && $this->habitat == 'air' && $this->reproduksi == 'bertelur') {
                return "Reptil";
            } elseif ($this->napas == 'ingsang' && $this->habitat == 'air' && $this->reproduksi == 'bertelur') {
                return "ikan";
            } else {
                return "NOT FOUND!!!!";
            }
        }
    
        public function getNama(){
        return $this->nama;
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST ['nama'];
        $napas = $_POST['napas'];
        $habitat = $_POST['habitat'];
        $reproduksi = $_POST['reproduksi'];

        $hewan = new Hewan($nama, $napas, $habitat, $reproduksi);
    
        $hasilKlasifikasi = $hewan->klasifikasikan();
    }


    if (isset($hasilKlasifikasi)) 
        echo "<h4>".$hewan->getNama()." merupakan hewan ". $hasilKlasifikasi ." yang mempunyai ciri ciri hidup di ".$habitat.",".$reproduksi." dan mempunyai sistem pernapasan ".$napas;
    
    ?>
</body>
</html>