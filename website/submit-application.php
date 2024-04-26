<form action="submit-application.php" method="POST">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $coverletter = $_POST['coverletter'];
    
    // Set your email address where you want to receive the job applications
    $to = "your-email@example.com";
    
    // Set email subject
    $subject = "New Job Application";
    
    // Construct the email body
    $message = "Full Name: $fullname\n";
    $message .= "Email: $email\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Cover Letter:\n$coverletter\n";
    
    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you for your application!</h2>";
    } else {
        echo "<h2>Sorry, there was an error sending your application. Please try again later.</h2>";
    }
}
?>
