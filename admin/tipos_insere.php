<!doctype html>
<html lang="pt-br">
<head>
<title>Tipos - Insere</title>
<meta charset="utf-8">
<!-- Link arquivos Bootstrap css -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<main class="container">
<div class="row">
<div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"><!-- Dimensionamento -->
   <h2 class="breadcrumb text-warning">
      <a href="tipos_lista.php" target="_self">
          <button class="btn btn-warning" type="button">
             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          </button>
      </a>
      Inserindo tipos
   </h2>
   <div class="thumbnail">
      <div class="alert alert-warning">
          <!-- Abre o form -->
          <form action="tipos_insere.php" name="form_insere_tipo" id="form_insere_tipo" method="post" enctype="multipart/form-data">
             <!-- input rotulo_tipo -->
             <label for="rotulo_tipo">Rótulo</label>
             <div class="input-group">
                 <span class="input-group-addon">
                     <span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
                 </span>
                 <input type="text" name="rotulo_tipo" id="rotulo_tipo" autofocus maxlength="15" placeholder="Digite o tipo do produto." class="form-control" required>
             </div>
             <br>
             <!-- input sigla_tipo -->
             <label for="sigla_tipo">Sigla</label>
             <div class="input-group">
                 <span class="input-group-addon">
                     <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                 </span>
                 <input type="text" name="sigla_tipo" id="sigla_tipo" maxlength="3" placeholder="Digite a sigla do tipo." class="form-control" required>
             </div>
             <br>
             <!-- btn enviar -->
             <input type="submit" value="Cadastrar" role="button" name="enviar" id="enviar" class="btn btn-block btn-warning">
          </form>
          <!-- Fecha o form -->
      </div>       
   </div>
</div>
</div>
</main>
<!-- Link arquivos Bootstrap js -->        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
