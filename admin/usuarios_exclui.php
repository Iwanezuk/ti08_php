<?php
// Incluindo o Sistema de autenticação SUPERVISOR
include("acesso_sup.php");
?>
<?php
// Incluir o arquivo e fazer a conexão
include("../Connections/conn_produtos.php");

// Definindo o USE do Banco de Dados
mysqli_select_db($conn_produtos,$database_conn);

// Definindo e recebendo os dados para consulta
$tabela_delete  = "tbusuarios";
$id_tabela_del  = "id_usuario";
$id_filtro_del  =  $_GET['id_usuario'];

// SQL para exclusão
$deleteSQL  =   "DELETE
                FROM ".$tabela_delete."
                WHERE ".$id_tabela_del."=".$id_filtro_del."";
$resultado  =   $conn_produtos->query($deleteSQL);

// Redirecionamento da página após a ação
$destino    =   "usuarios_lista.php";
if(mysqli_insert_id($conn_produtos)){
    header("Location: $destino");
}else{
    header("Location: $destino");
};
?> 