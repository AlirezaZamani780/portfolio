<?php
// Include the database connection
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare the SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message); // "sss" means the parameters are strings

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Error sending message. Please try again.'); window.location.href = 'index.html';</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
