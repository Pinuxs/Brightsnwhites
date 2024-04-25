<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    echo '<script>console.log("Welcome to GeeksforGeeks!!"); </script>'; 
    $to = "Hayden_hg@outlook.com"; // Specify your email address here
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";
    echo '<script>console.log("Welcome to GeeksforGeeks!"); </script>'; 
    header("Location: http://haydens-macbook-air.local/Brightsnwhites/index.html");
    if (mail($to, $subject, $body)) {
        echo "Email sent successfully!";
        header("Location: http://haydens-macbook-air.local/Brightsnwhites/index.html");
    } else {
        echo "Failed to send email. Please try again later.";
    }
}


?>
