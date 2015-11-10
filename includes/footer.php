<?php


function echoFooter($topOffset) {
  echo '  <section id="footer" class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <p><strong>Share411</strong> is a newsletter about information sharing in government Intelligence.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p class="sign-up-label">Enter Your Email Address</p>
          <div id="sign-up-control">
            <form name="newsletter-form" id="submitSignupForm" method="post" data-parsley-validate>
              <input type="email" name="email" placeholder="Enter Your Email Address" required />
              <a href="#" class="button-sign-up" onclick="sendNewsletterSignup($(\'section#footer input[name=email]\').val()); return false;">Sign-Up</a>
              <input type="hidden" name="submitSignupForm" value="submitted" />
            </form>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="http://evanschambers.applicantstack.com/x/openings" class="button-box">Your Career</a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <a href="contact.php" class="button-box">Get In Touch</a>
        </div>
        <div class="col-lg-2 col-md-12">
          <div id="social-images">
            <a href="https://www.facebook.com/evanschamberstechnology"><img src="images/icon_facebook.png" class="img-link"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/ectech"><img src="images/icon_twitter.png"></a>
          </div>
        </div>
      </div>
  </section>
  <section id="sub-footer" class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <p>Evans &amp; Chambers Technology, LLC @ Copyright 2015</p>
        <ul>
          <li><img src="images/icon_address.png" class="img-link">635 Florida Ave NW, &nbsp; 2nd Floor, &nbsp; Washington DC 20001</li>
          <li><img src="images/icon_phone.png" class="img-link"><a href="tel:2027687330">202 768 7330</a></li>
          <li><img src="images/icon_mail.png" class="img-link"><a href="mailto:info@evanschambers.com">info@evanschambers.com</a></li>
        </ul>
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
        canvas.width = $(\'#blockquote\').outerWidth();
        canvas.height = $(\'#blockquote\').outerHeight();
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
        $(\'#canvas\').offset({ top: offset.top, left: offset.left});
      }

      function drawQuoteCanvasBorder() {
        if($("#blockquote-quote").length > 0) {
          var canvas = document.getElementById("canvas-quote");
          canvas.width = $(\'#blockquote-quote\').outerWidth();
          canvas.height = $(\'#blockquote-quote\').outerHeight();
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

          var offset = $(\'#blockquote-quote\').offset();
          $(\'#canvas-quote\').offset({ top: offset.top, left: offset.left});
        } 
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

      $(window).resize(function () {
          fixNewsletterSignupFieldWidth();
      });

      $( window ).load(function() {
          draw();
          drawQuoteCanvasBorder();
          fixNewsletterSignupFieldWidth();

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

          $(window).keydown(function(event){
            if(event.keyCode == 13) {
              event.preventDefault();
              return false;
            }
          });      
      });
      
      $(window).resize(function() {
          draw();
          drawQuoteCanvasBorder();
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

      function fixNewsletterSignupFieldWidth() {
        // set the width of the newsletter signup email field to the proper width (in footer)
        $("section#footer input[name=email]").css("width", $("#sign-up-control").outerWidth() - $(".button-sign-up").outerWidth());
      }

      function sendNewsletterSignup(emailAddress) {
          if(!$("#submitSignupForm").parsley().isValid()) {
            $("#sign-up-control").css("background-color", "#F2DEDE");
            return false;
          }
          $("#sign-up-control").css("background-color", "#f7f7f7");

          /* this is the original code that sends an email instead of direct mailchimp API integration */
          $.post( "newsletterSignup.php", {"email": emailAddress})
          .done(function( data ) {
            $("#sign-up-control").fadeOut("slow", function() {
              $("#sign-up-control").html("<h4 style=\'color: green; text-align: center;\'>Thank you for registering!</h4>");
              $("#sign-up-control").fadeIn();
            })
          })
          .fail(function() {
            alert( "error registring for Share411, please try again." );
          });
          

          /* using mailchimp API v2.0 for subscribing user automatically */
          /* 
          var body = "{\'apikey\':\'9a062e6f8140b637dcb7bbde4bb5ea6c-us1\', \'id\':\'6325119ba2\', \'email\':{\'email\':\'";
          body = body + emailAddress;
          body = body + "\'}, \'double_optin\':false }";

          $.post( "https://us1.api.mailchimp.com/2.0/lists/subscribe.json", body)
          .done(function( data ) {
            if(data.status !== undefined && data.status == "error") { // must be an error
              if(data.name == "List_AlreadySubscribed") {
                $("#sign-up-control").fadeOut("slow", function() {
                  $("#sign-up-control").html("<h4 style=\'color: green; text-align: center;\'>You are already subscribed!</h4>");
                  $("#sign-up-control").fadeIn();
                });
              }
            } else {
              $("#sign-up-control").fadeOut("slow", function() {
                $("#sign-up-control").html("<h4 style=\'color: red; text-align: center;\'>Thank you for subscribing!</h4>");
                $("#sign-up-control").fadeIn();
              });
            }
          })
          .fail(function() {
            alert( "error registring for Share411, please try again." );
          });
          */
      }

    </script>';
}