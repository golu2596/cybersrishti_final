<?php 
if(isset($_SERVER['REQUEST_METHOD'])=="POST"){
    $to = "info@cybersrishti.org"; // this is your Email address
    $from = $_POST['email_query']; // this is the sender's Email address
    $first_name = $_POST['name_query'];
    $last_name = $_POST['phone_query'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " \n" . $last_name . " \n" .$from. "\n\n" . $_POST['message_query'];
    // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
echo "<script>
alert('Mail sent successfully');
window.location.href='index.html';
</script>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
