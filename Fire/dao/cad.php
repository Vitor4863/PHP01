<?php

// Executa a conexao com o mysql e selecionar a base
include_once 'conexao.php';


//Recupera os dados enviados via POST
// recebe o Nome

$nome= $_POST["nome"];

//recebe o email
$email = $_POST["email"];
$usuario = $_POST["usuario"];

$senha = PASSWORD_HASH($_POST["senha"], PASSWORD_DEFAULT);
// recebe a data
$data = $_POST["dataNascimento"];
// recebe o telefone
$telefone = $_POST["telefone"];
// recebe o cpf
$cpf = $_POST["cpf"];
// recebe o cep
$cep = $_POST["cep"];
// recebe o telefone de segurança
$numeroSeguranca = $_POST["numeroSeguranca"];
// recebe a deficiencia
$deficincia = $_POST["deficiencia"];
// recebe a alergia
$alergia = $_POST["alergia"];
//receba senha
//recebe tipo-sanguineo
$sangue = $_POST["sangue"];
//recebe pcd 
$pcd = $_POST["pcd"];


//montar a query sql de gravação recebendo as variaveis via post

$sql = "INSERT INTO tb_usuario values (null,'$nome', '$email', '$usuario', '$senha' ,'$data', '$telefone', '$cpf' , '$cep', '$numeroSeguranca' , '$deficincia' , '$alergia','$sangue','$pcd')";


//Faz a conexao e executa a instrucao carregada na varivael $sql e os envia para o banco mysql.
if (mysqli_query($conn, $sql)){
    // Caso a conexao esteja correta cria o retorno do cadastro
    $msg = "Cadastrado com sucesso!";
}else{    
    // Caso a conexao nao seja realizada cria o retorno do cadastro com erro
    $msg = "Erro ao Cadastrar";
}
// Encerra a conexão com o banco
mysqli_close($conn);
// Cria um alert javascript carrega o conteúdo da variável $msg e redireciona para o index
echo "<script> location.href='../login/index.php';</script>"
        




?>