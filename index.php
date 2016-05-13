<?php
  include('wordpress/wp-blog-header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EC Technology, LLC | Customer-driven software development for government and commercial enterprises.</title>
  <?php include 'includes/head.php'; ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="home" class="ectext">
  <?php include 'includes/header.php'; echoNavigation('Customer-driven software development for government and commercial enterprises.'); ?>    
  
  <div id="content">
  <!-- Our Promise Section -->
  <section id="promise" class="container-fluid">
      <div class="row">
          <img src="images/main_paragraph_artwork.png" width="100%">
          <h1>Our Promise</h1>
            <p class="col-sm-6 text-left">At Evans &amp; Chambers we deliver the technology and management solutions that empower businesses 
            and government agencies to collaborate, share information and solve problems. With applied expertise 
            in defense and intelligence, we understand the landscape</p>

            <p class="col-sm-6 text-left">our clients navigate. More, we approach each challenge via active dialogue, working with you 
            side-by-side to accomplish your objectives. And the results speak for themselves. For us, success 
            is measured in the seconds and dollars regained by each and every client.</p>
          
      </div>
      <div class="row">
            <a href="aboutus.php" class="text-uppercase text-center button-box">Learn More</a>
      </div>
  </section>

  <!-- Offerings Section -->
  <section id="our-offerings" class="container-fluid">
      <div class="row">
          <div class="col-sm-6">
              <h1>Our Offerings</h1>
              <img src="images/icon_star_small_white.png"/><br/>
              <ul>
                  <li>Project Management Office (PMO) Support</li>
                  <li>Web Development</li>
                  <li>APIs/Web Services</li>
                  <li>Mobile App Development</li>
                  <li>Cloud Computing</li>
                  <li>Intelligence Analysis</li>
                  <li class="last"><a href="offerings.php" class="button-underline">Learn More</a></li>
              </ul>
          </div>
          <div class="col-sm-6">
              <h1>Our Expertise</h1>
              <img src="images/icon_star_small_white.png"/><br/>
              <ul>        
                  <li>Insider Threat</li>
                  <li>Counterterrorism</li>
                  <li>Personnel Security</li>
                  <li>Immigration</li>
                  <li>Information Sharing</li>
                  <li>Legacy System Modernization</li>
                  <li class="last"><a href="offerings.php" class="button-underline">Learn More</a></li>
              </ul>            
          </div>
      </div>
  </section>

  <!-- Our Clients Section -->
  <section id="our-clients" class="container-fluid">
      <div class="row">
          <div class="col-sm-12">
              <h1>Our Clients</h1>
              <img src="images/icon_star_small_orange.png" />
          </div>
          <div class="col-sm-6 col-md-3">
              <img src="images/logo_airforce.png" class="logo" />
          </div>
          <div class="col-sm-6 col-md-3">
              <img src="images/logo_dhs.png" class="logo" />
          </div>
          <div class="col-sm-6 col-md-3">
              <img src="images/logo_dia.png" class="logo" />
          </div>
          <div class="col-sm-6 col-md-3">
              <img src="images/logo_fbi.png" class="logo" />
          </div>
          
          
          
          <p class="col-sm-12">
              We’ve collaborated with some of the region’s best federal contractors and commercial organizations. Our goal? Fast, intelligent, user-friendly, internally-compliant solutions. Take control of your data and business processes: talk to us.
          </p>
          
      </div>
      <div class="row">
          <a href="contact.php" class="text-uppercase text-center button-box orange">Fill Out Our Contact Form</a>
      </div>
  </section>

  <!-- Are you hungry? -->
  <section id="hungry" class="container-fluid">
      <div class="row">
          <div class="col-md-6 text-left no-image">
              <h1>Are you hungry to develop yourself?</h1>
          
            <p>We’re constantly hunting for ambitious men and women on both technical and executive tracks to help us hone the cutting edge of our industry. At Evans &amp; Chambers, you’ll have the latitude to take ownership of your work and live your zeal. Here, you’ll have a voice with access to executive leadership. You’ll have opportunities to stretch yourself, develop your career and build your skill set. We admit: you’ll also have a lot of fun.</p>
              
            <div class="clearfix"/>
            <a href="#" class="text-uppercase text-left button-box">Explore Job Listings</a>
          </div>
          <div class="col-md-6">
              <div class="clearfix"/>
           </div>
      </div>
  </section>
    

  <section id="quote" class="container-fluid">
      <div class="row">
              <div class="quote-cap">“</div>
              <blockquote id="blockquote-quote">Evans &amp; Chambers consistently delivers on its promise to provide quality service to its customers. Its professional staff has been a critical part of our office’s success... </blockquote>
              <img style="position:relative;top:-43px; clear:both; margin:0; float:none;" src="images/icon_star_big_orange.png">
              <canvas width="1000" height="600" id="canvas-quote" style="position:absolute"></canvas>
              <h3>Customer, Defense Intelligence Agency</h3>
      </div>
  </section>

    
  <!-- Get to know us better -->
  <section id="get-to-know" class="container-fluid">
      <div class="row">
          <div class="col-md-6 text-left">
            <br class="clearfix"/>

          </div>
          <div class="col-md-6 no-image text-left">
              <h1>Get to know us better</h1>
              
              <p>Evans &amp; Chambers was founded in 2003 by Jamil Evans and Andre Chambers. We’re an 8(a) multiple prime contract holder rooted in the Shaw and LeDroit neighborhood of Washington D.C. At EC we’re not just interested in agile technology and robust software development: we’re also interested in being a part of the community that we work. Curious to know what we mean by that?</p>

              <a href="aboutus.php" class="text-uppercase text-left button-box">LEARN MORE</a>
              <br class="clearfix"/>
           </div>
      </div>
  </section>
-->
    
  <!-- Get to know us better -->
  <section id="from-the-blog" class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
        <h1>What we’re talking about</h1> 
        <img style="" src="images/icon_star_big_orange.png" width="18">
        </div>
          <!-- Get the last 3 posts. -->

<?php 
global $post;
$args = array( 'posts_per_page' => 3 );
if(function_exists("get_posts")) {
  $myposts = get_posts( $args );

  foreach( $myposts as $post ) :  setup_postdata($post); ?>
          
          <article class="col-sm-4 text-left">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><h2><?php the_title(); ?></h2></a>
              <img src="images/separator_flagstripes.png" />
              <p><?php the_excerpt(); ?>
              </p>
            <br class="clearfix"/>

          </article>
<?php endforeach; } ?>
          
      </div>
      <div class="row">
          <a href="blog" class="text-center button-box orange">Read More from our Blog</a>
      </div>

  </section>

  <!-- Footer Section -->
  <?php include 'includes/footer.php'; echoFooter(45); ?>
</body>
</html>
