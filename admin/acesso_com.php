<?php
// Salvar como: admin/acesso_com.php
// A sessão precisar ser iniciada em cada página diferente
// Se a sessão não existir, iniciar uma
if(!isset($_SESSION)) session_start();

// Verificar se não há variáveis da sessão que
// identifica o usuário
if(!isset($_SESSION['login_usuario'])){
    // Se não existir, destruimos a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta para login
    header("Location: login.php"); exit;
};
?>