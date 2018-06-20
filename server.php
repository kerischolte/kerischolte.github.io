<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>server</title>
</head>

<?php
	
    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Set the recipient email address.
		$to = "roterboter@gmail.com";
    	$subject = "A New Message from your Website";

        // Build the email content.
        $email_content = "Name: $q1\n";
        $email_content .= "Email: $q3\n\n";
        $email_content .= "Message:\n$q4\n";
		$email_content = "Location: $q2\n\n";

        // Build the email headers.
        $email_headers = "From: $q1 <$q3>";}

        // Send the email.
        if (mail($to, $subject, $email_content, $email_headers)) {
            // Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            // Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong and we couldn't send your message.";
        }

?>
	
<body>
</body>
</html>