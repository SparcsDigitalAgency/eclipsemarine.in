<div class="clear"></div>
</section><!--wrapper-->


<div class="mapContainer"><div id="map_canvas"></div></div>


<footer id="footer" class="row-full center">
<p>
<a href="<?php echo $path; ?>index" title="About us">About us</a>   |   
<!--<a href="<?php //echo $path; ?>team-shi" title="Team SHI">Team SHI</a>   |   -->
<a href="<?php echo $path; ?>services" title="Preventive Care">Services</a> |
<a href="<?php echo $path; ?>quote" title="Get a Quote">Get a Quote</a> | 
<a href="<?php echo $path; ?>contact" title="Contact">Contact</a>
</p>
<p>Copyright &copy; 2017 eclipsmarine.in. All rights reserved. | <a title="Sparcs Digital Agency | An Interactive Digital Agency | Web/Mobile Development, SEO & Performance Marketing, Branding & Identity " target="_blank" href="http://www.sparcsdigital.com/">Powered by: Sparcs Digital Agency</a></p>
<p id="footer-logo"><a href="http://eclipsmarine.in" title="Eclipse Marine">Eclipse Marine</a></p>
</footer><!--footer-->


   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAa7KAuVoMnApz4PWdzDh0d5CR9tXQegu4&callback=initMap"
  type="text/javascript"></script>


<script>
      function initMap() {
        var uluru = {lat: 9.983840, lng: 76.274569};
        var map = new google.maps.Map(document.getElementById('map_canvas'), {
          zoom: 13,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110451171-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110451171-1');
</script>





</body>
</html>