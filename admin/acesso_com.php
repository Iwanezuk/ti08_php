<?php
// Salvar como: admin/acesso_com.php
// A sessão precisar ser iniciada em cada página diferente
// Se a sessão não existir, iniciar uma
// Determina o nível de acesso;
session_name("chuletaaa");

if(!isset($_SESSION)){ 
        session_start();
};

// Verificar se não há variáveis da sessão que
// identifica o usuário
if(!isset($_SESSION['login_usuario'])){
    // Se não existir, destruimos a sessão por segurança
    header("Location: login.php"); exit;
};

$nome_da_sessao = session_name();

// Verificar se não há variáveis da sessão que
// identifica o usuário
if(!isset($_SESSION['nome_da_sessao']) OR ($_SESSION['nome_da_sessao']!=$nome_da_sessao)){
    // Redireciona o visitante a página de autorização
    session_destroy();
    header("Location: login.php"); exit;
};   

if(!isset($_SESSION['login_usuario'])){
    // Se não existir, destruimos a sessão por segurança
    session_destroy();
    // Redireciona o visitante de volta para login
    header("Location: login.php"); exit;
};

?>