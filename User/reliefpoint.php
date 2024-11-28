<?php
// Your Google Maps API Key
$googleApiKey = 'AIzaSyBsTlXvShS7Us3ISDD0O28NaN_5AdWZ5sc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Relief Points Map with Icons</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $googleApiKey; ?>&callback=initMap" async defer></script>
    <style>
        #map {
            height: 500px;
            width: 100%;
        }


        html, body {
    margin: 0;
    padding: 0;
    width: 100%; /* Ensure full width */
    height: 100%; /* Ensure full height */
}

header {
    background-color: #005f99;
    color: white;
    padding: 16px;
    text-align: center;
    width: 100%; /* Full width of the parent container */
    box-sizing: border-box; /* Includes padding in width */
}
  
  header h1 {
    font-size: 3rem;
    font-weight: 500;
    height: 20px;
  }
  
 header p{
    margin-top: 50px;
    color: whitesmoke;
 }
/* Main css */
  main {
    padding: 40px;
    text-align: center;
  }

  
  

/* NAv bar css */
nav {
    background: #1a4564;
    font-family: Poppins;
    box-shadow:  2px 8px 15px rgba(0, 0, 0, 0.2);
    font-size: 0.9rem;
    /* line-height: 1.5; */
    padding: 0px;
}

nav .links {
    display: flex; 
    justify-content: center; 
    list-style: none; 
    padding: 0; 
    margin: 0; 
}

nav .links li {
    margin-top: -10px;
    padding: 25px;
}

.nav-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1rem;
}

.nav-toggle {
    color:whitesmoke;
    background: transparent;
    border:none;
    font-size: 35px;
    font-weight: 700;
    cursor:pointer;
    transition: 1.5s;
}

.nav-toggle:hover {
    /* color:#2b8be6; */
    transform: rotate(180deg);
}

.links a{
    text-decoration: none;
    color:whitesmoke;
    text-transform: uppercase;
    display: block;
    padding: 0rem 2rem;
    font-size: 16.5px;
}

.links a:hover{
    /* background: #a5d5f8; */
    color:#49a6e9;
    padding-left: 1.5rem;
}

/* footer css */
#footer {
    background-color: #005f99;
    /* color: white; */
    text-align: center;
    padding: 20px;
  }

  #footer p {
    margin: 5px 0;
    color:whitesmoke;
}

#footer p:first-child {
    font-size: 20px;
  
}

/* icons css */
.fourth .ions{
    /* display: flex;
    flex-direction: row;
    margin-left: -15px; */
    font-size:30px;
}

.ions a {
    color:wheat;
} 

.df{
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    padding:20px;
    color: #005f99;
}

    </style>
</head>
<body>

<header>
    <h1>Safe Together</h1>
    <p>Safety in Every Second, Help at Every Step.</p>

  </header>

  
<h1 class="df">Disaster Relief Points Map</h1>
<div id="map"></div>

<!-- Footer Section -->
<footer id="footer">
    <p>&copy; 2024 SafeTogether. All rights reserved.</p>
    <p>Sallaghari, Bhaktapur</p>
    <p>1234567890</p>
    <p>Follow us on social media for updates!</p>


    <div class="fourth">
      <div class="email-form">
          <div class="ions">
              <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook fa-lg"></i></a>
              <a href="https://www.linkedin.com" target="_blank"><i class="fa-brands fa-square-twitter fa-lg"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-square-instagram fa-lg"></i></a>
          </div>
      </div>
  </div>
</footer>

<script>
    function initMap() {
        // Center of the map
        var mapCenter = {lat: 27.7103, lng: 85.3222}; // KTM

        // Initialize the map
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: mapCenter
        });

        // Custom icons for relief points
        var icons = {
            medical: 'https://img.icons8.com/?size=40&id=TOQWjmo2mdz4&format=png&color=000000', // First aid kit
            shelter: 'https://img.icons8.com/?size=40&id=cSDbz8YVA0WI&format=png&color=000000', // Tent
            water: 'https://img.icons8.com/?size=40&id=13101&format=png&color=000000', // Water drop
            food: 'https://img.icons8.com/?size=40&id=6899&format=png&color=000000', // Food plate
        };

        // Relief point locations with custom icons
        var reliefPoints = [
            {lat: 27.7153, lng: 85.3452, type: 'medical', title: 'Medical Aid Station'}, // New York
            {lat: 27.7553, lng: 85.3752, type: 'shelter', title: 'Temporary Shelter'}, // Los Angeles
            {lat: 27.7053, lng: 85.3052, type: 'water', title: 'Water Supply'}, // London
            {lat: 27.7336, lng: 85.3557, type: 'food', title: 'Food Distribution'},
        ];

        // Add markers for each relief point
        reliefPoints.forEach(function(point) {
            new google.maps.Marker({
                position: {lat: point.lat, lng: point.lng},
                map: map,
                title: point.title,
                icon: icons[point.type]
            });
        });
    }
</script>



</body>
</html>
