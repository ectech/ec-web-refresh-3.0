<?php

header("Cache-Control: no-cache");

$success_msg = "";
$testing = "";
if(isset($_POST['submitContactForm']))
{
    // call google to find out if the recaptcha response was successful
    $recaptcha_user_response = $_POST['recaptcha_user_response'];
    $postfields = array('secret'=>'6LeEKSQUAAAAAPifxgbcIH5Ejl7rNskADb5dT1sc', 'response'=> $recaptcha_user_response);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    // Edit: prior variable $postFields should be $postfields;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // On dev server only!
    $result = curl_exec($ch);
    
    $result_json = json_decode($result);
    if(!$result_json->success) { // if success is false, quit
        echo "recaptcha failure";
        return;
    }
    
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $subject = "[ECWEB] " . $_POST['subject'];
  
  if(validateFormMandatory($name, $email, $message, $subject)) {
    $body = "The following message was submitted through the contact from on the EC public website: \r\n\r\n";
    $body .= "Name: {$name} \r\nEmail: {$email}\r\nPhone: {$phone}\r\nSubject: {$subject}\r\nMessage: {$message}\r\n";

    // email EC
    $to = "marcom@evanschambers.com, jamil.evans@evanschambers.com";
    $headers = "Reply-To: EC Technology <admin@evanschambers.com>\r\n";
    $headers .= "Return-Path: EC Technology <admin@evanschambers.com>\r\n";
    $headers .= "From: EC Technology <admin@evanschambers.com>\r\n";
    $headers .= "Organization: Evans & Chambers Technology\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    
    mail($to, $subject, $body, $headers);

    $success_msg = "Your form has been submitted successfully. We'll contact you soon!";

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
  <title>Contact Us | EC Technology, LLC | Customer-driven software development for government and commercial enterprises.</title>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <?php include 'includes/head.php'; ?>

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
      <h4 style="color: green; text-align: center;"><?php echo $success_msg; ?></h4>

      <form name="contactForm" method="post" action="contact.php" id="form" data-parsley-validate>
          <input type="hidden" value="" name="recaptcha_user_response" id="recaptcha_user_response" />
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <input type="text" placeholder="Name" name="name" class="col-xs-12" required />
            </div>
            <div class="col-md-4 col-md-12">
                <input type="email" placeholder="Email" name="email" class="col-xs-12" required />
            </div>
            <div class="col-md-4">
                <input type="text" placeholder="Phone" name="phone" class="col-xs-12" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="text" placeholder="Subject" name="subject" class="col-xs-12" required />
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <textarea placeholder="Message" name="message" class="col-xs-12" required></textarea>
            </div>
        </div>
        
        <div class="row">
            <button type="submit" class="text-uppercase text-center button-box orange g-recaptcha" data-sitekey="6LeEKSQUAAAAALyS96uZgG0OMpIUXSlRw8s_i04h"
                    data-callback="submitForm">Submit</button>
        </div>
        <input type="hidden" name="submitContactForm" value="submitted" />
    </form>

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
              <a href="https://www.google.com/maps/place/635+Florida+Avenue+NW+Washington+DC+20001">
                <img src="images/photo_map.png" />
              </a>
          </div>
      </div>
  </section>
    
  <!-- Footer Section -->
  <?php include 'includes/footer.php'; echoFooter(800); ?>

    <script>
    function submitForm(token) {
        $('input#recaptcha_user_response').val(token);
        $('form#form').submit();
    }
    </script>
</body>
</html>
