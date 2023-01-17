<?php
session_start();


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <link rel="shortcut icon" type="image/x-icon" href="img/flame-outline.svg">
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <title>FireHelpCenter</title>
    <style>#mapid { 
		height: 100%;
		width: 100%;
        
	 }</style>


</head>
<body>



    <div class="tudo">
        <div class="sidebar">
            <div class="sidebar-top">
                <img src="img/flames.png" alt="" width="40px">
                <span class="brand">FireHelpCenter</span><br>
                 
            </div>
            <div class="sidebar-top">
            <?php
                if(!empty($_SESSION['id'])){
                    echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
                    echo "<a href='../Login/login.php'></br></br>Sair</a>";
                }else{
                    $_SESSION['msg'] = "Área restrita";
                    header("Location: ../Login/login.php");	
                }
                
                ?>
                <span class="brand"></span><br>
                 
            </div>
            <div class="sidebar-center">
                <ul class="list">
                   <a href="../consulta/perfil.php"><li class="list-item">
                         <img src="img/man.png" alt="" width="30px">
                        <span class="list-item-text">Perfil</span>
                    </li></a>
                    
                    <li class="list-item">
                       <i class="list-item-icon fas fa-book"></i>
                        <a href="../visao/sobre.php"><span class="list-item-text">Sobre</span></a>
                    </li>
                  
                </ul>
            </div>
            <button class="btn fifth">EMERGÊNCIA</button>
            <div class="sidebar-bottom">
                <div class="color-box dark"></div>
                <div class="color-box night"></div>
                <div class="color-box light"></div>
            </div>
        </div>
        
        <div class="mapa">
            <!--<h2></h2>-->
            <div id="mapid"></div>
        </div>
    </div>
    


    <script src="script.js"></script>
    <script>
//let h2 = document.querySelector('h2');
var map;

function success(pos){
    console.log(pos.coords.latitude, pos.coords.longitude);
    //h2.textContent = `Latitude:${pos.coords.latitude}, Longitude:${pos.coords.longitude}`;

    if (map === undefined) {
        map = L.map('mapid').setView([pos.coords.latitude, pos.coords.longitude], 13);
    } else {
        map.remove();
        map = L.map('mapid').setView([pos.coords.latitude, pos.coords.longitude], 13);
    }

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(map)
        .bindPopup('Eu estou aqui!')
        .openPopup();
}

function error(err){
    console.log(err);
}

var watchID = navigator.geolocation.watchPosition(success, error, {
    enableHighAccuracy: true,
    timeout: 5000
});
   </script>
</body>
</html>