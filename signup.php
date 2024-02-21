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
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<style>
    body {
        font-family: 'Raleway', sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 400px;
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

    nav {
        height: 60px;
        width: 100%;
        list-style: none;
        background-color: rgb(8, 61, 77);
        box-shadow: 5px 5px 30px rgba(0, 0, 0, 15%);
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    nav .logo {
        width: 60px;
        margin: 2vh;
        margin-left: 8%;
    }

    nav ul li {
        list-style: none;
        display: inline-block;
        margin-left: 40px;
    }

    .navbar {
        display: flex;
        margin-right: 4vh;
    }

    .navbar a {
        color: white;
        font-size: 18px;
        padding: 10px 22px;
        border-radius: 4px;
        font-weight: 500;
        text-decoration: none;
        transition: ease 0.40s;
    }

    .navbar a:hover,
    .navbar a.active {
        background: white;
        color: black;
        box-shadow: 5px 10px 30px rgb(85 85 85 / 20%);
        border-radius: 5px;

    }

    nav ul li a {
        text-decoration: none;
        color: rgb(255, 255, 255);
        font-size: 17px;
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


    <!-- INDEX.HTML IN THIS SIGNUP PAGE -->
    
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
                <a href="/syrus/results.php">Itinerary cart</a>
                <a href="/syrus/signup.php">Register Now</a>
                <a href="/syrus/login.php">Login</a>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top:1%;">
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
            <input  placeholder="Please enter the same password as above" type="password" class="form-control" id="cpassword" name="cpassword">

            <p>Already Have an account? <a href="/syrus/login.php">Visit TrekTrail To Explore our
                    website</a></p>
            <a href="/syrus/login.php"><input style="background:rgb(8,61,77);" type="submit" value="Register"></a>

        </form>
    </div>
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