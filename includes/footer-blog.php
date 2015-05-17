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
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.js"></script>

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
        ctx.strokeStyle="#e3e8eb";
        ctx.stroke();

        var offset = $(\'blockquote\').offset();
        $(\'canvas\').offset({ top: offset.top, left: offset.left});
      }
      
      $( window ).load(function() {
            draw();
            $(window).scroll();
            // make the ALL category nav option show as selected, only if nothing else is selected
            if($(".current-cat").size() == 0) {
              $(".cat-item-all a").animate({
                \'background-color\': \'#e3e8eb\',
              }, 1500, "swing", function() {
                  $(".cat-item-all").addClass("current-cat");
              });
            }      
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