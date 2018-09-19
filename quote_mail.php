<?php
if($_POST)
{
	$to_Email   	= "info@eclipsemarine.in"; //Replace with recipient email address
	$subject        = '[New Quote Eclipse Marine Services]'; //Subject line for emails
	
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	
		//exit script outputting json data
		$output = json_encode(
		array(
			'type'=>'error', 
			'text' => 'Request must come from Ajax'
		));
		
		die($output);
    } 
	/*
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userDesignation"]) || !isset($_POST["userPhone"]) || !isset($_POST["userCompanyname"]) || !isset($_POST["Vesselname"]) || !isset($_POST["Enquiry"]))
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
		die($output);
	}
*/
	//Sanitize input data using PHP filter_var().
	$user_Name			= filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$user_Email			= filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Designation	= filter_var($_POST["userDesignation"], FILTER_SANITIZE_STRING);
	$user_Phone			= filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
	$user_Companyname	= filter_var($_POST["userCompanyname"], FILTER_SANITIZE_STRING);
	$user_Vesselname	= filter_var($_POST["userVesselname"], FILTER_SANITIZE_STRING);
	$user_Enquiry		= filter_var($_POST["userEnquiry"], FILTER_SANITIZE_STRING);
	
	//additional php validation
	if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
		die($output);
	}
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
		die($output);
	}
	if(!is_numeric($user_Phone)) //check entered data is numbers
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Only numbers allowed in Contact Number field'));
		die($output);
	}
	
	if(strlen($user_Enquiry)<5) //check emtpy message
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Too short! Please enter your correct Enquiry.'));
		die($output);
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email.'' . "\r\n" .
	'Reply-To: '.$user_Email.'' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	$body = 	'Name: '.$user_Name.'' . "\r\n" .
				'Email: '.$user_Email. '' . "\r\n" .
				'Designation: '.$user_Designation. '' . "\r\n" .
				'Phone: '.$user_Phone. '' . "\r\n" .
				'Company Name: '.$user_Companyname. '' . "\r\n" .
				'Vessel Name: '.$user_Vesselname. '' . "\r\n" .
				'Enquiry: '.$user_Enquiry;
	
	
	
	$sentMail = @mail($to_Email, $subject, $body, $headers);
	
	if(!$sentMail)
	{
		$output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
		die($output);
	}else{
		$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .' Thank you for your email'));
		die($output);
	}
}
?>