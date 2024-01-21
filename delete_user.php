<?php
function deleteUser($id) {
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
        return;
    }

    $id = mysqli_real_escape_string($db, $id);

    $query = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($db, $query);

    if ($result) {
        echo "User with ID $id has been deleted.";
        header('Location: statistics.php');

    } else {
        echo "Error deleting user.";
    }

    mysqli_close($db);
}

// Check if an 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteUser($id);
} else {
    echo "User ID not provided in the URL.";
}
?>
