<?php

header("Cache-Control: no-cache");

$success_msg = "Your referral has been submitted.<br/>Now get back to work!";

if(isset($_POST['submitContactForm']))
{

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  
  if(validateFormMandatory($name, $email, $message, $subject)) {
    $body = "The following message was submitted through the contact from on the EC public website: \r\n\r\n";
    $body .= "Name: {$name} \r\nEmail: {$email}\r\nPhone: {$phone}\r\nSubject: {$subject}\r\nMessage: {$message}\r\n";

    // email EC
    $to = "jamil.evans@evanschambers.com";
    $headers = "Reply-To: EC Technology <admin@evanschambers.com>\r\n";
    $headers .= "Return-Path: EC Technology <admin@evanschambers.com>\r\n";
    $headers .= "From: EC Technology <admin@evanschambers.com>\r\n";
    $headers .= "Organization: Evans & Chambers Technology\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    
    mail($to, $subject, $body, $headers);
  }
}

$empty_name = 'false';
$empty_email = 'false';
$empty_subject = 'false';
$empty_message = 'false';

function validateFormMandatory($name, $email, $message, $subject) { 
  if(empty($name))
    $empty_name = 'true';
  if(empty($email))
    $empty_email = 'true';
  if(empty($subject))
    $empty_subject = 'true';
  if(empty($message))
    $empty_message = 'true';
    
  if($empty_name == 'true' || $empty_email == 'true' || $empty_subject == 'true' || $empty_message == 'true') {
    return false; // validation error 
  } else {
    return true; // no errors
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>EC Technology, LLC | Customer-driven software development for government and commercial enterprises.</title>
    
    <!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\--                   




     ______  ______       ______  ______  ______  __  __  __   __  ______  __      ______  ______  __  __    
    /\  ___\/\  ___\     /\__  _\/\  ___\/\  ___\/\ \_\ \/\ "-.\ \/\  __ \/\ \    /\  __ \/\  ___\/\ \_\ \   
    \ \  __\\ \ \____    \/_/\ \/\ \  __\\ \ \___\ \  __ \ \ \-.  \ \ \/\ \ \ \___\ \ \/\ \ \ \__ \ \____ \  
     \ \_____\ \_____\      \ \_\ \ \_____\ \_____\ \_\ \_\ \_\\"\_\ \_____\ \_____\ \_____\ \_____\/\_____\ 
      \/_____/\/_____/       \/_/  \/_____/\/_____/\/_/\/_/\/_/ \/_/\/_____/\/_____/\/_____/\/_____/\/_____/ 

                              Font: Sub-Zero @ http://patorjk.com/software/taag



    ----\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->   
          

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="author" content="Evans & Chambers Technology, LLC">
  <meta name="robots" content="index,follow,archive">
  <meta name="description" content="At Evans & Chambers we deliver the technology and management solutions that empower businesses and government agencies to collaborate, share information and solve problems. With applied expertise in defense and intelligence, we understand the landscape our clients navigate. More, we approach each challenge via active dialogue, working with you side-by-side to accomplish your objectives. And the results speak for themselves. For us, success is measured in the seconds and dollars regained by each and every client.">
  <meta property="og:image" content=""> <!-- RJE: put URL to the header background image here -->
  <meta property="og:title" content="EC Technology, LLC">
  <meta property="og:url" content="http://evanschambers.com/">
  <meta property="og:site_name" content="EC Technology, LLC">
  <meta property="og:type" content="website">

  <!-- Bootstrap Core -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Bootstrap Optional theme -->
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">

  <!-- Custom CSS -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="css/ec.css" media="screen" />
<!--  <link rel="stylesheet" href="css/component.css" media="screen" />  -->
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="contact-us" class="ectext">
    
  <?php include 'includes/header.php'; echoNavigation('Talk to us.'); ?> 
  
  <div id="content">
  <!-- Quality Section -->
  <section id="our-clients" class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
          <h1>Fill out the contact form below and we'll be in touch.</h1>
          <img src="images/separator_flagstripes.png" />
          </div>
          <div class="col-lg-12">
              <br/>
              <p class="col-sm-12">Your project, your questions, your priorities.  We want to hear from you.</p>
          </div>
      </div>
  </section>

  <!-- How we see our team? -->
  <section id="contact-form" class="container-fluid">
      <form name="contactForm" method="post" action="contact.php" id="form">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <input type="text" placeholder="Name" name="name" class="col-xs-12" />
            </div>
            <div class="col-md-4 col-md-12">
                <input type="text" placeholder="Email" name="email" class="col-xs-12" />
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="Phone" name="phone" class="col-xs-12" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="Subject" name="subject" class="col-xs-12" style="<?php if($empty_subject == "true") { echo "background-color: red;"; } ?>" />
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <textarea placeholder="Message" name="message" class="col-xs-12"></textarea>
            </div>
        </div>
        
        <div class="row">
            <a href="#" class="text-uppercase text-center button-box orange" onclick="document.getElementById('form').submit(); return false;">Submit</a>
        </div>
        <input type="hidden" name="submitContactForm" value="submitted" />
    </form>
    <?php echo (string) $empty_subject; ?>
  </section>
    
  <section id="our-headquarters" class="container-fluid">
      <div class="row">
          <div class="col-md-5 col-md-offset-1" style="display:inline-block; vertical-align:middle;">
              <h1>Our Headquarters</h1>
              <p>
                635 Florida Avenue, NW<br/>
                Second Floor</br>
                Washington, DC 20001<br/>
                <br/>
                Tel: (202) 768-7330<br/>
                Fax: (877) 239-6563<br/>
              </p>
          </div>
          <div class="col-md-6">
              <img src="images/photo_map.png" />
          </div>
      </div>
  </section>
    
  <!-- Footer Section -->
  <?php include 'includes/footer.php'; echoFooter(800); ?>

</body>
</html>
