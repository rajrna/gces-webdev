<?php

$car=[
    "BMW"=>10000,
    "Miyata"=>5000,
    "Suzuki"=>1000,
    "Ford"=>8000
];
// echo $car["Miyata"];

foreach($car as $name => $price){
    echo "The price of  $name is $price";
    echo "</br>";
}