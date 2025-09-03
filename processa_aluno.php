<?php

include 'db.php';

$a = $_POST['nome'];
$b = $_POST['obs'];

$query = "INSERT INTO ALUNOS (nome, obs)
			VALUES('$a','$b')";

mysqli_query($conexao, $query);

//exibir uma de usuário cadastrado com sucesso 
// e depois redirecionar para página teste

header('location:index.php?pagina=teste');