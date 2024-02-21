<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Itinerary</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- Include any CSS stylesheets here -->
    <style>
        /* CSS styles for the search form */
        /* Add your styles here */
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
                <a href="/syrus/results.php">Itinerary Cart</a>
                <a href="/syrus/signup.php">Register Now</a>
                <a href="/syrus/login.php">Login</a>
            </li>
        </ul>
    </nav>
    <h1>Travel Itinerary Planner</h1>
    <form action="/syrus/results.php" method="GET" style="margin-top:3%;">
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

        <button type="submit">Search</button>
    </form>

    <div id="search-results">
        <!-- Search results will be displayed here using JavaScript or PHP -->
    </div>

    <!-- Include any JavaScript files here -->
    <script>
        // You can include JavaScript for interactivity or AJAX requests here
    </script>
</body>

</html>