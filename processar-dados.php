<?php
require_once 'CONFIG.PHP';




// PEGANDO OS DADOS VINDOS DO FORMULARIO
$nome = $_POST['nome'];
$email = $_POST ['email'];
$nome = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

//PREPARO DE COMANDO PARA TABELA
$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES (?,?,?,?,?) ");
$smtp->bind_param("sssss",$nome, $email, $mensagem, $data_atual, $hora_atual );


//SE EXECUTAR CORRETAMENTE
if($smtp->execute()){
echo "Mensagem enviada com sucesso ";

}else{
    echo "Erro no envio da mensagem".$smtp->error;

}

$smtp->close();
$conn->close();


?>
