<?php
// Include the connection file
require_once "connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];


    // Insert the data into the database
    $query = "INSERT INTO registration (username, password) VALUES (?, ?)";
    $stmt = $mysqli->prepare($query);

    if ($stmt === false) {
        die("Error in prepare(): " .htmlspecialchars($mysqli->error));
    }

    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Close the database connection
    $mysqli->close();
}
?>