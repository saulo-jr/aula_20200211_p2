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
      


      <a class="btn btn-outline-primary" href="login.php">SAIR</a>
    </div>
    <div>
        <p><a href="cadastro_filme.php">Cadastre filmes!</a></p>
    </div>

<div class="row">
 
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
    <a href="city.html">
    <img src="img/cidade.png" style="width:150px;" >
    </a>
    <h2>Nas favelas do Rio de Janeiro dos anos 1970, dois rapazes seguem caminhos diferentes. Buscapé é um fotógrafo que registra o cotidiano violento do lugar, e Zé Pequeno é um ambicioso traficante que usa as fotos de Buscapé para provar como é durão.</h2>
</div>

<div class="boxfilme col-md-3" style="background: #F1FAEE;">
  <a href="malevola.html">
    <img src="img/male.png" style="width:150px;">
  </a>
    <h2>Cinco anos após Aurora (Elle Fanning) despertar do sono profundo, a agora rainha dos Moors é pedida em casamento pelo príncipe Phillip (Harris Dickinson). Ela aceita o pedido e, com isso, parte rumo ao reino de Ulstead ao lado de Malévola (Angelina Jolie), no intuito de conhecer seus futuros sogros, John (Robert Lindsay) e Ingrith (Michelle Pfeiffer). O jantar entre eles deveria ser de celebração entre os reinos, mas os interesses de Ingrith vêm à tona quando é criado um atrito com Malévola e os demais seres mágicos.</h2>
</div>
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
  <a href="joker.html">
    <img src="img/joker.png" style="width:150px;">
  </a>
    <h2>Arthur Fleck (Joaquin Phoenix) trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais. Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e os mata. Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne (Brett Cullen) é seu maior representante.</h2>
</div>
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
  <a href="demonio.html">
    <img src="img/morte.png" style="width:150px;">
  </a>
    <h2>Mia é uma viciada em drogas que, para vencer seus demônios pessoais, vai com seu irmão David, a namorada do irmão, Natalie, e os amigos de infância Olivia e Eric até uma cabana rústica, que pertence à família. Assim que chegam, descobrem que a cabana foi invadida e que o porão parece uma espécie de altar, rodeado por animais mumificados, onde a descoberta de um Livro dos Mortos invoca forças demoníacas. A presença do mal os possui até que apenas um é deixado a lutar pela sobrevivência..</h2>
</div>
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
  <a href="mariane.html">
    <img src="img/mari.png" style="width:150px;">
  </a>
    <h2>Emma (Victoire Du Bois) é uma escritora que tem sido atormentada por pesadelos com uma bruxa chamada Marianne. A romancista então decide usar seus livros como tentativa de manter a criatura maligna longe, mas percebe que os personagens estão ganhando vida, sendo obrigada a voltar para casa e descobrir o motivo.</h2>
</div>
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
  <a href="venom.html">
    <img src="img/venom.png" style="width:150px;">
  </a>
    <h2>O jornalista Eddie Brock desenvolve força e poder sobre-humanos quando seu corpo se funde com o alienígena Venom. Dominado pela raiva, Venom tenta controlar as novas e perigosas habilidades de Eddie.</h2>
</div>
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
  <a href="travis.html">
    <img src="img/travis.png" style="width:150px;">
  </a>
    <h2>Look Mom I Can Fly coloca os telespectadores na primeira fileira da vida de Scott nos meses que cercam o lançamento de seu álbum indicado ao Grammy, Astroworld. Interrompido com filmagens de seus shows ao vivo e nostálgicos vídeos caseiros da infância de Scott, este documentário segue os momentos de mudança de vida de Travis, incluindo tornar-se pai, se apresentar no Super Bowl e recriar Astroworld para sua cidade natal e fãs.</h2>
</div>
<div class="boxfilme col-md-3" style="background:  #F1FAEE;">
  <a href="bast.html">
    <img src="img/bast.png" style="width:150px;">
  </a>
    <h2>Durante a Segunda Guerra Mundial, na França, um grupo de judeus americanos conhecidos como Bastardos espalha o terror entre o terceiro Reich. Ao mesmo tempo, Shosanna, uma judia que fugiu dos nazistas, planeja vingança quando um evento em seu cinema reunirá os líderes do partido.</h2>
</div>




</div>
	      <footer class="my-5 pt-5 text-muted text-center text-small" style="background-color: #A1E8CC; width: 100%;">
        <p class="mb-1">&copy; Etec Dr. Demétrio Azevedo Jr. - Técnico em Desenvolvimento de Sistemas</p><br>
       <p> @yangcez
       </p>
       <p> Saulo Junior</p>

      </footer>
  	</div><!-- fim class container -->	
	<!-- documentos javascript -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
  </body>
</html>