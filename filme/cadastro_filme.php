<?php
include 'conexao.php';

if ($_POST){

	$nomefilme = $_POST["nomefilme"];
	$sinopse = $_POST["sinopse"];


     $ext = strtolower(substr($_FILES['pic']['name'],-4)); //Pegando extensão do arquivo
    $imagem = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = 'imagensfilme/'; //Diretório para uploads 
    move_uploaded_file($_FILES['pic']['tmp_name'], $dir.$imagem); //Fazer upload do arquivo

     $trailer = "";

   $sql = "INSERT INTO FILMES Values (NULL,'$nomefilme','$sinopse','$imagem','$trailer')";
   if (mysqli_query($conexao,$sql)) {
   	echo "<script>alert('Cadastro realizado com sucesso!');
   	</script>";
   }
   else{
   	die("Falha no cadastro.");
   }
}




?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>CADASTRO DE FILMES</title>
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Arquivo CSS Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- Arquivo CSS do projeto -->
		<link rel="stylesheet" href="css/estilo.css" />
		<!-- CSS interno -->
		<style>
		.container {
			max-width: 960px;
		}
		body {
			background-color: #D1DEDE;
			
		}
		

		</style>
  </head>

  <body>

    <div class="container">
      <div class="py-5 text-center">
        <h2>Cadastre seus filmes favoritos!</h2>
		
      </div>
	  
	    
      
        <div class="col-md-12 text-center">
          <form class="needs-validation" novalidate method="post" action="" enctype="multipart/form-data">
            
              <div class="col-md-12 mb-3 text-left">
                <label for="nome">NOME DO FILME</label>
                <input type="text" class="form-control w-50" name="nomefilme" id="nomefilme" placeholder="" value="" required>
              </div>          

            <div class="col-md-3 mb-3 text-left">
              <label for="login">SINOPSE</label>
                <textarea name="sinopse" cols="50" rows="10">
                	
                </textarea>
            </div>
			
			<div class="col-md-3 mb-3 text-left">
               <label for="conteudo">Enviar imagem:</label>
              <input type="file" name="pic" accept="image/*">   
            </div>

            <div class="col-md-3 mb-3 text-left">
              <label for="trailer">INSIRA O TRAILER</label>
                <input type="file" name="trailer" accept="image/*"> 
            </div>
	  	  </div>
		
          
        <hr class="mb-4">
		<div id="row">
		<div class="col-md-12">
            <button class="col-md-6 btn btn-primary btn-lg btn-block m-auto" style="color: #8FF7A7;" type="submit">Cadastrar</button>
          </form>		  
        </div>	
		</div>
		
	  

	  <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; Etec Dr. Demétrio Azevedo Jr. - Técnico em Desenvolvimento de Sistemas - Saulo</p>
      </footer>
	  
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>