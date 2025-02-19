<?php
require 'path/to/php-email-form/php-email-form.php';

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = 'your@email.com';
$contact->from_name = $_POST['name'];
$contact->from_email = $_POST['email'];
$contact->subject = $_POST['subject'];

// Add a cc address
$contact->cc = array('ccreceiver1@example.com', 'ccreceiver2@example.com');
// Add a bcc address
$contact->bcc = array('bccreceiver1@example.com', 'bccreceiver2@example.com');

// Add a honeypot field
$contact->honeypot = $_POST['first_name'];

$contact->add_message($_POST['name'], $_POST['email'], $_POST['message']);

echo $contact->send();

?>
