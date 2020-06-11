<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Produtos - Insere</title>
<!-- Link arquivos Bootstrap CSS -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
</head>
<body>
<main class="container">
<div class="row">
<div class=""><!-- Dimensionamento -->
   <h2 class="breadcrumb text-danger">
      <a href="produtos_lista.php">
          <button class="btn btn-danger" type="button">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          </button>
      </a>
       Inserindo Produtos
   </h2>
   <!-- Abre thumbnail -->
   <div class="thumbnail">
      <div class="alert alert-danger" role="alert">
      <form action="produtos_insere.php" id="form_produto_insere" name="form_produto_insere" method="post" enctype="multipart/form-data">
         <!-- Select id_tipo_produto -->
         <label for="id_tipo_produto">Tipo:</label>
         <div class="input-group">
             <span class="input-group-addon">
                <span class="glyphicon glyphicon-tasks" aria-hidden="true"></span>                 
             </span>
             <!-- select>option*2 -->
             <select name="id_tipo_produto" id="id_tipo_produto" class="form-control" required>
                 <option value="1">Churrasco</option>
                 <option value="2">Sobremesa</option>
             </select>
         </div>
         <br>
         <!-- Radio destaque_produto -->
         <label for="destaque_produto">Destaque?</label>
         <div class="input-group">
            <label for="destaque_produto_s" class="radio-inline">
                <input type="radio" name="destaque_produto" id="destaque_produto" value="Sim">Sim
            </label>
            <label for="destaque_produto_n" class="radio-inline">
                <input type="radio" name="destaque_produto" id="destaque_produto" value="Não" checked>Não
            </label>
         </div>
         <br>
         <!-- text descri_produto -->
         <label for="descri_produto">Descrição:</label>
         <div class="input-group">
            <span class="input-group-addon">
               <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
            </span>
            <input type="text" name="descri_produto" id="descri_produto" class="form-control" placeholder="Digite o título do produto." maxlength="100" required>
         </div>
         <br>
         <!-- textarea resumo_produto -->
         <label for="resumo_produto">Resumo:</label>
         <div class="input-group">
            <span class="input-group-addon">
               <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
            </span>
            <textarea name="resumo_produto" id="resumo_produto" cols="30" rows="8" placeholder="Digite os detalhes do produto." class="form-control"></textarea>
         </div>
         <br>
         <!-- number valor_produto -->
         <label for="valor_produto">Valor:</label>
         <div class="input-group">
            <span class="input-group-addon">
               <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
            </span>
            <input type="number" name="valor_produto" id="valor_produto" min="0" step="0.01" class="form-control">
         </div>
         <br>
         <!-- file imagem_produto -->
         <label for="imagem_produto">Imagem:</label>
         <div class="input-group">
            <span class="input-group-addon">
               <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
            </span>
            <input type="file" name="imagem_produto" id="imagem_produto" class="form-control">
         </div>
         <br>
         
         
         
         
         
         
      </form>
      </div>       
   </div>
   <!-- Fecha thumbnail --> 
</div>
</div>
</main>
   
   
   
   
   
    
<!-- Link arquivos Bootstrap JS (plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>