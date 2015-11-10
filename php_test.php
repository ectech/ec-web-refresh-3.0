<!DOCTYPE html>

<?php
$c = curl_init();
	echo "test";

	$txt = file_get_contents('http://google.com');
	echo "test again";
?>

<html lang="en">
<head>
  <title>EC Technology, LLC | Customer-driven software development for government and commercial enterprises.</title>
  <?php include 'includes/head.php'; ?>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="home" class="ectext">

	<form name="newsletter-form" id="submitSignupForm" data-parsley-validate>
              <input type="email" name="email" placeholder="Enter Your Email Address" required />
              <a href="#" class="button-sign-up" onclick="sendNewsletterSignup($('input[name=email]').val()); return false;">Sign-Up</a>
              <input type="hidden" name="submitSignupForm" value="submitted" />
            </form>


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
       function sendNewsletterSignup(emailAddress) {
        if(!$("#submitSignupForm").parsley().isValid()) {
          $("#sign-up-control").css("background-color", "#F2DEDE");
          return false;
        }
        $("#sign-up-control").css("background-color", "#f7f7f7");

        alert(emailAddress);

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

    </script>


  </body>
  </html>