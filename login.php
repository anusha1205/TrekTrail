<?php
$login = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';
    $name = $_POST["name"];
    $password = $_POST["password"];


    $sql = "Select * from user where name='$name' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $name;
        header("location: index.php");

    } else {
        $showError = "Invalid Credentials";
    }
}

?>

<!doctype html>
<html lang="en">
    <head>
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
        font-family: 'Poppins', sans-serif;
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
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@500&family=Raleway:wght@472&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<style>
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
    if ($login) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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

    
    <div class="container my-4" style="width: 30%;">
        <h1 class="text-center">Login to our website</h1>
        <form action="/syrus/login.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">

            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>


            <button type="submit" style="background:rgb(8,61,77);" class="btn btn-primary">Login</button>
            <p style="margin-top:5%;">Don't Have an account? <a href="/syrus/signup.php">Visit TrekTrail Registeration</a></p>
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