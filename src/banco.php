<?php
require_once 'Conta.php';



$primeiraConta = new Conta('123.456.789-10', 'Vinicius Silva');


$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$segundaConta = new Conta('698.549.548-10', 'Patricia');
var_dump($segundaConta);

echo Conta::recuperaNumeroDeConta();