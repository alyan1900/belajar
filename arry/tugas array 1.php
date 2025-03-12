<!DOCTYPE html>
<head>
    <title> TUGAS ARRY 1 </title>
</head>
<header>
    <style>8
    html,body,*{
        margin:0;
        padding: ;
    }
    table{
        border-collapse:collapse;
        /*background-coloe: green;*/
        background-color: #eaeaea;
        width: 100%;
    }
    th, td{
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: green;
        color: white;
        font-size: 20px;
        letter-spacing: 1px;
    }
    tr:nth-child(even){
        background-color: grey;
    }
    td{

    }
    </style>
    <body>
        <?php
        $siswa= array(
            array ('Nama'=>"Aldof Hitle ","jenis kelamin"=>"Laki-Laki","Tempat lahir"=>"austria","tangal lahir"=>"15 januari 1901","alamat"=>"unknow"),
            array ('Nama'=>"Hiroito","jenis kelamin"=>"Laki-Laki","Tempat lahir"=>"japan","tangal lahir"=>"18 januari","alamat"=>"unknow"),
            array ('Nama'=>"Sambo","jenis kelamin"=>"Laki-Laki","Tempat lahir"=>"Medan","tangal lahir"=>"15 januari 1980","alamat"=>"unknow"),
            array ('Nama'=>"Sambo","jenis kelamin"=>"Laki-Laki","Tempat lahir"=>"Medan","tangal lahir"=>"15 januari 1980","alamat"=>"unknow"),
        );

echo "<table border='0'
<tr>
      <th>Nama</th>
      <th>Jenis kelamin</th>
      <th>Tempat lahir</th> 
      <th>Tanggal lahir</th>
      <th>Alamat</th>
      </tr>";

      foreach ($siswa as $data){
        echo "<tr>";
        echo "<td>" . $data['Nama'] . "</td>";
        echo "<td>" . $data['Jenis Kleamin'] . "</td>";
        echo "<td>" . $data['Tempat Lahir'] . "</td>";
        echo "<td>" . $data['Tanggal lahir '] . "</td>";
        echo "<td>" . $data['alamat'] . "</td>";
      }
      echo "</table>";
    ?>
</body>
</html>