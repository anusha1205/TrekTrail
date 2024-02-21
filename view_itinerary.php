<?php
// Include your database connection file
include '_dbconnect.php';

// Query to fetch the itinerary data
$query = "SELECT * FROM itinerary_plan";
$result = mysqli_query($conn, $query);

// Check if there are any places in the itinerary
if (mysqli_num_rows($result) > 0) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View Itinerary</title>
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="./css/feedback.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <!-- Include any CSS stylesheets here -->
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f4f4f4;
                color: #333;
            }

            h1 {
                text-align: center;
                margin-bottom: 20px;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            th,
            td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>

    <body>
    <nav>


<ul class="navbar">
    <li>
        <a href="/syrus/index.php">Home</a>
        <a href="/syrus/community.php">Community Forum</a>
        <a href="/syrus/feedback.php">Feedback</a>
        <a href="api.html">Get Weather</a>
        <a href="./about.html">Contact Us</a>
    </li>
    <li>
        <a href="/syrus/itinerary.php">Itinerary Cart</a>
        <a href="/syrus/signup.php">Register Now</a>
        <a href="/syrus/login.php">Login</a>
    </li>

</ul>
</nav>
        <h1>Your Itinerary</h1>
        <table>
            <thead>
                <tr>
                    <th>Destination</th>
                    <th>Attraction Type</th>
                    <th>Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through each row of the result set
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['destination_name'] . "</td>";
                    echo "<td>" . $row['attraction_type'] . "</td>";
                    echo "<td>" . $row['date_added'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>

    </html>
    <?php
} else {
    // If no places are found in the itinerary
    echo "<p>No places found in the itinerary.</p>";
}

// Close the database connection
mysqli_close($conn);
?>