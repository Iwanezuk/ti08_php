<?php
// Incluindo o Sistema de autenticação
include("acesso_com.php");
?>
<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");
// Selecionar os dados
$consulta   = "SELECT * FROM tbtipos ORDER BY rotulo_tipo ASC";
// Fazer a lista completa dos dados
$lista      = $conn_produtos->query($consulta);
// Separar os dados em linhas
$row        = $lista->fetch_assoc();
// Contar o total de linhas
$totalRows  = ($lista)->num_rows;
?>
<!doctype html>
<html lang="pt-br">
<head>
<title>Tipos - Lista</title>    
<meta charset="utf-8">
<!-- Link arquivos Bootstrap CSS -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="../css/meu_estilo.css" type="text/css">
</head>
<body class="fundofixo">
<?php include "menu_adm.php" ?>
<main class="container">
    <h1 class="breadcrumb alert-warning">Lista de Tipos</h1>
    <!-- Abertura da DIV de dimensionamento -->
    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
    <table class="table table-hover table-condensed tbopacidade">
       <!-- thead>tr>th*4 -->
       <thead>
           <tr>
               <th class="hidden">ID</th>
               <th>SIGLA</th>
               <th>RÓTULO</th>
               <th>
                   <a href="tipos_insere.php" target="_self" class="btn btn-block btn-primary btn-xs">
                      <span class="hidden-xs">ADICIONAR <br></span>
                      <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                  </a>
               </th>
           </tr>
       </thead>
       <!-- tbody>tr>td*4 -->
       <tbody>
          <!-- Abre a estrutura de repetição -->
          <?php do { ?>
           <tr>
               <td class="hidden"><?php echo $row['id_tipo']; ?></td>
               <td><?php echo $row['sigla_tipo']; ?></td>
               <td><?php echo $row['rotulo_tipo'] ?></td>
               <td>
                  <a href="tipos_atualiza.php?id_tipo=<?php echo $row['id_tipo']; ?>" class="btn btn-warning btn-block btn-xs" role="button">
                      <span class="hidden-xs">ALTERAR<br></span>
                      <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                  </a>
                   <button data-nome="<?php echo $row['rotulo_tipo']; ?>" data-id="<?php echo $row['id_tipo']; ?>" class="delete btn btn-danger btn-block btn-xs">
                       <span class="hidden-xs">EXCLUIR<br></span>
                       <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                   </button>
               </td>
           </tr>
           <?php } while ($row = $lista->fetch_assoc()); ?>
           <!-- Fecha a estrutura de repetição -->
       </tbody>
    </table>
    </div><!-- Fechamento do dimensionamento -->
</main>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title text-danger">ATENÇÃO!</h4>
         </div>
         <div class="modal-body">
             Deseja mesmo EXCLUIR o item?
             <h3><span class="nome text-danger"></span></h3>
         </div>
         <div class="modal-footer">
             <a href="#" type="button" class="btn btn-danger delete-yes">
                 Confirmar
             </a>
             <button class="btn btn-success" data-dismiss="modal">
                 Cancelar
             </button>
         </div> 
      </div>
   </div>
</div>
<!-- Link arquivos Bootstrap JS (plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!-- Script para o Modal -->
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome    = $(this).data('nome');
        // buscar o valor do atributo data-nome
        var id      = $(this).data('id');
        // buscar o valor do atributo data-id
        $('span.nome').text(nome);
        // Inserir o nome do item na pergunta de confirmação
        $('a.delete-yes').attr('href','tipos_exclui.php?id_tipo=' +id);
        // enviar o id para o link do botão confirmar
        $('#myModal').modal('show'); // abre o modal
    });
</script>          
</body>
</html>
<?php mysqli_free_result($lista); ?>








