<?php

/*
  contact form
 */

$email = $_POST['con_email'];
$name = $_POST['con_name'];
$mess = $_POST['con_msg'];

$to = 'saiful.droitlab@gmail.com,shahadat.dev@gmail.com';

$subject = 'faded User Query';

$message = '<strong>Name : </strong>' . $name . '<br/><br/>';
$message .= $mess . '<br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <' . $name . '>' . "\r\n";

$result = mail($to, $subject, $message, $headers);
if ($result) 
{
    echo 'x';
}
else 
{
    echo 'y';
}


