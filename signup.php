<?php
$showAlert = false;
$showError = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    // Check if the keys are set in $_POST before accessing them
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $username = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $cpassword = isset($_POST["cpassword"]) ? $_POST["cpassword"] : "";

    $sql = "INSERT INTO `user` (`name`,`username`, `email`, `password`, `cpassword`) VALUES ('$name', '$username', '$email',  '$password' , '$cpassword')";
    $exists = false;
    if (($password == $cpassword) && $exists == false) {
        // Fix the SQL query by properly closing the VALUES parentheses

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $showAlert = true;
        } else {
            // Display an error message if the query fails
            $showError = "Error: " . mysqli_error($conn);
        }
    } else {
        $showError = "Passwords do not match";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .container {
        /* width: 400px; */
        margin: 50px auto;

        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #4caf50;
        color: #fff;
        padding: 10px;
        margin: 15px 0 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Reset default browser styles */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', serif;
    }

    /* Global styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;

    }


    /* Header styles */
    header {

        color: #fff;
        padding: 15px 0;
        /* Increase the padding to increase the size of the navbar */
        background-color: #333;
        position: fixed;
        /* Keep the navbar fixed at the top */
        width: 100%;
        /* Full width */
        z-index: 1000;
        /* Ensure the navbar stays on top of other elements */
        align-items: center;
    }





    header nav ul {
        float: right;
        list-style: none;
    }

    header nav ul li {

        margin-left: 20px;
        display: inline-block;

    }

    header nav ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        transition: color 0.3s ease;
        /* Smooth color transition */
    }

    nav ul li a:hover {
        color: #4CAF50;
        /* Change color on hover */
    }


    .search-bar {
        margin-left: 20px;
        float: left;
        position: relative;
        /* Position relative for the search input */
    }


    .search-bar input[type="text"] {
        padding: 12px;
        /* Increase padding to increase the size of the search bar */
        border: none;
        border-radius: 5px;
        width: 250px;
        /* Increase width of search bar */
        transition: width 0.4s ease;
        /* Smooth width transition */
        background-color: #f2f2f2;
        /* Light background color */
    }

    .search-bar input[type="text"]:focus {
        width: 350px;
        /* Expand on focus */
    }


    .search-bar button {
        padding: 12px 20px;
        /* Increase padding to match the search bar */
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Smooth background color transition */
    }

    .search-bar button:hover {
        background-color: #45a049;
        /* Darker background color on hover */
    }

    /* Hero section styles */
    /* Hero section styles */
    .hero {
        background-image: url('bg5.jpg');
        /* Add your background image path */

        background-size: cover;
        /* Cover the entire container */
        background-position: center;
        /* Center the background image */
        color: #030000;
        padding: 100px 0;
        text-align: center;

    }

    .hero img {
        opacity: 0.8;
        /* Adjust the opacity value as needed */
    }


    .hero h1 {
        font-size: 36px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .cta-buttons .btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ffffff;
        color: #000000;
        text-decoration: none;
        border-radius: 5px;
        margin-right: 20px;
    }



    .features h2 {
        display: flex;
        /* Use flexbox */
        justify-content: center;
        /* Align items horizontally in the center */
        align-items: center;
        font-size: 28px;
        margin-bottom: 30px;
    }

    .features {
        background-color: #f7f7f7;
        /* Example background color */
        padding: 50px 0;
        /* Example padding */
    }

    .container {
        /* max-width: 1200px; */
        margin: 0 auto;
        padding: 0 15px;
        display: flex;
    }

    .feature-items {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        /* Allows items to wrap if container width is not enough */
    }

    .feature-item {
        background-color: #3498db;
        /* Example background color */
        color: #fff;
        padding: 20px;
        border-radius: 5px;
        flex-basis: calc(25% - 20px);
        /* Adjust width and margin between items */
        margin-bottom: 20px;
        /* Example margin between items */
        text-align: center;
        box-sizing: border-box;
    }

    .feature-item p {
        margin: 0;
        line-height: 1.5;
    }

    .key-features {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    .key-features li {
        margin: 10px;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border-radius: 5px;
        text-align: center;
    }

    /* Explore destinations section styles */


    .explore-destinations {
        /* padding: 80px 0; */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        flex-wrap: nowrap;
        /* Prevent cards from wrapping */
        overflow-x: auto;
        /* Allow horizontal scrolling if needed */
        text-align: center;
        /* min-height: 100vh; */
        flex-direction: column;
    }



    .explore-destinations h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .destination-card {
        width: 300px;
        /* Adjust the width of each card as needed */
        margin: 0 10px;
        /* Adjust the margins between cards */
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }


    .destination-card img {
        width: 100%;
        height: auto;
    }

    .destination-card .destination-info {
        padding: 15px;
    }

    .destination-card h3 {
        font-size: 20px;
        /* Adjust the font size of the destination name */
        margin-bottom: 10px;
    }


    .destination-card p {
        font-size: 14px;
        margin-bottom: 10px;
    }


    .destination-card .explore-btn {
        display: inline-block;
        padding: 8px 16px;
        font-size: 14px;
        background-color: #4CAF50;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
    }


    /* Community insights section styles */
    .community-insights {
        background-color: #f7f7f7;
        /* Example background color */
        padding: 50px 0;
        /* Example padding */
    }

    .community-insights h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .testimonials {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        margin-top: 30px;
        /* Adjust margin as needed */
    }

    .testimonial {
        background-color: #fff;
        /* Example background color */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        flex-basis: calc(48% - 20px);
        /* Adjust width and margin between items */
        margin-bottom: 20px;
        /* Adjust margin between items */
        position: relative;
    }

    .testimonial-content {
        margin-bottom: 20px;
    }

    .testimonial p {
        margin: 0;
    }

    .testimonial-image {
        position: absolute;
        bottom: 10px;
        right: 10px;
        width: 80px;
        /* Adjust size of the circle */
        height: 80px;
        background-color: #3498db;
        /* Example background color */
        border-radius: 50%;
        /* Make it circular */
    }



    /* Footer styles */
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    .footer-links a {
        color: #fff;
        text-decoration: none;
        margin-right: 20px;
    }

    .social-media a {
        margin-right: 10px;
    }

    .social-media img {
        width: 30px;
        height: 30px;
    }
</style>

<body>

    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> ' . $showError . '
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>


    <header>
        <div class="container" style="color:black;">
            <div class="logo"></div>
            <nav>
                <ul>
                    <li><a href="/login.php">Home</a></li>
                    <li><a href="#">Trips</a></li>
                    <li><a href="#">Create Itinerary</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Register Now</a></li>
                </ul>
            </nav>
            <div class="search-bar">
                <input type="text" placeholder="Search destinations or itineraries">
                <button type="submit">Search</button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container" style="display:flex;flex-direction:column;background:transparent;">
            <h1>Welcome to <b>TrekTrail: Your Pathfinder</b></h1>
            </p>
            <div class="cta-buttons">
                <a href="#" class="btn">Create Itinerary</a>
                <a href="#" class="btn">Explore Destinations</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <h2>Key Features</h2>
    <section class="features">

        <div class="container">
            <div class="feature-items">
                <div class="feature-item">
                    <p>Seamless itinerary-building experience</p>
                </div>
                <div class="feature-item">
                    <p>Access diverse attractions, eateries, and activities for your ideal trip.
                    </p>
                </div>
                <div class="feature-item">
                    <p>Community-driven platform</p>
                </div>
                <div class="feature-item">
                    <p>Contribution of travel experiences by users</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Explore Destinations Section -->
    <section class="explore-destinations">
        <h2>Explore Destinations</h2>
        <div class="container">

            <!-- Grid or list of popular destinations -->
            <div class="destination-card">
                <img src="DEST1.jpg" alt="Destination 1">
                <div class="destination-info">
                    <h3>PARIS</h3>
                    <p>Paris, the enchanting city of lights, captivates travelers with its timeless elegance, iconic
                        landmarks, and unparalleled artistry around every cobblestoned corner.
                    </p>
                    <a href="#" class="explore-btn">Explore</a>
                </div>
            </div>
            <!-- Additional destination cards -->
            <div class="destination-card">
                <img src="DEST3.jpg" alt="Destination 2">
                <div class="destination-info">
                    <h3>Greece</h3>
                    <p>Brief description of the destination</p>
                    <a href="#" class="explore-btn">Explore</a>
                </div>
            </div>
            <div class="destination-card">
                <img src="destination3.jpg" alt="Destination 3">
                <div class="destination-info">
                    <h3>Destination Name</h3>
                    <p>Brief description of the destination</p>
                    <a href="#" class="explore-btn">Explore</a>
                </div>
            </div>

            <!-- Repeat the above card structure for each destination -->
        </div>
    </section>

    <!-- Community Insights Section -->
    <section class="community-insights">
        <div class="container">
            <h2>Community Insights</h2>
            <div class="testimonials">
                <div class="testimonial">
                    <div class="testimonial-content">
                        <blockquote>
                            "Amazing and helpful website."
                        </blockquote>
                        <p>- John Doe</p>
                    </div>
                    <div class="testimonial-image">
                        <!-- Small circle for the picture of the reviewer -->
                    </div>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
            <p>Share your travel experiences with us!</p>
        </div>
    </section>


    <!-- Footer -->



    <div class="container">
        <h2>Registration Form</h2>
        <form action="/syrus/signup.php" method="post">
            <label for="name">Name</label>
            <input placeholder="Enter Your name" type="text" id="name" name="name" required>

            <label for="username">Username</label>
            <input placeholder="Enter a username" type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input placeholder="Enter Your email" type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input placeholder="Enter a password" type="password" id="password" name="password" required>

            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">

            <p>Already Have an account? <a href="/syrus/login.php">Visit TrekTrail To Explore our
                    website</a></p>
            <a href="/syrus/login.php"><input type="submit" value="Register"></a>

        </form>
    </div>

    <footer>
        <div class="container">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Contact Us</a>
            </div>
            <div class="social-media">
                <!-- Add social media icons and links here -->
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
            <p>&copy; 2024 XYZ. All rights reserved.</p>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
