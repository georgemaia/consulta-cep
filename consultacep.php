<?php

require "vendor/autoload.php";

use Georgemaia\ConsultaCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('59086200');

print_r($resultado);