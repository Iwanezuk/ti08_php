<!-- Salvar como: admin/menu_adm.php -->
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Área Administrativa</title>
<!-- Link arquivos Bootstrap CSS -->
<!-- CÓDIGO DESABILITADO PARA NÃO HAVER CONFLITOS 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
-->


</head>
<body>
<nav class="nav navbar-inverse">
<div class="container-fluid">
   <!-- Agrupamento para exibição MOBILE -->
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar" aria-expanded="false">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
          <img src="../imagens/logochurrascopequeno.png" alt="">
      </a> 
   </div>
   <!-- Fecha exibição Mobile -->
   <!-- nav direita -->
   <div class="collapse navbar-collapse" id="defaultNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li>
            <button type="button" class="btn btn-danger navbar-btn disabled">
                Olá, <?php echo($_SESSION['login_usuario']); ?>
                &nbsp;
                <?php 
                      if($_SESSION['nivel_usuario']=='com'){
                          echo ("<span class='glyphicon glyphicon-user' aria-hidden='true'></span>");
                      }else if($_SESSION['nivel_usuario']=='sup'){
                          echo ("<span class='glyphicon glyphicon-sunglasses text-default' aria-hidden='true'></span>");
                      };
                    ?> 
            </button>&nbsp;&nbsp;&nbsp;
        </li>
         
         
          <li class="active"><a href="index.php">ADMIN</a></li>
          <li><a href="produtos_lista.php">PRODUTOS</a></li>
          <li><a href="tipos_lista.php">TIPOS</a></li>
          <li><a href="usuarios_lista.php">USUÁRIOS</a></li>
          <li class="active">
              <a href="../index.php">
                  <span class="glyphicon glyphicon-home"></span>
              </a>
          </li>
          <li>
              <a href="logout.php">
                  <span class="glyphicon glyphicon-log-out"></span>
              </a>
          </li> 
      </ul>
   </div>
   <!-- fecha nav direita -->
</div>
</nav>
<!-- Link arquivos Bootstrap js -->
<!-- CÓDIGO DESABILITADO PARA NÃO HAVER CONFLITOS  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
-->
</body>
</html>










