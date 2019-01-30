<?php
  // Obtain the number from the form data.
  // Add +1 to the contact number given.
  //$contactNumber = '+1';
  //$contactNumber .= $_POST['contactNumber'];
  $drinkName = $_POST['drinkName'];

  // Used for testing purposes, twillio only allows developer number to be contacted.
  $contactNumber = '+19417402097';

  // this line loads the library - but is depreciated
  // https://www.twilio.com/console/sms/getting-started/basics
  // https://github.com/twilio/twilio-php/tree/legacy
  require('twilio-php/Services/Twilio.php');
  $account_sid = 'AC2860b767453ee60f6d67cb221805b32f';
  $auth_token = 'dc516bc2d6e02b28fb154367bb31c615';
  $client = new Services_Twilio($account_sid, $auth_token);

  // Send the message to the user.
  $client->account->messages->create(
      array(
          'To' => $contactNumber,
          'From' => '+19416134019',
          'Body' => "Hello, your " .$drinkName. " is ready to be picked up!",
      )
  );

  echo "success";
?>
