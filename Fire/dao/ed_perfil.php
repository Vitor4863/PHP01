<?php

// Executa a conexao com o mysql e selecionar a base
include_once 'conexao.php';


//Recupera os dados enviados via POST
// recebe o Nome
$id= $_POST["id"];
$nome= $_POST["nome"];

//recebe o email
$email = $_POST["email"];
$usuario = $_POST["usuario"];

//$senha = PASSWORD_HASH($_POST["senha"], PASSWORD_DEFAULT);
$senha = $_POST["senha"];
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


$sql = "update tb_usuario set nome = '$nome',email = '$email',usuario = '$usuario',senha = '$senha ',dataNascimento = '$data',telefone = '$telefone', cpf='$cpf',cep='$cep',numeroSeguranca='$numeroSeguranca',deficiencia='$deficincia',alergia='$alergia', sangue='$sangue',pcd='$pcd' where id = '$id' ";


if(mysqli_query($conn,$sql)){
    $msg = "alterado com sucesso!";
    
    }else{
        $msg = "Error ao alterar";
    }
    
    mysqli_close($conn);
    echo "<script> location.href='../login/login.php';</script>"

    ?>