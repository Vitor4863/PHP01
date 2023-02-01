<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="stylesheet" href="style1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://unpkg.com/phosphor-icons"></script>
	<title>Cadastrar</title>
</head>
<body>
	
	<div class="container" id="container">
		<div class="form-container log-in-container">
		<a class= "login" href="../login/index.php"><i class="ph-arrow-circle-left"></i> </a>
			<form action="../dao/cad.php" method="Post">
				<h1 id="titulo">Prencha seus Dados</h1>
				<div class="grid">
					<div><input type="text" placeholder="Nome" name="nome" required/></div>
					<input type="email" placeholder="Email" name="email" required/>
                    <input type="usuario" placeholder="Usuario" name="usuario" required/>
                    <input type="password" placeholder="Senha" name="senha" required/>
					<div><input type="date" name="dataNascimento" required/></div>
					<div><input type="text"  onkeydown="return mascaraTelefone(event)" placeholder="Telefone" name="telefone" required maxlength="12"/></div>
					<div><input type="text" placeholder="CPF"  id="cpf" name="cpf" maxlength="14" onkeydown="javascript: fMasc( this, mCPF );" required maxlength="11" /></div>
					<div><input type="text" placeholder="CEP"   onkeyup="handleZipCode(event)" name="cep" required maxlength="9"/></div>
					<div><input type="text" onkeydown="return mascaraTelefone(event)" placeholder="Numero de seguranca(Opc)" name="numeroSeguranca" required maxlength="9"/></div>
					<div><input type="text" placeholder="Alergia" name="alergia"  required maxlength="30"/></div>
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
	
	<script src="./main.js">
	
	</script>
</body>
</html>