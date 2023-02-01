<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="shortcut icon" type="image/x-icon" href="img3/flame-outline.svg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"/>

    <link rel="stylesheet" href="user6.css">

    
</head>

<body>
    <div class="tudo">
        <div class="sidebar">
           <a href="../visao/visao.php"><div class="sidebar-top">
                <img src="img3/flames.png" alt="" width="40px">
                <span class="brand">FireHelpCenter</span><br>
                 
            </div></a>
            
            <div class="sidebar-center">
                <ul class="list">
                   <a href="../consulta/usuario.php"><li class="list-item">
                         <img src="img3/man.png" alt="" width="30px">
                        <span class="list-item-text">Perfil</span>
                    </li></a>
                    
                    <li class="list-item">
                       
                       <form action="../dao/apagar.php">
                       <input class="DE" type="text" placeholder="id" required name="id" hidden value="<?php
					echo $_SESSION['id'];
					?> ">
                        <input class="btn2" type="submit" name="Deletar Conta" value="Apagar Conta">
                        </form>
                    </li>
                    <li class="list-item">
                     
                        <a href="RecuperarSenha.php"  hidden>Alterar Senha</span></a>
                    </li>
                    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/phosphor-icons"></script>
                </ul>
            </div>
            

        

    </div>
    <section id="main_user">
      
        <div class="info">
            
            <div class="container_info">
            <div class="container_icons">
                 <!---   <a href="" id="edit"><i class='bx bx-edit icon '></i></a> -->

                    <button id="action-btn"><i class='bx bx-edit icon '></i></button>
                 
               
                </div>
                <form action="../dao/ed_perfil.php" method="Post">
                <h2>Perfil</h2>
                
                  
                <input  name="id" hidden="true" value="<?php
					echo $_SESSION['id'];
					?> ">
                <div class="nome" >
                    <span><strong>Nome:</strong> </span>
                    <?php
					echo $_SESSION['nome'];
					?> <br>
                  
                 
                  <input  class="input" placeholder="Nome" hidden name="nome" id ="nome"   value="<?php
                    echo $_SESSION['nome'];
                    ?> ">
                 
                </div>
                <div class="underline"></div>
                


                <div class="usuario"> 
                    <span><strong>Usuario:</strong></span>
                    <?php 
					echo $_SESSION['usuario'];
					?> <br>
                    <input  class="input" placeholder="Usuario" hidden  id ="usuario" name="usuario"  value="<?php
                    echo $_SESSION['usuario'];
                    ?> ">
                      
                       
                </div>

                <div class="underline"></div>

                <div class="email">
                    <span><strong>Email:</strong> </span>
                    <?php
					echo $_SESSION['email'];
                    
					?> <br>
                    <input  class="input" type="email" placeholder="Email" hidden id ="email" name="email"  value="<?php
                    echo $_SESSION['email'];
                    ?> ">
                   
                </div>

                <div class="underline"></div>

               <!--<div class="senha">
                    <span><strong>Senha:</strong></span>
                    <?php
					echo $_SESSION['senha'];
					?> 
                     <input id="senha" type="password" placeholder="senha"  hidden name="senha">
                </div> -->

                

                <div class="data">

                    <span><strong>Data de nascimento:</strong> </span> 
                    <?php
					echo $_SESSION['dataNascimento'];
					?> <br>
                  
                    <input  class="input" type="date" placeholder="Data" hidden name="dataNascimento" id ="data"  value="<?php
                    echo $_SESSION['dataNascimento'];
                    ?> ">
                </div>


                <div class="underline"></div>

                <div class="telefone">

                    <span><strong>Telefone:</strong> </span>
                    <?php
					echo $_SESSION['telefone'];
					?> <br>
                    <input  class="input" type="telefone" onkeydown="return mascaraTelefone(event)"  maxlength="12" placeholder="Telefone" hidden name="telefone" id ="telefone"  value="<?php
                    echo $_SESSION['telefone'];
                    ?> ">
                   

                <div class="underline"></div>

                <div class="cpf">

                    <span><strong>CPF:</strong> </span>
                    <?php
					echo  $_SESSION['cpf'];
					?> <br>
                    
                       
                    <input  class="input" type="text" onkeydown="javascript: fMasc( this, mCPF );"  maxlength="14" placeholder="CPF" hidden name="cpf" id ="cpf"  value="<?php
                    echo $_SESSION['cpf'];
                    ?> ">
                </div>

                <div class="underline"></div>

                 <div class="cep">

                    <span><strong>CEP:</strong> </span>
                    <?php
					echo $_SESSION['cep'];
					?> <br>
                     <input  class="input" type="text" required maxlength="9"  onkeyup="handleZipCode(event)"  placeholder="CEP" hidden name="cep" id ="cep"  value="<?php
                    echo $_SESSION['cep'];
                    ?> ">
                 
                </div>

                <div class="underline"></div>

                <div class="nSegu">

                    <span><strong>Numero de segurança:</strong> </span>
                    <?php
					echo  $_SESSION['numeroSeguranca'];
					?> <br>
                    <input  class="input" type="text" maxlength="12" onkeydown="return mascaraTelefone(event)"  placeholder="Numero de Segurança" hidden name="numeroSeguranca" id ="numeroSeguranca"  value="<?php
                    echo $_SESSION['numeroSeguranca'];
                    ?> ">
                   
                </div>

                <div class="underline"></div>

                <div class="alergia">

                    <span><strong>Alergia:</strong> </span>
                    <?php
					echo $_SESSION['alergia'];
					?> <br>
                    
                    <input  class="input" type="text"  placeholder="Alergia" hidden name="alergia" id ="alergia"  value="<?php
                    echo $_SESSION['alergia'];
                    ?> ">
                </div>

                <div class="underline"></div>

                <div class="tipoS">

                    <span><strong>Tipo Sanguineo:</strong> </span>
                    <?php
					echo $_SESSION['sangue'];
					?> <br>

                   
                    <div><select  name="sangue"  id="sangue"  hidden  class="input" value="<?php
                    echo $_SESSION['sangue'];
                    ?>">
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

                <div class="underline"></div>

                <div class="pcd"> 
                    <span><strong>PCD:</strong></span>
                    <?php 
					echo $_SESSION['pcd'];
					?> <br>
                    
                    <select  name="pcd"  id="pcd"  hidden class="input" value="<?php
                    echo $_SESSION['pcd'];
                    ?> ">
						<option >PCD</option>
						<option>Sim</option>
						<option>Não</option>
					
					</select>
                </div>

                <div class="underline"></div>

                <div class="defi">

                    <span><strong>Deficiencia:</strong> </span>
                    <?php
					echo $_SESSION['deficiencia'];
					?> <br>
                     <input  class="input" type="text"  placeholder="Deficiencia" hidden name="deficiencia" id ="deficiencia"  value="<?php
                    echo $_SESSION['deficiencia'];
                    ?> ">
                    

                </div>

                <div class="underline"></div>

                

                <button class="btn">Modificar</button>
            </div>
            </form>
            
        </div>

       <!-- <div class="modification">
            <h2>Change your datas</h2>
            <form action="ModifyUserServlet" method="post">
                <input type="hidden" name="id" id="id" value="">
                <div class="input-data">
                <div class="nome" >
                    
                    <span><strong>Nome:</strong> </span>
                    <?php
					echo $_SESSION['nome'];
					?> 
                
                </div>
                <div class="underline"></div>
                <div class="usuario"> 
                    <span><strong>Usuario:</strong></span>
                    <?php 
					echo $_SESSION['usuario'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="email">
                    <span><strong>Email:</strong> </span>
                    <?php
					echo $_SESSION['email'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="senha">
                    <span><strong>Senha:</strong></span>
                    <?php
					echo $_SESSION['senha'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="data">
                    <span><strong>Data de nascimento:</strong> </span>
                    <?php
					echo $_SESSION['dataNascimento'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="telefone">
                    <span><strong>Telefone:</strong> </span>
                    <?php
					echo $_SESSION['telefone'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="cpf">
                    <span><strong>CPF:</strong> </span>
                    <?php
					echo  $_SESSION['cpf'];
					?> 
                </div>
                <div class="underline"></div>
                 <div class="cep">
                    <span><strong>CEP:</strong> </span>
                    <?php
					echo $_SESSION['cep'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="nSegu">
                    <span><strong>Numero de segurança:</strong> </span>
                    <?php
					echo  $_SESSION['numeroSeguranca'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="alergia">
                    <span><strong>Alergia:</strong> </span>
                    <?php
					echo $_SESSION['alergia'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="tipoS">
                    <span><strong>Tipo Sanguineo:</strong> </span>
                    <?php
					echo $_SESSION['sangue'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="pcd"> 
                    <span><strong>PCD:</strong></span>
                    <?php 
					echo $_SESSION['pcd'];
					?> 
                </div>
                <div class="underline"></div>
                <div class="defi">
                    <span><strong>Deficiencia:</strong> </span>
                    <?php
					echo $_SESSION['deficiencia'];
					?> 
                </div>
                <div class="underline"></div>
                <button class="btn">Modificar</button>
            </form>
            
        </div>-->

        

    </section>

    <script src="custum.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>