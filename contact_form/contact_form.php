[php]

<?php
// Naming Constant
define( "RECIPIENT_NAME", "Alamin" );
define( "RECIPIENT_EMAIL", "alaminhowladerofficial@gmail.com" );
// Values
$success = false;
$senderName = isset( $_POST[‘username’] ) ? preg_replace( "/[^\.\-\’ a-zA-Z0-9]/", "", $_POST[‘username’] ) : "";
$senderEmail = isset( $_POST[’email’] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST[’email’] ) : "";
$subject = isset( $_POST[‘subject’] ) ? preg_replace( "/[^\.\-\’ a-zA-Z0-9]/", "", $_POST[‘subject’] ) : "";
$message = isset( $_POST[‘message’] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST[‘message’] ) : "";
// Send the email
if ( $senderName &amp;amp;&amp;amp; $senderEmail &amp;amp;&amp;amp; $message ) {
$recipient = RECIPIENT_NAME . " &amp;lt;" . RECIPIENT_EMAIL . "&amp;gt;";
$headers = "From: " . $senderName . " &amp;lt;" . $senderEmail . "&amp;gt;";
$success = mail( $recipient, $subject, $message, $headers );
//Set Location
header(‘Location: index.html’);
}
?>

[/php]