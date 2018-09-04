<?php
require_once 'pessoa.php';
require_once 'pessoa2.php';
require_once 'vendor/autoload.php';
use Projeto\pessoa;
$pessoa = new Pessoa('Joao',35,'1.85');
$pessoa2 = new \Pessoa('Joao',35,'1.85');
$pessoa->andar();
$pessoa2->andar();
?>