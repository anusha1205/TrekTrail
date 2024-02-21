<?php
// Include the database connection file
include '_dbconnect.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Check if the form is submitted
//     if (isset($_POST['submit'])) {
//         // Retrieve form data
//         $username = $_POST["username"];

//         // Use the ternary operator to assign the value of $_POST['email'] to $email if it exists, otherwise assign an empty string
//         $email = isset($_POST['email']) ? $_POST['email'] : '';

//         // Use the ternary operator to assign the value of $_POST['message'] to $message if it exists, otherwise assign an empty string
//         $message = isset($_POST['message']) ? $_POST['message'] : '';

//         // Insert feedback into the database
//         $sql = "INSERT INTO feedback (username, email, message) VALUES ('$username', '$email', '$message')";
//         $result = mysqli_query($conn, $sql);
//         if ($result) {
//             echo '<div class="alert alert-success" role="alert">Feedback submitted successfully!</div>';
//         } else {
//             echo '<div class="alert alert-danger" role="alert">Error submitting feedback: ' . mysqli_error($conn) . '</div>';
//         }
//     }
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if any form field is set
    if (!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["message"])) {
        // Retrieve form data
        $username = $_POST["username"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Insert feedback into the database
        $sql = "INSERT INTO feedback (username, email, message) VALUES ('$username', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">Feedback submitted successfully!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error submitting feedback: ' . mysqli_error($conn) . '</div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">Please fill in all fields.</div>';
    }
}





$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
?>

<head>
<title>Feedback</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/feedback.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<style>
    body{
        background-color: rgb(79, 160, 163);
    }
</style>
<nav>


    <ul class="navbar">
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
    </ul>
</nav>
<!-- Display feedback -->
<div class="container my-4" >
    <h1 class="text-center" >Feedback</h1>
    <h2 class="text-center">Want to add Your Feedback <a href="#add-feedback">Please follow link</a></h2>
    <?php
    // Check if there is any feedback
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row of feedback
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card my-2">';
            echo '<div class="card-body">';
            echo '<h2 class="card-title">' . $row["username"] . '</h2>';
            echo '<h3 class="card-subtitle mb-2 text-muted">' . $row["Email"] . '</h3>';
            echo '<p class="card-text">' . $row["Message"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No feedback yet.</p>';
    }
    ?>
</div>

<!-- Feedback form -->

<div class="container my-4" id="add-feedback">
    <h3>Haven't registered yet @<a href="/syrus/index.php">TrekTrail?</a>Dont wait just <a style="text-decoration: underline;"
            href="/syrus/signup.php">Click here to Register</a></h3>
    <h1 style="font-size: 1.2rem;" class="text-center">Add a Feedback</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter the username" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email"  id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit Feedback</button>

    </form>
</div>