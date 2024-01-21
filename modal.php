<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $job = $_POST["job"];
    $pdfFileName = $_FILES["resume"]["name"];
    $pdfTempName = $_FILES["resume"]["tmp_name"];
    $uploadDir = "uploads/";


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

        // Insert file information into the database
        $sql = "INSERT INTO resume (name, job, email, resume) VALUES ('$name', '$job', '$email', '$uploadDir$pdfFileName')";

        if ($conn->query($sql) === TRUE) {
            echo "Record added to the database.";
            header('Location: Job.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } 

?>

