<?php

include '_dbconnect.php';

// Fetch search parameters from the form submission
$destination_name = $_GET['destination_name']; // Adjusted to match the form input name
$attraction_type = $_GET['attraction_type']; 

// Sanitize and validate user input to prevent SQL injection and other security issues
$destination_name = mysqli_real_escape_string($con, $destination_name);
$attraction_type = mysqli_real_escape_string($con, $attraction_type);

// Perform database query to fetch search results based on the user's input
$query = "SELECT * FROM places_to_visit 
          WHERE destination_id IN (SELECT destination_id FROM destinations WHERE destination_name = '$destination_name') 
          AND attraction_id IN (SELECT attraction_id FROM attractions WHERE attraction_type = '$attraction_type')";
// Debugging output to display the SQL query
// Debugging output to check the value of the "attraction_type" parameter

$result = mysqli_query($con, $query);

// Check if there are any errors in the query execution
if (!$result) {
    // Display the SQL error message
    echo "Error: " . mysqli_error($con);
}

// Check if the query was successful
if ($result) {
    // Fetch and display search results
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div>';
        echo '<h2>' . $row['place_name'] . '</h2>';
        echo '<p><strong>Location:</strong> ' . $destination_name . '</p>'; // You can fetch the location from the database if needed
        echo '<p><strong>Description:</strong> ' . $row['place_keyword'] . '</p>'; // Adjust as needed
        echo '</div>';
    }
} else {
    // If the query fails, display an error message
    echo '<p>No results found.</p>';
}

// Close the database connection
mysqli_close($con);
?>