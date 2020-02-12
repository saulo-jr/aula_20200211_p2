<?php
include 'conexao.php';

$sql = "CREATE TABLE USUARIO(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            NOME VARCHAR(35),
            LOGIN VARCHAR(40),
            SENHA VARCHAR(32),
            EMAIL VARCHAR(40)
            
             )";
			
if(mysqli_query($conexao, $sql)) echo "Tabela criada com sucesso";
else echo "Falha na criação da tabela" . mysqli_error($conexao);

mysqli_close($conexao); // encerra a conexão
?>