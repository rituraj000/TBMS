<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

// Check if email field is empty
if (empty($email)) {
    echo "Email is required.";
    exit(); // Stop further execution
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection Failed: '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (firstname, lastname, gender, email, password, number)
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $firstname, $lastname, $gender, $email, $password, $number);
    $stmt->execute();
    
    echo "Registration successful.";
    
    $stmt->close();
    $conn->close();
}
?>
