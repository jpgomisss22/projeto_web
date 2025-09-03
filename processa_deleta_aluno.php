<?php

include'db.php';

$bunda = $_GET['cu'];


$query = "DELETE FROM ALUNOS WHERE id = $bunda";

mysqli_query($conexao, $query);

header('location:index.php?pagina=teste');