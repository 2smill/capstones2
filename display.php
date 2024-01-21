<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bugallondashboard";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];

    // Perform the deletion
    $sql = "DELETE FROM resume WHERE id = $delete_id";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch data from the database
$sql = "SELECT id, name, job, email, resume FROM resume";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["job"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo '<td><a href="' . $row["resume"] . '" target="_blank">View</a></td>';
        echo '<td><a href="' . $row["resume"] . '" download>Download</a></td>';
        echo '<td>';
        echo '<form method="post" action="">';
        echo '<input type="hidden" name="delete_id" value="' . $row["id"] . '">';
        echo '<button type="submit" class="btn btn-danger btn-sm btn-icon-text">Delete</button>';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
    }
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
