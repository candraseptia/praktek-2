<?php
$data = array(
    "web-prog" => array(
        "candra" => 7,
        "septia" => 8,
        "cahya" => 6
    ),
    "kalkulus" => array(
        "cahya" => 9,
        "septia" => 8,
        "candra" => 5
    )
);

echo "Nilai web-prog untuk Septia : " 
  .$data["web-prog"]["septia"] . "<br>";
echo "Nilai Kalkulus untuk Candra : " 
   .$data["kalkulus"]["candra"];
?>