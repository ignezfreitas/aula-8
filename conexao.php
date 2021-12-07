<?php // conexao procedural ( conexao facil)
// criar variáveis de conexao
$servidor= "127.0.0.1";
$usuario= "root";
$senha= "";
$bd= "bdcurso";

// criar conexao
// mysql_connect(SERVIDOR, USUARIO,SENHA,BD);
// mysqli_connect retorna TRUE ou FALSE
$con= mysqli_connect($servidor,$usuario,$senha,$bd);

//var_dump($con);
if ($con) {
    echo "Conectou ao BD";
} else {
    echo " Falha Conexao BD";
}



