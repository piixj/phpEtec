<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\model\Usuario;
use App\persistence\ConnectionFactory;

$u = new Usuario();
$u->nome = "Richard Stalman";

$sqlInsert = "INSERT INTO usuarios (nome) VALUES ('" . $u->nome . "')";

$conn = ConnectionFactory::getConnection();
$conn->exec(statement: $sqlInsert);

//echo print_r($conn, true);