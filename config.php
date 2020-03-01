<?php

require __DIR__ . '/vendor/autoload.php';

//timezone
date_default_timezone_set('America/Sao_Paulo');

use App\Connection;
use App\model\Estabelecimento;
use App\EstabelecimentoDAO;

$db = new Connection("localhost", "bd_fitcard", "root", "");
$estabelecimento = new Estabelecimento;

$estabelecimentoDao = new EstabelecimentoDAO($db, $estabelecimento);
