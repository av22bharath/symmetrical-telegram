<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $message = htmlspecialchars($_POST['message']);

    // Display the submitted data
    echo "<h3>Thank you for your submission!</h3>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Email:</strong> " . $email . "</p>";
    echo "<p><strong>Date of Birth:</strong> " . $dob . "</p>";
    echo "<p><strong>Gender:</strong> " . $gender . "</p>";
    echo "<p><strong>Message:</strong> " . nl2br($message) . "</p>";
}
?>
