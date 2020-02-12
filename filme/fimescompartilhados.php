
<?php
//controle de sessão, impede a pessoa de entrar na index sem estar logada
session_start();
if(empty($_SESSION["login"])){
echo"<script>alert('Faça o login primeiro!')</script>";
header("Location:login.php"); //header redireciona para outra pagina

}

?>



<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>KNOWING ABOUT FILMS</title>
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
			background-color: #f5f5f5;
		}

		.boxfilme{
  				width: 200px;
  				text-align: center;

  				
}
		.boxfilme h2 {
  		font-size: 15px; 
  		text-align: left;
}

		

		</style>
  </head>

  <body>

    <div class="container-fluid" style="background-color: #FEFDFF;">
	
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 shadow-sm" style="background-color: #C8D5B9;">
      <h5 class="my-0 mr-md-auto font-weight-normal" style="margin-left: 42%">KNOWING ABOUT FILMS</h5>
      <P><<?php echo $sql;                     ?></P>


      <a class="btn btn-outline-primary" href="login.php">SAIR</a>
    </div>
    <div>
        <p><a href="cadastro_filme.php">Cadastre filmes!</a></p>
    </div>


    
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>