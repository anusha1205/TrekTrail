<?php
// Include the database connection file
include '_dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve form data
        $username = $_POST["username"];

        // Use the ternary operator to assign the value of $_POST['email'] to $email if it exists, otherwise assign an empty string
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        // Use the ternary operator to assign the value of $_POST['message'] to $message if it exists, otherwise assign an empty string
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        // Insert feedback into the database
        $sql = "INSERT INTO feedback (username, email, message) VALUES ('$username', '$email', '$message')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">Feedback submitted successfully!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error submitting feedback: ' . mysqli_error($conn) . '</div>';
        }
    }
}

$sql = "SELECT * FROM feedback";
$result = mysqli_query($conn, $sql);
?>

<!-- Display feedback -->
<div class="container my-4">
    <h1 class="text-center">Feedback</h1>
    <?php
    // Check if there is any feedback
    if (mysqli_num_rows($result) > 0) {
        // Loop through each row of feedback
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card my-2">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["username"] . '</h5>';
            echo '<h6 class="card-subtitle mb-2 text-muted">' . $row["Email"] . '</h6>';
            echo '<p class="card-text">' . $row["Message"] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No feedback yet.</p>';
    }
    ?>
</div>
<style>
    /* Style for the container */
.container {
    width: 80%;
    margin: auto;
}

/* Style for the feedback cards */
.card {
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
}

/* Style for the feedback form */
.form-group {
    margin-bottom: 20px;
}

/* Style for the submit button */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

/* Style for the alerts */
.alert {
    margin-bottom: 20px;
}

/* Center-align text */
.text-center {
    text-align: center;
}

</style>
<!-- Feedback form -->
<div class="container my-4" >
    <h1 class="text-center">Add Feedback</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Feedback</button>
    </form>
</div>
