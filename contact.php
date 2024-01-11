<?
    if(isset($_POST['submit'])){
        $to = "namhoangpham96@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $subject2 = "Confirm your submission";
        $body = $_POST['body'];
        
        $message = "From " . $name . " - " . $from . " wrote the following:" . "\n\n" . $body;
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $body;

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message);
        mail($from,$subject2,$message2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $first_name;
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
    }
?>