<?php
// this line loads the library
require('/path/to/twilio-php/Services/Twilio.php');
$account_sid = 'AC5ef872f6da5a21de157d80997a64bd33';
$auth_token = '[AuthToken]';
$client = new Services_Twilio($account_sid, $auth_token);
$client->account->messages->create(array(
  'To' => "+933429859057",
  'From' => "+14158141829",
  'Body' => "Tomorrow's forecast in Financial District, San Francisco is Clear.",
  'MediaUrl' => "https://climacons.herokuapp.com/clear.png", 
));