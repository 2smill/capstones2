<?php
// Function to get the total number of user accounts
function getUserCount($db) {
    $query = "SELECT COUNT(*) as count FROM user";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    return $row['count'];
}

// Function to get the total number of job offers
function getJobCount($db) {
    $query = "SELECT COUNT(*) as count FROM posts";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    return $row['count'];
}

// Function to get the total number of received applicants
function getApplicantCount($db) {
    $query = "SELECT COUNT(*) as count FROM resume";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
    return $row['count'];
}

// Database connection
$db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
if (!$db) {
    echo json_encode(array("status" => "Error", "message" => "Database Connection Failed"));
    exit; // Terminate the script
}

// Get the counts
$userCount = getUserCount($db);
$jobCount = getJobCount($db);
$applicantCount = getApplicantCount($db);

mysqli_close($db);

// Include the HTML template file
include 'Admins.php';
?>
