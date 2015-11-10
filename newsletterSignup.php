<?php

header("Cache-Control: no-cache");

$signup_success_msg = "";

if(isset($_POST['email']))
{
  $email = $_POST['email'];

  /*
  $emailArray = array('email' => $email);
  $data = array(
      'apikey'      => '9a062e6f8140b637dcb7bbde4bb5ea6c-us1',
      'id'    => '6325119ba2',
      'email'       => $emailArray,
      'double_optin' => false
  );
  $json = json_encode($data);
  
  // add email to mailchimp subscription list with ID = 6325119ba2
  $r = new HttpRequest('https://us1.api.mailchimp.com/2.0/lists/subscribe.json', HttpRequest::METH_POST);

  echo "got here!";
  $r->addRawPostData($json);
  try {
      $r->send();
      if ($r->getResponseCode() == 200) {
          $signup_success_msg = "Thank you for registering!";
          try {
              $subject = "[ECWEB] Share411 Newsletter Registration!";
              $body = "A user has registered for the Share411 newsletter via the EC public web site. \r\n\r\n";
              $body .= "Email: {$email}";

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

              
              echo $signup_success_msg;
          } catch(Exception $ex) {
              echo $signup_success_msg;
          }
      }
  } catch (HttpException $ex) {
      echo "";
  }
  */

  $subject = "[ECWEB] Share411 Newsletter Registration!";
  $body = "A user has registered for the Share411 newsletter via the EC public web site. \r\n\r\n";
  $body .= "Email: {$email} \r\n\r\nGo to the following URL to register this user in MailChimp: https://us1.admin.mailchimp.com/lists/members/?id=5";

  // email EC
  $to = "jamil.evans@evanschambers.com, marcom@evanschambers.com";
  $headers = "Reply-To: EC Technology <admin@evanschambers.com>\r\n";
  $headers .= "Return-Path: EC Technology <admin@evanschambers.com>\r\n";
  $headers .= "From: EC Technology <admin@evanschambers.com>\r\n";
  $headers .= "Organization: Evans & Chambers Technology\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
    
  mail($to, $subject, $body, $headers);

  $signup_success_msg = "Thank you for registering!";
  echo $signup_success_msg;
}

?>