<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
<body>
<div class="container" id="container">
		<div class="form-container log-in-container">
    <form action="../dao/cad_cadastro.php" method="Post">
        <label >Nome</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required maxlength="90">
        <label>Email</label>
        <input type="text" name="email" placeholder="Digite seu email" required maxlength="90">
        <label >usuario</label>
        <input type="text" name="usuario" placeholder="Digite o usuario" required maxlength="90">
        <label >Senha</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required maxlength="90">
        <div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required maxlength="90">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
          <button type="submit" name="btn" value="Acessar">Enviar</button>      
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
