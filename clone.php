<?php
/*
require_once('index.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uganda = $pages->get('/uganda/');
$copy = $pages->clone($uganda);

// Bonus: Now that the clone exists, lets move and rename it
$copy->parent = '/';
$copy->title = 'Tanzania';
$copy->name = 'tanzania';
$copy->save();

/*
$page = $pages->get(1878);
$copy = $pages->clone($page);
//$copy->parent = '/cloned-parent/';
$copy->title = 'Kenya';
$copy->name = $sanitizer->pageName($copy->title);
$copy->of(false);
$copy->save();
*/

require_once('index.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
$m = \ProcessWire\wireMail();
$numSent = $m->to('feokoboi@gmail.com')
  ->from('feokoboi@gmail.com')
  ->subject('Message Subject')
  ->body('Optional message body in plain text')
  ->bodyHTML('<html><body><p>Optional message body in HTML</p></body></html>')
  ->send();
  
  echo $numSent;
  
  if($m->className != 'WireMailSmtp') {
    // Uups, wrong WireMail-Class: do something to inform the user and quit
    echo "<p>Couldn't get the right WireMail-Module (WireMailSmtp). found: {$mail->className}</p>";
    return;
}

if(!$m->testConnection()) {
    // Connection not working:
    echo "<p>Couldn't connect to the SMTP server. Please check the {$mail->className} modules config settings!</p>";
    return;
} 
*/
 $to = array('feokoboi@gmail.com');
    $subject = 'Wiremail-SMTP Test ' . date('H:i:s') . ' äöü ÄÖÜ ß';

    $mail = \ProcessWire\wireMail();
    if($mail->className != 'WireMailSmtp') {
        echo "<p>Couldn't get the right WireMail-Module (WireMailSmtp). found: {$mail->className}</p>";

    } else {

        $mail->from = 'dev@kglserver.net'; // <--- !!!!

        $mail->to($to);
        $mail->subject($subject);
        $mail->sendSingle(true);

        $mail->body("Titel\n\ntext text TEXT text text\n");
        $mail->bodyHTML("<h1>Titel</h1><p>text text <strong>TEXT</strong> text text</p>");

        $dump = $mail->debugSend(1);
    }