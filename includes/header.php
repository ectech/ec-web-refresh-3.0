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
        $aboutus = ' class=""';
        $offerings = ' class=""';
        $resources = ' class=""';
        $culture = ' class=""';
        $contact = ' class=""';

        if(strpos($url, 'aboutus.php') !== false) {
            $aboutus = ' class="selected"';
        }
        else if(strpos($url, 'contact.php') !== false) {
            $contact = ' selected';
        }
        else if(strpos($url, 'resources.php') !== false) {
            $resources = ' class="selected"';
        }
        else if(strpos($url, 'culture.php') !== false) {
            $culture = ' class="selected"';
        }
        else if(strpos($url, 'offerings.php') !== false) {
            $offerings = ' class="selected"';
        }
        else if(strpos($url, 'blog') !== false) {
            $blog = ' class="selected"';
        }

        $nav = '<div class="row">
                  <a href="index.php" class="eclogo"><img src="images/spacer.gif" /></a><!-- width:295 height: 52 -->
                  <ul class="pull-right navbar navlinks">
                      <li ' . $aboutus . '><a href="aboutus.php">About</a></li>
                      <li' . $offerings . '><a href="offerings.php">Offerings</a></li>
                      <!-- <li' . $resources . '><a href="resources.php">Resources</a></li> -->
                      <li' . $culture . '><a href="culture.php">Team Culture</a></li>
                      <li' . $blog . '><a href="/blog">Blog</a></li>
                      <li><a href="contact.php" class="cta ' . $contact . '">Let\'s Build Together</a></li>
                  </ul>
                  <ul class="pull-right navbar">
                    <li class="hamburger toggle-button"><img src="images/icon_hamburger2x.png" width="30" height="29"/></li>
                  </ul>
                </div>';

        $blockquote_id = 'blockquote';
        if(strpos($url, 'blog.php') !== false) {
          $blockquote_id = 'blockquote-blog';
        }

        // this is for the slide out navigation
        echo '<div id="initial-overlay"></div>
              <nav id="menu">
                    <div class="close-toggle-button">
                      <img src="images/icon_letterx2x.png" width="30" height="29" class="toggle-button"/>
                    </div>
                    <br class="clearfix" />
                      <ul>
                        <li ' . $aboutus . '><a href="aboutus.php">About</a></li>
                        <li' . $offerings . '><a href="offerings.php">Offerings</a></li>
                        <!-- <li' . $resources . '><a href="resources.php">Resources</a></li> -->
                        <li' . $culture . '><a href="culture.php">Team Culture</a></li>
                        <li' . $blog . '><a href="/blog">Blog</a></li>
                        <li><a href="contact.php" class="cta ' . $contact . '">Contact</a></li>
                    </ul>
                    </div>
                </nav>

                <main id="panel">
                    ';


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
                <blockquote id="' . $blockquote_id . '"><span id="js-rotating">' . $tagline . '</span></blockquote>';

                echo '
                  <div class="container" id="logo-tray">
                    <div class="row row-centered">
                      <center>
                      <table>
                        <tr>
                          <td class="col-centered padded-td">
                            <img style="width: 100px; height: 100px;" class="logo-tray-icon-style" src="images/iso-logo-white.png" class="logo"/>
                          </td>
                          <td class="col-centered padded-td">
                            <img style="width: 100px; height: 100px;" class="logo-tray-icon-style" src="images/hubzone-logo-white.png" class="logo"/>
                          </td>
                          <td class="col-centered padded-td">
                            ';


        if(strpos($url, 'blog') !== false) {
          echo '  <img src="images/icon_star_big_gray2x.png" class="star blog" width="27">';
        } else {
                            echo '  <img src="images/icon_star_big_white.png" class="star">';
                    }

                            echo '
                            </td>
                          <td class="col-centered padded-td">
                            <img style="width: 100px; height: 100px;" class="logo-tray-icon-style" src="images/aws-logo-white.png" class="logo"/>
                          </td>
                          <td class="col-centered padded-td">
                            <img style="width: 100px; height: 100px;" class="logo-tray-icon-style" src="images/sba-logo-white.png" class="logo"/>
                          </td>
                        </tr>
                      </table>
                      </center>

                    </div>
                    ';


          echo '
                  <canvas width="1000" height="600" id="canvas" style="position:absolute"></canvas>
              </div> ';


        echo '</section>';
    }

?>
