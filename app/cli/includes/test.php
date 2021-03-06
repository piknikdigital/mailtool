<?php


$f = "./../../json-data/pmi2005/pmi-200525-lending-AB-testing/pmi-200525-20.94-Lending-AB-test-try-benefits-2-html.json";

readblock($f);

function readblock($f)
{

    $data1  = file_get_contents($f);

    $a      = json_decode($data1, true);

    $b      = json_encode($a['blocks'], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

    $c      = "    \"blocks\" : \n    ".str_replace("\n" , "\n    ", $b) . ",\n";
    
    echo $c.PHP_EOL;
}