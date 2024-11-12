<?php
    $array = [
        "97123456"=>"Klaas",
        "97234563"=>"Achmed",
        "97442233"=>"Janien",
        "97766601"=>"Rene"
    ];
    echo "  key:    Voornaam:\n";
    foreach ($array as $key => $value) {
        echo "$key  $value\n";
    }
?>