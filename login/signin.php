<?php
// Include the database connection file
include '../database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cin = trim($_POST["cin"]);
    $password = $_POST["password"];

    // Retrieve user data from the database
    $getUserQuery = $conn->prepare("SELECT id, cin, mot_de_passe FROM users WHERE cin = ?");
    $getUserQuery->bind_param("s", $cin);
    $getUserQuery->execute();
    $getUserQuery->bind_result($userId, $dbcin, $dbPasswordHash);
    $getUserQuery->fetch();
    $getUserQuery->close();

    // Check if the user exists and verify the password
    if ($dbcin && password_verify($password, $dbPasswordHash)) {
        // Start a session and store user information
        session_start();
        $_SESSION["user_id"] = $userId;

        // Redirect to the user's profile page or any other page
        header("Location: ../profile/main.php");
        exit();
    } else {
        // Invalid credentials, redirect with an error message
        header("Location: main.php?error=invalid_credentials");
        exit();
    }
} else {
    // Redirect to the signin page if accessed directly without form submission
    header("Location: ./main.php");
    exit();
}
?>
