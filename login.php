<?php
session_start(); // Start the session

$db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
if (!$db) {
    echo json_encode(array("status" => "Error", "message" => "Database Connection Failed"));
    exit; // Terminate the script
}

$username = $_POST["email"];
$password = $_POST["password"];

$stmt = $db->prepare("SELECT * FROM user WHERE email = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // User login successful
        // Store user data in session variables
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];

        mysqli_close($db);
        header('Location: home.html'); // Redirect to the user webpage
        exit;
    }
}

// Check if the user exists in the "admin" table
$stmt = $db->prepare("SELECT * FROM admin WHERE adminemail = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['adminpassword'])) {
        // Admin login successful
        // Store admin data in session variables if needed
        mysqli_close($db);
        header('Location: statistics.php'); // Redirect to the admin webpage
        exit;
    }
}

// If login fails, show an error message
echo json_encode(array("status" => "Error", "message" => "Invalid Credentials"));
header('Location: index.html');
mysqli_close($db);
?>
