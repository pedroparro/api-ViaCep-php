<?php

require __DIR__.'/vendor/autoload.php';
//dependencias
use \App\WebService\ViaCep;

//consultar o cep
$dadosCep = ViaCep::consultarCep("04445000");

//debug
echo "<pre>";
var_dump($dadosCep);
echo "</pre>";

?>