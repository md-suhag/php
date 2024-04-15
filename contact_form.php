<?php
// if($_SERVER["REQUEST_METHOD"] == "POST"){
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $message = $_POST["message"];

//     $to = "abdussalamsuhag104@gmail.com";
//     $subject = "new contact form";
//     $message = "Name: $name \n 
//                 Email: $email \n 
//                 Message : $message";
    
//     $headers = "From: $email \r\n 
//                 Reply to : $email\r\n
//                 X-Mailer : PHP/ phpversion()
//                 ";

//     mail($to, $subject, $message, $headers);
//     echo "your message has been sent";
// }else{
//     echo "something is wrong";
// }
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'abdussalamsuhag104@gmail.com'; // Change this to your email address
    $subject = 'New Contact Form Submission';
    $message = 'Name: ' . $name . "\r\n" .
               'Email: ' . $email . "\r\n" .
               'Message: ' . $message;

    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
    echo 'Your message has been sent successfully!';
} else {
    echo 'Something went wrong, please try again.';
}
?>
