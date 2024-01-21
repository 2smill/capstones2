<?php
$db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
if (!$db) {
    echo "Database Connection Failed";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = mysqli_real_escape_string($db, $_POST['id']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($db, $_POST['confirmpassword']);

    $updateQuery = "UPDATE user SET username = '$username', email = '$email', contact = '$contact', birthdate = '$birthdate' WHERE id = $id";
    $result = mysqli_query($db, $updateQuery);

    if ($result) {
        echo "User information updated successfully.";
        header('Location: statistics.php');
    } else {
        echo "Error updating user information.";
    }

} else {
    echo "Invalid request.";
}

mysqli_close($db);
?>
