<?php

   //Form fields
   $fName = filter_input(INPUT_POST,"fname");
   $mName = filter_input(INPUT_POST,"mname");
   $lName = filter_input(INPUT_POST,"lname");

   $to = "pfun02@gmail.com";
   $subject = "New Member: ";

   //Add additonal information to the message
   $message = "Hello ";

   $headers = "From: pfun02@aol.com \r\n";
   $headers .= "Reply-To: pfun02@gmail.org\r\n";
   $headers .= "MIME-Version: 1.0\r\n";


   $success = mail($to, $subject,$message,$headers);

   if(!$success){
      $errorMessage = error_get_last()['message'];
      print "$errorMessage";
   }
   else{
      print "$success";
   }
?>



