<?php
session_start();
include_once("../dao/conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
	$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		//echo password_hash($senha, PASSWORD_DEFAULT);
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT id, nome, email, senha , dataNascimento , telefone , cpf , cep , numeroSeguranca , deficiencia , alergia , sangue , pcd FROM tb_usuario WHERE usuario='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['email'] = $row_usuario['email'];
                $_SESSION['dataNascimento'] = $row_usuario['dataNascimento'];
                $_SESSION['telefone'] = $row_usuario['telefone'];
                $_SESSION['cpf'] = $row_usuario['cpf'];
                $_SESSION['numeroSeguranca'] = $row_usuario['numeroSeguranca'];
                $_SESSION['deficiencia'] = $row_usuario['deficiencia'];
                $_SESSION['alergia'] = $row_usuario['alergia'];
                $_SESSION['sangue'] = $row_usuario['sangue'];
                $_SESSION['pcd'] = $row_usuario['pcd'];
				header("Location: ../visao/visao.php");
			}else{
				$_SESSION['msg'] = "Login e senha incorreto!";
				header("Location: ../login/login.php");
			}
		}
	}else{
		$_SESSION['msg'] = "Login e senha incorreto!";
		header("Location: ../login/login.php");
	}
}else{
	$_SESSION['msg'] = "Página não encontrada";
	header("Location: ../login/login.php");
}