<?php
include_once("taiwanMapper.php");


$TaiwanMapper = new taiwanMapper();


for ($i=0; $i<100000;$i++) {
    $lat =  rand(218000, 241000) /10000;
    $lng =  rand(1182000, 1221000) /10000;

    $district = $TaiwanMapper->latLngToDistrict($lat,$lng);
    echo "($lat, $lng) $district <br>\n";
}



