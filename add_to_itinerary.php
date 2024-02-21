<?php
// Include your database connection file
include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_itinerary'])) {
    // Retrieve the place_id from the form submission
    $place_id = $_POST['place_id'];

    // Fetch the destination_name and attraction_type based on the place_id
    $query = "SELECT destinations.destination_name, attractions.attraction_type 
              FROM places_to_visit 
              INNER JOIN destinations ON places_to_visit.destination_id = destinations.destination_id 
              INNER JOIN attractions ON places_to_visit.attraction_id = attractions.attraction_id 
              WHERE places_to_visit.place_id = '$place_id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Fetch the destination_name and attraction_type
        $row = mysqli_fetch_assoc($result);
        $destination_name = $row['destination_name'];
        $attraction_type = $row['attraction_type'];

        // Insert the destination and attraction into the itinerary_plan table
        $insert_query = "INSERT INTO itinerary_plan (destination_name, attraction_type) 
                         VALUES ('$destination_name', '$attraction_type')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            // Redirect to a success page or display a success message
            header("Location: itinerary_added_success.php");
            exit();
        } else {
            // Handle insertion error
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Handle no results found error
        echo "No results found for the specified place_id.";
    }
} else {
    // Handle invalid request method or missing add_to_itinerary parameter
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>