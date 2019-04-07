<?php
/**
 * The template for displaying the footer
 *
 * @link http://www.joehiggins.me
 *
 * @package joehiggins
 */

?>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/silveroakwebdesign/" target="_blank"><i class="fab fa-facebook w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/in/joe-higgins-73700b66/" target="_blank"><i class="fab fa-linkedin w3-hover-opacity"></i></a>
    <a href="https://github.com/joe-higgins" target="_blank"><i class="fab fa-github w3-hover-opacity"></i></a>
    <a href="https://codepen.io/joehiggins/" target="_blank"><i class="fab fa-codepen w3-hover-opacity"></i></a>

  </div>

  <p>Created by <a href="https://www.silveroakdesign.com" title="Silver Oak Design" target="_blank" class="w3-hover-text-green">Silver Oak Design</a></p>
</footer>

<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(42.2590539, -71.0988937);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
// window.onscroll = function() {myFunction()};
// function myFunction() {
//     var navbar = document.getElementById("myNavbar");
//     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
//         navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
//     } else {
//         navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
//     }
// }

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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<?php wp_footer(); ?>
</body>
</html>
