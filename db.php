<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'aplicacao_estudadotcom';

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM turmas";
$consulta = mysqli_query($conexao, $query);