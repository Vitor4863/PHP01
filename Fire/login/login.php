<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="estilo.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/flame-outline.svg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form method="POST" action="../valida/valida.php"  >

            <?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
					<a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
				</div>
				<span>or use your account</span>
				<input type="text" name="usuario" placeholder="Digite o seu usuário"><br><br>
				<input type="password" name="senha" placeholder="Digite a sua senha"><br><br>
				
				<a href="../cadastro/cadastra.php">crie sua conta</a>   
				<a href="../alterar/alterar.php">Forgot your password?</a> 
                <button type="submit" name="btnLogin" value="Acessar">Acessar</button>  
				
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
                     <img src="img/0eded855366105ec4e4304465d098e48-removebg-preview.png" alt="" width="400px">
					<h1</h1>
					<p></p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>