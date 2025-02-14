<?php
session_start();

$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "building_management"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$user = $_POST['username'];
$pass = $_POST['password'];

// SQL query to check login
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['username'] = $user; // Save username to session
    header("Location: dashboard.php"); // Redirect to dashboard
    exit();
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>
