<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://unpkg.com/phosphor-icons"></script>
</head>
<body>

<div class="container" id="container">
<div class="form-container log-in-container">
	<a class= "login" href="../login/login.php"><i class="ph-arrow-circle-left"></i> </a>
	
    <form action="../dao/alt_senha.php" method="Post">
	
		<h1>Alterar</h1>
        <input type="text" name="usuario" placeholder="Digite o usuario" require>
        <input type="password" name="senha" placeholder="Digite sua senha" require>
        <div class="wthree-text">
						<div class="check">
							<input type="checkbox" class="checkbox" required="">
							<span>Aceite os termos</span>
						</div> 
						<div class="clear"> </div>
					</div>
		<button type="submit" name="btnLogin" value="Acessar">Alterar</button>    
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
       
</body>
</html>