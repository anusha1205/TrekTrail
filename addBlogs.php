<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="./css/addblog.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   
</head>

<body>
    <style>
    
        /* Add additional CSS styles as needed */
    </style>
    <div class="banner">
        <video src="images/bgvid.mp4" type="video/mp4" autoplay muted loop></video>

        <div class="content" id="home"> 
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
            <div class="title">
                <h1>Add Your Travel Blog</h1>
                <p>Share your travel experiences with the world!</p>
                
                <style>
                    .title p {
                        margin-bottom: 20px; /* Adjust the margin-bottom as per your requirement */
                    }
                </style>
            </div>
        </div>
    </div>
    
    <!-- Writing area -->
    <textarea class="writing-area" placeholder="Write your blog!"></textarea>

    <!-- Upload and submit section -->
    <div class="upload-submit">
        <!--<input type="file" id="imageUpload" accept="image/*">-->
        <button id="submitBlog">Submit Blog</button>
    </div>


</body>
</html>
