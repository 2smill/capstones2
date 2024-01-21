<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ensure that you have a proper database connection setup here
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');

    if (!$db) {
        echo json_encode(array("status" => "Error", "message" => "Database Connection Failed"));
        exit; // Terminate the script
    }

    // Get user input from the form
    $email = $_POST["email"];
    $newPassword = $_POST["new_password"];
    $confirmNewPassword = $_POST["confirm_new_password"];

    // Basic input validation
    if (empty($email) || empty($newPassword) || empty($confirmNewPassword)) {
        echo json_encode(array("status" => "Error", "message" => "All fields are required."));
        mysqli_close($db);
        exit;
    }

    if ($newPassword !== $confirmNewPassword) {
        echo json_encode(array("status" => "Error", "message" => "New passwords do not match."));
        mysqli_close($db);
        exit;
    }

    // Generate a reset token (you can use a more secure method)
    $resetToken = bin2hex(random_bytes(16));


     $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
     $stmt = $db->prepare("UPDATE user SET password = ?, reset_token = NULL WHERE email = ?");
     $stmt->bind_param("ss", $hashedPassword, $email);
     $stmt->execute();


    $to = $email;
    $subject = "Password Reset Confirmation";
    $message = "Your password has been reset successfully. If you did not request this change, please contact us immediately.";
    $headers = "From: josetorresbugallon2416@example.com";

     mail($to, $subject, $message, $headers);

    // Here, for demonstration, we just display a success message
    echo json_encode(array("status" => "Success", "message" => "Password has been reset successfully."));
    
    // Close the database connection
    mysqli_close($db);
    exit;
}
?>
