<?php

// Parametros de conexao
$servidor="127.0.0.1";
$usuario="root";
$senha="";
$bd="bdescola";


// Criar a conexao

$con= mysqli_connect($servidor,$usuario,$senha,$bd);

if ($con) {
    echo "Conectado ao BD";
} 
else {
    echo "Falha na conexão";
}
