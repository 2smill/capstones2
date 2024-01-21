<?php
function displayAdminInfoForEditing($adminId) {
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
        return;
    }

    $query = "SELECT * FROM admin WHERE id = $adminId";
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error fetching data from the database";
        return;
    }

    $adminInfo = mysqli_fetch_assoc($result);

    // Display the admin information in an HTML form for editing
    echo '<form method="post" action="update_admin.php">';
    echo '<input type="hidden" name="admin_id" value="' . $adminInfo['id'] . '">';
    echo 'Username: <input type="text" name="adminusername" value="' . $adminInfo["adminusername"] . '"><br>';
    echo 'Email: <input type="text" name="adminemail" value="' . $adminInfo["adminemail"] . '"><br>';
    echo 'Contact: <input type="text" name="admincontact" value="' . $adminInfo["admincontact"] . '"><br>';
    echo 'Birthdate: <input type="text" name="adminbirthdate" value="' . $adminInfo["adminbirthdate"] . '"><br>';
    echo 'Password: <input type="password" name="password"><br>';
    echo 'Confirm Password: <input type="password" name="confirmpassword"><br>';
    echo '<input type="submit" value="Update">';
    echo '</form>';

    mysqli_close($db);
}

if (isset($_GET['id'])) {
    $adminId = $_GET['id'];
    displayAdminInfoForEditing($adminId); // Call the correct function to display admin info
} else {
    echo "Admin ID not provided in the URL.";
}
?>
