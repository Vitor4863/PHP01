<?php
session_start();


?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
        
    <link rel="shortcut icon" type="image/x-icon" href="img1/flame-outline.svg">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
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
                <img src="img1/flames.png" alt="" width="40px">
              <span>FireCenterHelp</span>
                 
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
                   <a href="../consulta/usuario.php"><li class="list-item">
                         <img src="img1/man.png" alt="" width="30px"><h4 class="perfil"> Perfil</h4>
                      
                       
                    </li></a>
                    
                    
                  
                </ul>
            </div>
            <a href="#modal_1" class="btn2">Emergêcia</a>
               
            <!--<div class="sidebar-bottom">
                <div class="color-box dark"></div>
                <div class="color-box night"></div>
                <div class="color-box light"></div>
            </div>-->
        </div>

         <!--pop-up-->
            <div id="modal_1" class="modal">
                <div class="modal__content">
                        <h2 class="modal__title">Detalhes do Acidente</h2>
                        <p class="modal__description">
                            <form action="../PHPMailer/envia.php" method="post">
                            <input class="DE" type="text" placeholder="nome" required name="nome" hidden value="<?php
					echo $_SESSION['nome'];
					?> "> <br> 
                                <input class="DE" type="text" placeholder="Rua" required name="rua"><br>
                               
                                <textarea class="DE" type="text" placeholder="Detalhes da emergencia" name="mensagem"></textarea><br>
                                <input class="modal__link" type="submit" name="enviar" >
                                <a href="visao.php" class="modal__link2">Voltar</a> 
                            </form>
                        </p>
                    
                    
                </div>
                
            </div>
            <div id="map" class="mapa"></div>
	<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
	<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
           
                <!--pop-up-->
        
        <!--<div class="mapa">-->
            
            <!--<h2></h2>-->
            <!--<div id="mapid"></div>-->
        </div>
        
    </div>
    

    
    <script src="script.js"></script>
    
    <script>
//let h2 = document.querySelector('h2');
 //var map;

//function success(pos){
  //  console.log(pos.coords.latitude, pos.coords.longitude);
    //h2.textContent = `Latitude:${pos.coords.latitude}, Longitude:${pos.coords.longitude}`;

    //if (map === undefined) {
      //  map = L.map('mapid').setView([pos.coords.latitude, pos.coords.longitude], 13);
    //} else {
      //  map.remove();
        //map = L.map('mapid').setView([pos.coords.latitude, pos.coords.longitude], 13);
   // }

   // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
     //   attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    //}).addTo(map);

    //L.marker([pos.coords.latitude, pos.coords.longitude]).addTo(map)
       // .bindPopup('Eu estou aqui!')
        //.openPopup();
//}

//function error(err){
    //console.log(err);
//}

//var watchID = navigator.geolocation.watchPosition(success, error, {
   // enableHighAccuracy: true,
    //timeout: 5000
//});


var map = L.map('map').setView([-22.897003892194146, -43.122873140890285], 16);
		mapLink = "<a href='http://openstreetmap.org'>OpenStreetMap</a>";
		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', { attribution: 'Leaflet &copy; ' + mapLink + ', contribution', maxZoom: 18 }).addTo(map);

		var taxiIcon = L.icon({
			iconUrl: 'img1/bombeiro.png',
			iconSize: [50, 50]
		})
        

		var marker = L.marker([-22.897003892194146, -43.122873140890285], { icon: taxiIcon }).addTo(map);
        var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    osm.addTo(map);

    if(!navigator.geolocation) {
        console.log("Your browser doesn't support geolocation feature!")
    } else {
        setInterval(() => {
            navigator.geolocation.getCurrentPosition(getPosition)
        }, 5000);
    }

    var local, circle;

    function getPosition(position){
        // console.log(position)
        var lat = position.coords.latitude
        var long = position.coords.longitude
        var accuracy = position.coords.accuracy

        if(local) {
            map.removeLayer(local)
        }

        if(circle) {
            map.removeLayer(circle)
        }

        local = L.marker([lat, long])
        circle = L.circle([lat, long], {radius: accuracy})

        var featureGroup = L.featureGroup([local, circle]).addTo(map)

        map.fitBounds(featureGroup.getBounds())

        console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)

        map.on('click', function (e) {
			console.log(e)
			var newMarker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
			L.Routing.control({
				waypoints: [
					L.latLng(-22.897003892194146, -43.122873140890285),
					L.latLng(e.latlng.lat, e.latlng.lng)
				]
			}).on('routesfound', function (e) {
				var routes = e.routes;
				console.log(routes);

				e.routes[0].coordinates.forEach(function (coord, index) {
					setTimeout(function () {
						marker.setLatLng([coord.lat, coord.lng]);
					}, 950 * index)
				})

			}).addTo(map);
		});
        
    }


   </script>
</body>
</html>