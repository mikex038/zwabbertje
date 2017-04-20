<!DOCTYPE html>
<html>
<title>Zwabbertje | Schoonmaak.</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">


<body>

<!-- Navbar (sit on top) -->
<div class="w3-top" id="nav">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-hover-black" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <li class="w3-left-align"><a href="#home"><i class="fa fa-home"></i> HOME</a></li>
    <li class="w3-hide-small"><a href="#about"><i class="fa fa-user"></i> TEST1</a></li>
    <li class="w3-hide-small"><a href="#portfolio"><i class="fa fa-th"></i> TEST2</a></li>
    <li class="w3-hide-small"><a href="#contact"><i class="fa fa-envelope"></i> TEST3</a></li>
    <li class="w3-hide-small w3-right">
    </li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-white">
      <li><a href="#about" onclick="toggleFunction()">ABOUT</a></li>
      <li><a href="#portfolio" onclick="toggleFunction()">PORTFOLIO</a></li>
      <li><a href="#contact" onclick="toggleFunction()">CONTACT</a></li>
    </ul>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity W3-xlarge">WELKOM BIJ SCHOONMAAKBEDRIJF HET ZWABBERTJE.</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">Over het zwabbertje.</h3>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>John Doe.</b></p><br>
      <img src="images/face.png" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="350">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large" id="fototext1"><br>
            <p><b>Naam:</b> John Doe.
			<p><b>Geboren in: </b> Zwolle op 6-3-1968.
			<p><b>Opleiding:</b> Medewerker facilitaire dienstverlening,  Deltion College.
			<p><b>Stage:</b> Schoonmaker bij Noxon.
            <p><b>Beroep:</b> Eigenaar van Schoonmaakbedrijf het Zwabbertje.
			<p><b>Schoonmaak kunsten: </b> Huizen, bedrijven, ramen, daken.
        <p><b> Over het bedrijf.<br></b>
            Voor het Zwabbertje staat het verbinden van medewerkers en klanten voorop. Alleen zo komen we samen tot de beste resultaten. Het is deze maatschappelijke relevantie die het Zwabbertje vanuit haar hart wil uitdragen. Dit komt dan ook tot uiting in onze visie en missie.

			</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Wat doen wij?</p>
  <p class="w3-wide"><i class="fa fa-file"></i>Programming</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width:87%"></div>
  </div>
  <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width: 90%"></div>
  </div>
  <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
  <div class="w3-progress-container">
    <div class="w3-progressbar" style="width:75%"></div>
  </div>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">5+</span><br>
    Projects
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Cups of Coffee
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">7+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">24+</span><br>
    Beers
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-light-grey w3-wide">PORTFOLIO</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">SKILLS</h3>
  <p class="w3-center"><em>Here are some of my latest projects.<br> Click on the images to get on the page.</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
	<div class="responsive">
  <div class="img">
    <a target="_blank" href="http://www.mofymento.com">
      <img src="http://mikewendt.nl/site/images/mofymento.png" alt="Trolltunga Norway" width="300" height="200">
    </a>
    <div class="desc">Mofymento Beauty & Wellness</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="http://www.mikewendt.nl/brainstud/final">
      <img src="http://mikewendt.nl/site/images/brainstud.png" alt="Forest" width="500" height="400">
    </a>
    <div class="desc">Brainstud | Leave a Mark Behind.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="http://www.mikewendt.nl/brainstud/mkbgw">
      <img src="http://mikewendt.nl/site/images/mkbgw.png" alt="Forest" width="500" height="400">
    </a>
    <div class="desc">MKBGW | Hét certificaat voor gemotiveerd personeel.</div>
  </div>
</div>

<div class="responsive">
  <div class="img">
    <a target="_blank" href="http://www.mikewendt.nl/">
      <img src="http://mikewendt.nl/site/images/mikewendt.png" alt="Forest" width="500" height="400">
    </a>
    <div class="desc">Mike Wendt | We need more Cowbell.</div>
  </div>
</div>
</div>
<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK AND SOCIAL MEDIA</h3>
  <p class="w3-center"><em>I'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Frankhuizerallee 128 Zwolle, NL<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +31-637091945<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mikewendt@live.nl<br>
        <i class="fa fa-facebook fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Facebook: www.facebook.com/Mikex038<br>
        <i class="fa fa-twitter fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Twitter: www.twitter.com/mikex038<br>
        <i class="fa fa-instagram fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Instagram: mikebassdrummer<br>
        <i class="fa fa-youtube-play fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Youtube: Mike Deltion<br>
        <i class="fa fa-whatsapp fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Whatsapp: 06-37091945<br>
        <i class="fa fa-spotify fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Spotify: mikewendt038<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>


  </div>
</div>
</div>



<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-btn w3-padding w3-light-grey w3-hover-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Go to the top</a>
  <p>Powered by <a href="http://www.mikewendt.nl" title="mikewendt" target="_blank" class="w3-hover-text-orange">Mike Wendt</a></p>
</footer>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(52.52482419999999, 6.062566000000061);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
