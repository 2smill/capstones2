<?php
$db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
if (!$db) {
    echo json_encode(array("status" => "Error", "message" => "Database Connection Failed"));
    exit; // Terminate the script
}

$title = $_POST["title"];
$companyname = $_POST["companyname"];
$date = $_POST["datetime"];
$content = $_POST["content"];
$requirements = $_POST["requirements"];


if (empty($title) || empty($companyname) || empty($date) || empty($content) || empty($requirements)) {
    echo json_encode(array("status" => "Error", "message" => "All fields are required"));
    exit;
}

$stmt = $db->prepare("INSERT INTO posts (title, companyname, datetime, content, requirements) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $title, $companyname, $date, $content, $requirements);

$response = array();

if ($stmt->execute()) {
    $response['status'] = 'Success';
    header('Location: post.php');
} else {
    $response['status'] = 'Error';
    $response['message'] = 'Failed to create and save the post.';
}

echo json_encode($response);

mysqli_close($db);
?>
