<?php
    //membuat index Arrey
    $kendaraan = ["mobil", "sepeda","truk","motor","bus"];
    //menampilkan output
    echo "nama-nama alat teransportasi: <br>";
    echo $kendaraan[0],"<br>";
    echo $kendaraan[1],"<br>";
    echo $kendaraan[2],"<br>";
    echo $kendaraan[3],"<br>";
    echo $kendaraan[4],"<br>";

    //quiz,
    $hewan = ["kucing","kelinci","kambing","sapi","keldai","banteng","iguana","buaya","kancil","kadal",];

    echo $hewan[0],"<br>";
    echo $hewan[1],"<br>";
    echo $hewan[2],"<br>";
    echo $hewan[3],"<br>";
    echo $hewan[4],"<br>";
    echo $hewan[5],"<br>";
    echo $hewan[6],"<br>";
    echo $hewan[7],"<br>";
    echo $hewan[8],"<br>";
    echo $hewan[9],"<br>";

      $_fruits = ["pepaya","mangga","pisang","jambu"];
      $jml_data = count($_fruits);


      for($i = 0;$i<$jml_data;$i++){
        echo"buah index - "."adalah ".$_fruits[$i];
        echo"<br>";
      }
      

?>