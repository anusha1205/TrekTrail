<?php
// Include your database connection file
include '_dbconnect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $conntent = mysqli_real_escape_string($conn, $_POST['content']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);

    // Insert guidepost into database
    $query = "INSERT INTO guideposts (title, content, author, location) 
              VALUES ('$title', '$content', '$author', '$location')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Guidepost inserted successfully
        // Redirect to a success page or display a success message
        header("Location: guidepost_added_success.php");
        exit();
    } else {
        // Error inserting guidepost
        // You can handle the error accordingly, such as displaying an error message
        echo "Error: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>