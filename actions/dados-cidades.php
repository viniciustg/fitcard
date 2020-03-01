<?php
require '..\config.php';
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

$estado = filter_input(INPUT_POST, 'estado');
$dados = $estabelecimentoDao->filterCity($estado);
echo $dados;