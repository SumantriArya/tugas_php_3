<?php
 $kendaraan = [
    "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
    "mobil" => ["merek" => "Toyota", "type" => "Vios", "year" => 2016],
    "motor" => ["Honda", "Yamaha", "Suzuki"]
 ];

 // Menampilkan Output
 echo "Ini Array kendaraan <br>";

 // Menampilkan nama-nama transportasi
 echo "Transportasi:<br>";
 foreach ($kendaraan["transportasi"] as $transportasi) {
    echo $transportasi . "<br>";
 }

 echo "================<br>";
 // Menampilkan merek mobil
 echo "Merek Mobil: " . $kendaraan["mobil"]["merek"] . "<br>";


 // Menampilkan merek motor dengan garis pemisah
 echo "================<br>";
 echo "Merek Motor: <br>";
 foreach ($kendaraan["motor"] as $merek) {
    echo $merek . "<br>";
 }
 echo "=======================<br>";


 // Data harga jus buah
 $ar_jus = [
    ["buah" => "Mangga", "harga" => 8000],
    ["buah" => "Alpukat", "harga" => 10000],
    ["buah" => "Durian", "harga" => 14000],
 ];


 // Menampilkan harga jus buah, kecuali untuk buah "Honda"
 foreach ($ar_jus as $jus) {
    if ($jus["buah"] !== "Honda") {
        echo "Jus " . $jus["buah"] . " harganya: " . $jus["harga"] . "<br>";
    }
 }
 echo "=======================<br>";





// Arrey multidimensi

//    $ar_jus = [
//     ["buah"=>"mangga","harga"=>8000],
//     ["buah"=>"alpukat","harga"=>10000],
//     ["buah"=>"Durian","harga"=>14000],
//    ];

//    foreach($ar_jus as $jus){
//     echo "jus ".$jus["buah"]." harganya : ".$jus["harga"]."<br>";
// }

?>