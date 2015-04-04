<?php

function echoFooter($topOffset) {
echo '  <section id="footer" class="container-fluid">
      <div class="row">
          <div class="col-md-10">
              <ul>
                  <li>&copy; Evans &amp; Chambers, LLC, 2015</li>
                  <li><a href="mailto:info@evanschambers.com">info@evanschambers.com</a></li>
                  <li><a href="tel:2027687330">202 768 7330</a></li>
                  <li>635 Florida Ave NW, &nbsp; 2nd Floor, &nbsp; Washington DC 20001</li>
              </ul>     
          </div>
          <div class="col-md-2">
              <a href="#"><img src="images/icon_facebook.png" class="img-link"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#"><img src="images/icon_twitter.png"></a>
          </div>
      </div>
  </section>
  </div>
    

    

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Scrolling Nav JavaScript -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/scrolling-nav.js"></script>
  <script src="js/jquery.fittext.js"></script>

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
      
      $( window ).load(function() {
            draw();
            $(window).scroll();
      });
      
      $(window).resize(function() {
          draw();
      });
      
      $(window).scroll(function () {
            if ($(window).scrollTop() > $(\'section#top\').height() - ' . $topOffset . ') {
                $(\'header\').fadeIn(100);
            } else {
                $(\'header\').fadeOut();
            }
        });
      
      
    </script>';
}