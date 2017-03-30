<?php 
		
	function demoRequest(){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone_number = $_POST['phone_number'];
		$message = $_POST['message'];

		//Setting the variable values
		$request_name = $name;
		$request_email = $email;
		$request_number = $phone_number;
		$request_message = $message;

		$subject = "MessageWatch Demo Request";

		$header = "From: noreply@message-watch.com\r\n"; 
		$header.= "MIME-Version: 1.0\r\n"; 
		$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
		$header.= "X-Priority: 1\r\n";

		//Message for email to us
		$message = "<h2>MesssageWatch Demo Request</h2>";
		$message .= "<p>A demo request for MessageWatch has been made! See the information below for more details.</p>";
		$message .= "<p><strong>Name:</strong> $request_name</p>";
		$message .= "<p><strong>Email:</strong> $request_email</p>";
		$message .= "<p><strong>Phone Number:</strong> $request_number</p>";
		$message .= "<p><strong>Message:</strong> $request_message</p>";

		//Email to send to
		$to = "tyler.morren@verqu.com";

		mail($to, $subject, $message, $header);

		echo 
		"<div class='alert alert-success' role='alert'>
  			<strong>Success!</strong> Your request for a demo has been received. We will get back to you as soon as we can!
		</div>";
	}
?>