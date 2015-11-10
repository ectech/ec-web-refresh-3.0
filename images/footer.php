<?php

function echoFooter($topOffset) {
echo '  <section id="footer" class="container-fluid">
      <div class="row">
          <div class="col-md-10">
              <ul>
                  <li>&copy; EC Technology, LLC, 2015</li>
                  <li><a href="mailto:info@evanschambers.com">info@evanschambers.com</a></li>
                  <li><a href="tel:2027687330">202 768 7330</a></li>
                  <li>635 Florida Ave NW, &nbsp; 2nd Floor, &nbsp; Washington DC 20001</li>
              </ul>     
          </div>
          <div class="col-md-2">
              <a href="https://www.facebook.com/evanschamberstechnology"><img src="images/icon_facebook.png" class="img-link"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/ectech"><img src="images/icon_twitter.png"></a>
          </div>
      </div>
  </section>
  </div>
    
</main>
    

  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Scrolling Nav JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/parsley.min.js"></script>
  <script src="js/slideout.min.js"></script>

  <!--[if lte IE 9]>
  <script src="/js/jquery.placeholder.js?v="></script>
  <![endif]-->

  <script>
        

      
      function draw() {
        
        var canvas = document.getElementById("canvas");
        canvas.width = $(\'blockquote\').outerWidth();
        canvas.height = $(\'blockquote\').outerHeight();
        var width = canvas.width;
        var height = canvas.height;
          
        var ctx = canvas.getContext("2d");
        ctx.moveTo(0, 0);
        ctx.lineTo(width, 0);
        ctx.lineTo(width, height);
        ctx.lineTo(width/2 + 40, height);
        ctx.moveTo(width/2 - 40, height);
        ctx.lineTo(0, height);
        ctx.lineTo(0, 0);
        ctx.lineWidth= 2;
        ctx.strokeStyle="white";
        ctx.stroke();

        var offset = $(\'blockquote\').offset();
        $(\'canvas\').offset({ top: offset.top, left: offset.left});
      }

      $("#blockquote").attr("style", "opacity:0");
      $(".star").attr("style", "opacity:0");

      $(window).scroll(function () {
          if ($(window).scrollTop() > $(\'section#top\').height() - ' . $topOffset . ') {
              $(\'header\').fadeIn(100);
          } else {
              $(\'header\').fadeOut();
          }

          if(isScrolledIntoView($(".block"))) {
            $("#contract-fbi-itsss").addClass("animated fadeInUp");
            $("#contract-fbi-itsc").addClass("animated fadeInUp");
            $("#contract-8a-stars2").addClass("animated fadeInUp");
            $("#contract-8a-solesource").addClass("animated fadeInUp");
          }

          if(isScrolledIntoView($(".pulse-animate"))) {
            $(".pulse-animate").addClass("animated pulse");
          }
      });

      $( window ).load(function() {
          draw();

          $("#initial-overlay").fadeOut(800, function() {
            $(".star").animate({"opacity": "1"}, 300, function() {
              $("canvas").animate({"opacity": "1"}, 300, function() {
                $("#blockquote").attr("style", "opacity:1");
                $("#blockquote").addClass("animated pulse");
                $(".star").addClass("animated pulse");
              });
            });
          });  
          $(window).scroll();
            
      });
      
      $(window).resize(function() {
          draw();
      });
      
      

      var slideout = new Slideout({
        "panel": document.getElementById("panel"),
        "menu": document.getElementById("menu"),
        "padding": 256,
        "tolerance": 70,
        "side": "right"
      });

      // Toggle button
      $(".toggle-button").click(function() {
        slideout.toggle();
      });

      function isScrolledIntoView(elem)
      {
          var $elem = $(elem);
          if($elem.length > 0) {
            var $window = $(window);
            var docViewTop = $window.scrollTop();
            var docViewBottom = docViewTop + $window.height();
            var elemTop = $elem.offset().top;
            var elemBottom = elemTop + $elem.height();
            return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
          }
      }

    </script>';
}