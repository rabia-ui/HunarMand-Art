<?php
// Connection details
$servername = "localhost";
$username = "root";
$password = ""; // Update if necessary
$dbname = "ecommerce";

// Create connection using procedural MySQLi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get POST data
$role = $_POST['role'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// Validate passwords match
if ($password !== $confirmPassword) {
    echo "Passwords do not match.";
    exit();
}

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL insert query
$sql = "INSERT INTO users (role, name, email, password) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters (s = string)
    mysqli_stmt_bind_param($stmt, "ssss", $role, $name, $email, $hashedPassword);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        // Redirect on success
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
} else {
    echo "Statement preparation failed: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
