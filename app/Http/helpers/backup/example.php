<?php
include 'hook.php';


//full example

//we execute this function:
email_hook('your@email.com','you','subject','body');
//an email is sent.

//now we overwrite the function for the email_hook (remember you can execute as many actions as you want)
Hook::add_action('email_hook','no_email');
//we execute this function:
email_hook('your@email.com','you','subject','body');
//now no email is sent but we get:
/*
array
0 => string 'email@mail.com' (length=14)
1 => string 'you' (length=3)
2 => string 'subject' (length=7)
3 => string 'body' (length=4)
*/


/**
* Simple hook example function to send an email
*
* @param string $to
* @param string $from
* @param string $subject
* @param string $body
* @param string $extra_header
* @return boolean
*/
function email_hook($to,$from,$subject,$body,$headers=NULL)
{
  //we add hook just in case we want to overwrite the email function
  if (Hook::exists_action('email_hook'))//if we remove this will perform the hooks plus normal functionality
  {
      return Hook::do_action('email_hook',func_get_args());
  }
  else
  {
      if ($headers==NULL)
      {
          $headers = 'MIME-Version: 1.0' . PHP_EOL;
          $headers.= 'Content-type: text/html; charset=utf8'. PHP_EOL;
          $headers.= 'From: '.$from.PHP_EOL;
          $headers.= 'Reply-To: '.$from.PHP_EOL;
          $headers.= 'Return-Path: '.$from.PHP_EOL;
          $headers.= 'X-Mailer: PHP/' . phpversion().PHP_EOL;
      }

      return mail($to,$subject,$body,$headers);
  }
}

function no_email(){
  var_dump(func_get_args());
}
