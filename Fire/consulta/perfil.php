<?php
include_once "../dao/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <title>Perfil</title>	
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"/>
	</head>
	<body>
        
    <div class="tudo">
        <div class="sidebar">
           <a href="../visao/visao.php"><div class="sidebar-top">
                <img src="img/flames.png" alt="" width="40px">
                <span class="brand">FireHelpCenter</span><br>
                 
            </div></a>
            
            <div class="sidebar-center">
                <ul class="list">
                   <!-- <a href="../consulta/perfil.php"><li class="list-item"> -->
                         <img src="img/man.png" alt="" width="30px">
                        <span class="list-item-text">Perfil</span>
                    </li></a>
                    
                    <li class="list-item">
                       <i class="list-item-icon fas fa-book"></i>
                        <a href="../visao/sobre.php"><span class="list-item-text">Sobre</span></a>
                    </li>
                    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/phosphor-icons"></script>
                </ul>
            </div>
            
            <div class="sidebar-bottom">
                <div class="color-box dark"></div>
                <div class="color-box night"></div>
                <div class="color-box light"></div>
            </div>
        </div>
	   
    <?php
session_start();
if(!empty($_SESSION['id'])){
   
    echo' <div class="container">'.
    '<div class="profile">'.
        '<img src="" alt="" id="photo">'.
        '<div class="profile-info">'.
           ' <h1>Nome</h1>'.
           $_SESSION['nome'].
        '</div>'.
    '</div>'.
    '<div class="profile">'.
        '<div class="profile-info">'.
            '<h1>Data de Nascimento</h1>'.
            $_SESSION['dataNascimento'].
        '</div>'.
    '</div>'.
    '<div class="profile">'.
        '<div class="profile-info">'.
            '<h1>Numero de Segurança</h1>'.
            $_SESSION['numeroSeguranca'].
        '</div>'.
    '</div>'.
    '<div class="profile">'.
        '<div class="profile-info">'.
            '<h1>CPF</h1>'.
            $_SESSION['cpf'].
        '</div>'.
    '</div>'.

    '<div class="edit">'.
        '<button class="ph-heartbeat"> Emergência</button> <br><br>'.
        '<button class="ph-chat-teardrop-dots" ><a href="../cadastro/editar.php"> Editar</a></button>'.
    '</div>'.
'</div>'.

'<hr>'.

'<div class="alergia">'.
    '<article class="alergia1">'.
        '<h1>Alergia</h1>'.
        $_SESSION['alergia'].
    '</article>'.
    '<article class="tipoS">'.
        '<h1>Tipo sanquineo</h1>'.
        $_SESSION['sangue'].
    '</article>'.
    '<article class="defi">'.
        '<h1>Deficiencia</h1>'.
        $_SESSION['pcd'].
    '</article>'.
'</div>';



  
    //echo ''.$_SESSION['numeroSeguranca'].' ';
   

}
?>

	</body>
</html>