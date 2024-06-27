<?php

require_once 'CONFIG.PHP';


//CONFIGURAÇÕES DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'aula_formulario';



//CONEXÃO BANCO DE DADOS
$conn = new mysqli('localhost', 'root', '', 'aula_formulario');

//VERIFICAR CONEXÃO

if($conn->connect_error){
    die(" Falha ao se comunicar com banco de dados: " .$conn->connect_error);
}