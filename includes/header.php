<?php

    function curPageURL() {
         $pageURL = 'http';
         if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
         $pageURL .= "://";
         if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
         } else {
          $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
         }
         return $pageURL;
    }

    function echoNavigation($tagline) {
        $url = curPageURL();
        $aboutus = 'class=""';
        $offerings = 'class=""';
        $resources = 'class=""';
        $culture = 'class=""';
        $contact = 'class=""';
        
        if(strpos($url, 'aboutus.php') !== false) {
            $aboutus = 'class="selected"';
        }
        else if(strpos($url, 'contact.php') !== false) {
            $contact == 'selected';
        }
        else if(strpos($url, 'resources.php') !== false) {
            $resources == 'class="selected"';
        }
        else if(strpos($url, 'culture.php') !== false) {
            $culture == 'class="selected"';
        }
        else if(strpos($url, 'offerings.php') !== false) {
            $offerings == 'class="selected"';
        }
        else if(strpos($url, 'blog.php') !== false) {
            $blog == 'class="selected"';
        }
        
        $nav = '<div class="row">
                  <a href="index.html" class="eclogo"><img src="images/spacer.gif" /></a><!-- width:295 height: 52 -->
                  <ul class="pull-right navbar">
                      <li' . $aboutus . '><a href="aboutus.html">About</a></li>
                      <li' . $offerings . '><a href="offerings.html">Offerings</a></li>
                      <li' . $resources . '><a href="resources.html">Resources</a></li>
                      <li' . $culture . '><a href="culture.html">Team Culture</a></li>
                      <li' . $blog . '><a href="blog">Blog</a></li>
                      <li><a href="contact.html" class="cta ' . $contact . '">Let\'s Build Together</a></li>
                  </ul>
                  <div class="hamburger pull-right">MENU</div>
                </div>';
        
        
        echo '
            <!-- Affix Banner - hidden until scrolled down -->
            <header id="nav">
                ' . $nav . '
            </header>
          <!-- Welcome banner -->
          <section id="top" class="container-fluid">
              <div id="header">
                  ' . $nav . '
              </div>
              <div class="row">
                  <blockquote id="blockquote">' . $tagline . curPageURL() . '</blockquote>
                  <img src="images/icon_star_big_white.png" class="star">
                  <canvas width="1000" height="600" id="canvas" style="position:absolute"></canvas>
              </div>
          </section>';
        }

?>