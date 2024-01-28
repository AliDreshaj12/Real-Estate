<?php
$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['numbers']) ? $_POST['numbers'] : ''; 

$conn = new mysqli('localhost', 'root', '', 'shtepit');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO contactus (firstName, lastName, email, numbers, notes) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstName, $lastName, $email, $phone, $notes);
    $stmt->execute();
    echo "Registration successful...";
    $stmt->close();
    $conn->close();
}
?>
