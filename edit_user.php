<?php
function editUser($id) {
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
        return;
    }

    $id = mysqli_real_escape_string($db, $id);

    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error fetching user data from the database";
        return;
    }

    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "User not found";
        return;
    }

    
    // Display an HTML form to edit the user's information
    echo '<form method="post" action="update.php">';
    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
    echo 'Username: <input type="text" name="username" value="' . $row["username"] . '"><br>';
    echo 'Email: <input type="text" name="email" value="' . $row["email"] . '"><br>';
    echo 'Contact: <input type="text" name="contact" value="' . $row["contact"] . '"><br>';
    echo 'Birthdate: <input type="text" name="birthdate" value="' . $row["birthdate"] . '"><br>';
    echo 'Password: <input type="password" name="password"><br>';
    echo 'Confirm Password: <input type="password" name="confirmpassword"><br>';
    echo '<input type="submit" value="Save Changes">';
    echo '</form>';

    mysqli_close($db);
}

// Check if an 'id' parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    editUser($id);
} else {
    echo "User ID not provided in the URL.";
}
?>
