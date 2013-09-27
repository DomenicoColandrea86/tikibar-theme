<?php
if( isset($_POST) ){
	
	//form validation vars
	$formok = true;
	$errors = array();
	
	//sumbission data
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$date = date('m/d/Y');
	$time = date('g:i a');
	
	//form data
	$name = $_POST['name'];	
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$enquiry = $_POST['enquiry'];
	$message = $_POST['message'];
	
	//validate form data
	
	//validate name is not empty
	if(empty($name)){
		$formok = false;
		$errors[] = "You didn't enter a name";
	}
	
	//validate email address is not empty
	if(empty($email)){
		$formok = false;
		$errors[] = "You didn't enter an email address";
	//validate email address is valid
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$formok = false;
		$errors[] = "You didn't enter a valid email address";
	}
	
	//validate message is not empty
	if(empty($message)){
		$formok = false;
		$errors[] = "You didn't enter a message";
	}
	//validate message is greater than 20 charcters
	elseif(strlen($message) < 20){
		$formok = false;
		$errors[] = "Your message must be bigger than 20 characters";
	}
	
	//send email if all is ok
	if($formok){
		$headers = "From: info@tikibar.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
		$emailbody = "<p>You have recieved a new message from the contact form on your website.</p>
					  <p><strong>Name: </strong> {$name} </p>
					  <p><strong>Email Address: </strong> {$email} </p>
					  <p><strong>Telephone: </strong> {$telephone} </p>
					  <p><strong>Message: </strong> {$message} </p>
					  <p>This message was sent from the Tiki Bar Contact Form: on {$date} at {$time}</p>";
		
		mail("info@tikibar.com","New Message from Tiki Bar Website!",$emailbody,$headers);
		
	}
	
	//what we need to return back to our form
	$returndata = array(
		'posted_form_data' => array(
			'name' => $name,
			'email' => $email,
			'telephone' => $telephone,
			'enquiry' => $enquiry,
			'message' => $message
		),
		'form_ok' => $formok,
		'errors' => $errors
	);
		
	
	//if this is not an ajax request
	if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){
		//set session variables
		session_start();
		$_SESSION['cf_returndata'] = $returndata;
		
		//redirect back to form
		header('location: ' . $_SERVER['HTTP_REFERER']);
	}
}
