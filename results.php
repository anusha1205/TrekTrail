<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/results.css">
    <link rel="stylesheet" href="style.css">
    <title>Travel Itinerary</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/results.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Include any CSS stylesheets here -->
    <style>

    </style>
</head>

<body>
    <nav>
        <div class="navbar" style="display:flex;justify-content:space-around;">
            <li>
                <a href="/syrus/index.php">Home</a>
                <a href="/syrus/community.php">Community Forum</a>
                <a href="/syrus/feedback.php">Feedback</a>
                <a href="api.html">Get Weather</a>
                <a href="/syrus/contact.php">Contact Us</a>
            </li>
            <li>
                <a href="/syrus/results.php">Itinerary Cart</a>
                <a href="/syrus/signup.php">Register Now</a>
                <a href="/syrus/login.php">Login</a>
            </li>
        </div>
    </nav>
    <h1>Places To Visit</h1>
    <div class="container">
        <div class="sidebar">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                <label for="destination_name">Destination:</label>
                <input type="text" id="destination_name" name="destination_name" required>

                <label for="attraction_type">Attraction Type:</label>
                <select id="attraction_type" name="attraction_type">
                    <option value="">Select</option>
                    <option value="Museums">Museums</option>
                    <option value="Historical Sites">Historical Sites</option>
                    <option value="Parks">Parks</option>
                    <option value="Beaches">Beaches</option>
                    <option value="Shopping Centre">Shopping Center</option>
                </select>

                <button type="submit" class="Searchplace">Search</button>
            </form>
            <a style="font-size: 0.8rem;border:solid black;border-width:1px" href="./view_itinerary.php" class="button">View Your Itinerary</a>
        </div>

        <div class="content">
            <?php
            // Include your database connection file
            include '_dbconnect.php';

            if (isset($_GET['destination_name']) && isset($_GET['attraction_type'])) {
                // Fetch search parameters from the form submission
                $destination_name = $_GET['destination_name']; // Adjusted to match the form input name
                $attraction_type = $_GET['attraction_type'];

                // Sanitize and validate user input to prevent SQL injection and other security issues
                $destination_name = mysqli_real_escape_string($conn, $destination_name);
                $attraction_type = mysqli_real_escape_string($conn, $attraction_type);

                // Perform database query to fetch search results based on the user's input
                $query = "SELECT * FROM places_to_visit 
                        WHERE destination_id IN (SELECT destination_id FROM destinations WHERE destination_name = '$destination_name') 
                        AND attraction_id IN (SELECT attraction_id FROM attractions WHERE attraction_type = '$attraction_type')";
                $result = mysqli_query($conn, $query);

                // Check if there are any errors in the query execution
                if (!$result) {
                    // Display the SQL error message
                    echo "Error: " . mysqli_error($conn);
                }

                // Check if the query was successful
                if ($result) {
                    // Fetch and display search results
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="result">';
                        echo '<h2>' . $row['place_name'] . '</h2>';
                        echo '<p><strong>Location:</strong> ' . $destination_name . '</p>'; // You can fetch the location from the database if needed
                        echo '<p><strong>Description:</strong> ' . $row['place_keyword'] . '</p>'; // Adjust as needed
            
                        // Add a button to add the place to the itinerary
                        echo '<form method="POST" action="add_to_itinerary.php">';
                        echo '<input type="hidden" name="place_id" value="' . $row['place_id'] . '">';
                        echo '<button type="submit" name="add_to_itinerary">Add to My Plan</button>';
                        echo '</form>';

                        echo '</div>';
                    }
                } else {
                    // If the query fails, display an error message
                    echo '<p>No results found.</p>';
                }

                // Close the database connection
                mysqli_close($conn);
            }
            ?>
        </div>
    </div>

    <!-- Include any JavaScript files here -->
    <script>
        // You can include JavaScript for interactivity or AJAX requests here
    </script>
</body>

</html>