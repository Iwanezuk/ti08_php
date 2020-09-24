<!-- Salvar como: index.php -->
<!doctype html>
<html lang="pt-br">
<head>
<title>Chuleta Quente</title>
<meta charset="utf-8">
<!-- Link arquivos Bootstrap css -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/meu_estilo.css" rel="stylesheet">
</head>
<body class="fundofixo">
<!-- ÁREA DO MENU -->
<?php include('menu_publico.php'); ?>
<a name="home">&nbsp;</a>
<?php include('carroussel.php'); ?>

<main class="container">
   <!-- ÁREA DESTAQUES -->
   <a name="destaques">&nbsp;</a>
   <hr>
   <?php include('produtos_destaque.php'); ?>
   
   <!-- ÁREA PRODUTOS EM GERAL -->
   <a name="produtos">&nbsp;</a>
   <hr>
   <?php include('produtos_geral.php'); ?>
   <hr>
   <?php include('produtos_geral_carroussel.php'); ?>
   <!-- RODAPÉ -->
   <footer>
       <?php include('rodape.php'); ?>
       <a name="contato">&nbsp;</a>
   </footer>
</main>
<!-- Link arquivos Bootstrap js -->        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>
