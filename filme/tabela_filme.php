<?php
include 'conexao.php';

$sql = "CREATE TABLE FILMES(
            ID INT PRIMARY KEY AUTO_INCREMENT,
            NOME VARCHAR(35),
            SINOPSE BLOB,
            IMAGEM VARCHAR(100),
            TRAILER VARCHAR(100)
            
             )";
			
if(mysqli_query($conexao, $sql)) echo "Tabela criada com sucesso";
else echo "Falha na criação da tabela" . mysqli_error($conexao);

mysqli_close($conexao); // encerra a conexão
?>