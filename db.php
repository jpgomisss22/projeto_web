<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "teste";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT *FROM ALUNOS";
$consulta_alunos = mysqli_query($conexao, $query);