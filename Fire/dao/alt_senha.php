<?php


include_once 'conexao.php';

$usuario = $_POST["usuario"];
$senha = PASSWORD_HASH($_POST["senha"],PASSWORD_DEFAULT);



$sql = "update tb_usuario set senha = '$senha' where email = '$usuario' ";

if(mysqli_query($conn,$sql)){
$msg = "alterado com sucesso!";

}else{
    $msg = "Error ao alterar";
}

mysqli_close($conn);
echo "<script>  location.href='../Login/login.php';</script>";


?>