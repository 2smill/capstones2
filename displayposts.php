<?php
function displayPostsInTable() {
    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
        return;
    }

    $query = "SELECT id, title, companyname, datetime, requirements FROM posts";
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error fetching data from the database";
        return;
    }

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["title"] . "</td>";
        echo "<td>" . $row["companyname"] . "</td>";
        echo "<td>" . $row["datetime"] . "</td>";
        echo "<td>" . $row["requirements"] . "</td>";
        echo '<td>';
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="delete_id" value="' . $row["id"] . '">';
        echo '<button type="submit" name="delete" class="btn btn-danger btn-sm btn-icon-text">Delete</button>';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
    }

    echo '</table>';

    mysqli_close($db);
}

displayPostsInTable();

if (isset($_POST['delete'])) {
    $deleteId = $_POST['delete_id'];

    $db = mysqli_connect('localhost', 'root', '', 'bugallondashboard');
    if (!$db) {
        echo "Database Connection Failed";
    } else {
        $deleteQuery = "DELETE FROM posts WHERE id = ?";
        $stmt = $db->prepare($deleteQuery);
        $stmt->bind_param("i", $deleteId);

        if ($stmt->execute()) {
            echo "Deleted";
        } else {
            echo "Failed to delete the post.";
        }

        mysqli_close($db);
    }
}
?>



