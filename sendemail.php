<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contacting us. We will contact you As early as possible  '
	);

    // $name = @trim(stripslashes($_POST['name'])); 
    // $email = @trim(stripslashes($_POST['email'])); 
    // $subject = @trim(stripslashes($_POST['subject'])); 
    // $message = @trim(stripslashes($_POST['message'])); 


    $name = $_POST['name1']; 
    $email = $_POST['email1']; 
    $subject = $_POST['subject1']; 
    $message = $_POST['message1']; 

    $email_from = $email;
    $email_to = 'mayankkashyap95@gmail.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;