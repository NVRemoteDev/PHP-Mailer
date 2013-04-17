<?php
/*Twitter Bootstrap PHP Mailer v1.0a
Anthony Hill - Hill.Anthony@live.com
10/7/12
*/
// Validator
require_once 'is_email.php';

// Get their email
if(isset($_GET['email']))
{
	$email = $_GET['email'];
} else {
	echo 'No e-mail set';
	exit;
}
// Fill these in
// $to is your e-mail address that you want people to contact you on
// Example: $to = "youremail@gmail.com"
$to = "";
// $from should be an e-mail on your website.  Check with your web host if you need help here.
$from = "";

/* Don't modify below this point if you don't know what you're doing */
$subject = "$email has contacted you";
$website = $_GET['website'];
$name = $_GET['name'];

// Validate
$result = is_email($email, true, true);
if ($result !== ISEMAIL_VALID) {
	echo "$email is not a valid email address (result code $result)";
	exit;
}

// Make sure the message isn't null
if($_GET['message'] != '')
{
	$message = "E-Mail: $email\r\nWebsite: $website\r\nContact Name: $name\r\n\r\nMessage:\r\n";
	$message .= $_GET['message'];
} else {
	echo 'Please enter a valid message.';
	exit;
}

$headers = "From: $from" . "\r\n" .
    "Reply-To: $email" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

echo 'Your e-mail has been sent';
mail($to, $subject, $message, $headers);

?>