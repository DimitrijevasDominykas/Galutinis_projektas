<?php
$name = trim($_POST ['name']);
$email = trim($_POST ['email']);
$message = trim($_POST ['message']);

if(!empty($name) && !empty($email) && !empty($message)) {
    echo "<p>Your name: $name</p>";
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";
        $to ="dimitrijevas@gmail.com";
        $subject = "New message";
        $author = 'From:' . $name . ',' . $email;
        mail($to, $subject, $author, $message, $from);
        echo "<script>alert('Thank you! We received your message! We contact you soon!');</script";
    }
}

include('db.php');


?>