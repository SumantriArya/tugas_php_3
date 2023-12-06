<?php
 //membuat assosiativ arrey
 $login = [
    "id" => 786,
    "pass" => 123,
    "role" => "admin",
    "active" => 1,
    "level" => 1
 ];

 // menampilkan output
 echo "id = ",$login["id"],"<br>";
 echo "pass =",$login["pass"],"<br>";
 echo "role =",$login["role"],"<br>";
 echo "active =",$login["active"],"<br>";
 echo "level =",$login["level"],"<br>";

 //membuat arrey associtive
 $umur = ["ahmad"=>20,"Ali"=>21,"Dewi"=>19];

 //loop associtive Arrey
 foreach($umur as $key => $val){
    echo "key : ".$key.",value ".$val;
    echo "<br>";
 }

 //
?>