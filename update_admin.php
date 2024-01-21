<?php
$db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
if (!$db) {
    echo json_encode(array("status" => "Error", "message" => "Database Connection Failed"));
    exit; // Terminate the script
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $adminId = $_POST["admin_id"];
    $newAdminUsername = $_POST["adminusername"];
    $newAdminEmail = $_POST["adminemail"];
    // Add other fields as needed

    // You should perform data validation here if necessary

    // Update the admin information in the database
    $stmt = $db->prepare("UPDATE admin SET adminusername = ?, adminemail = ? WHERE id = ?");
    $stmt->bind_param("ssi", $newAdminUsername, $newAdminEmail, $adminId);

    if ($stmt->execute()) {
        echo json_encode(array("status" => "Success", "message" => "Admin information updated successfully"));
        // Redirect to the admin page or any other appropriate location
        header('Location: statistics.php');
    } else {
        echo json_encode(array("status" => "Error", "message" => "Update failed"));
    }
} else {
    echo json_encode(array("status" => "Error", "message" => "Invalid request"));
}

mysqli_close($db);
?>
