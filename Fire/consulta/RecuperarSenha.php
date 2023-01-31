<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="RS.css">
    <title>Document</title>
</head>
<body>
<form action="../dao/alt_senha.php" method="Post">
				<h1 id="titulo">Recuperar Senha</h1>
				<div class="grid">
					
                <input  name="usuario"  value="<?php
					echo $_SESSION['email'];
					?> " hidden>
                    <input type="password" placeholder="Senha" name="senha" required/>
					
                <button type="submit" name="btn" value="Acessar">Enviar</button>
			</form>
</body>
</html>