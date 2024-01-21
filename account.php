<?php
function displayCredentials() {
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
        return;
    }

    $query = "SELECT id, username, email, contact, birthdate FROM user";
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error fetching data from the database";
        return;
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>"; // Display the ID
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["contact"] . "</td>";
        echo "<td>" . $row["birthdate"] . "</td>";
        echo '<td>';
        echo '<div class="d-flex align-items-center">';
        echo '<a href="edit_user.php?id=' . $row["id"] . '" class="btn btn-success btn-sm btn-icon-text mr-3">Edit</a>';
        echo '<a href="delete_user.php?id=' . $row["id"] . '" class="btn btn-danger btn-sm btn-icon-text">Delete</a>';
        echo '</div>';
        echo '</td>';
        echo "</tr>";
    }

    mysqli_close($db);
}

// Call the function to display credentials in your HTML table
displayCredentials();
?>


