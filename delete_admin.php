<?php
function deleteAdminUser($adminId) {
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
        return;
    }

    $query = "DELETE FROM admin WHERE id = $adminId";
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error deleting the admin user";
    } else {
        echo "Admin user deleted successfully";
        header('Location: statistics.php');
    }

    mysqli_close($db);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteAdminUser($id);
} else {
    echo "User ID not provided in the URL.";
}
?>


