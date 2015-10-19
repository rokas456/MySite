<?php 
if(isset($_POST['submit'])){
    $to = "rokas.lukosevicius@mycit.ie"; 
    $from = $_POST['email']; 
    $first_name = $_POST['name'];
    $subject = "Enquiry";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $first_name . ", I respond.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>