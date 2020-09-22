<?php
// Salvar como: admin/acesso_sup.php
// A sessão precisar ser iniciada em cada página diferente
// Se a sessão não existir, iniciar uma
if(!isset($_SESSION)) session_start();

// Determina o nível de acesso;
$nivel_acesso   =   'sup';

// Verificar se não há variáveis da sessão que
// identifica o usuário
if(!isset($_SESSION['login_usuario']) OR ($_SESSION['nivel_usuario']!=$nivel_acesso)){
    // Redireciona o visitante a página de autorização
    header("Location: invasor_user.php"); exit;
};
?>