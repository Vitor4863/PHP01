<?php
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>cadastrar</title>
</head>
<body>
	
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="../dao/ed_perfil.php" method="Post">
				<h1 id="titulo">Editar</h1>
				<div class="grid">
					<input  name="id" hidden="true" value="<?php
					echo $_SESSION['id'];
					?> ">
					<div><input type="text" placeholder="nome" name="nome" required/></div>
					<input type="email" placeholder="Email" name="email" required/>
                    <input type="usuario" placeholder="usuario" name="usuario" required/>
                    <input type="password" placeholder="senha" name="senha" required/>
					<div><input type="data" name="dataNascimento" required/></div>
					<div><input type="text" placeholder="telefone" name="telefone" required maxlength="9"/></div>
					<div><input type="text" placeholder="cpf"  name="cpf" required maxlength="11"/></div>
					<div><input type="text" placeholder="cep" name="cep" required maxlength="8"/></div>
					<div><input type="text" placeholder="telefone de seguranca" name="numeroSeguranca" required maxlength="9"/></div>
					<div><input type="text" placeholder="deficiencia" name="deficiencia"/></div>
					<div><input type="text" placeholder="alergia" name="alergia"  required maxlength="90"/></div>
					<div><select  name="sangue"  id="sangue" >
						<option placeholder="Selecione seu tipo de sanguinio">Tipo de sanguinio</option>
						<option>A+</option>
						<option>A-</option>
						<option>B+</option>
						<option>B-</option>
						<option>O+</option>
						<option>O-</option>
						<option>AB+</option>
						<option>AB-</option>
					</select>
				</div>
				<select  name="pcd"  id="sangue" >
						<option >PCD</option>
						<option>Sim</option>
						<option>Não</option>
					
					</select>
				 </div>
			
                <button type="submit" name="btn" value="Acessar">Enviar</button>
                      
			</form>
           
		</div>
		
		
		</div>
	</div>
</body>
</html>