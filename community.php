<?php
// Include your database connection file
include '_dbconnect.php';

// Query to fetch the guideposts data
$query = "SELECT * FROM guideposts";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Forum</title>
    <link rel="icon" href="images/logo.png">

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<style>
    body,
    html {
        height: 100%;
        margin: 0;
        padding: 0;
        background-image: url('paris.jpg');
        background-size: cover;
      
        background-position: center;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        flex-direction: column;
        /* height: 100%; */
        background-color: rgba(255, 255, 255, 0.7);
        /* Adding opacity to make it easier to read */
    }

    .message-container {
        /* flex: 11; */
        overflow-y: auto;
        padding: 10px;
        background-color: rgba(203, 225, 232, 0.7);
        /* Adding opacity to make it easier to read */
    }

    .message {
        background-color: #a8dff7;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
        max-width: 70%;
    }

    .message.user {
        align-self: flex-end;
        background-color: #dcf8c6;
    }

    .message.other {
        align-self: flex-start;
        background-color: rgb(125, 202, 226);
    }

    .input-container {
        display: flex;
        align-items: center;
        padding: 10px;
        background-color: #f5f5f5;
    }

    input[type="text"] {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 20px;
        margin-right: 10px;
    }

    button[type="submit"] {
        padding: 10px 20px;
        background-color: rgb(8, 61, 77);
        color: #fff;
        border: none;
        border-radius: 20px;
        cursor: pointer;
    }
    title p{
        color:#fff;
    }
</style>

<body>
    <div class="banner">
        <video src="images/bgvid.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home">
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

            <div class="title">
                <h1 style="color:white;">WELCOME TO COMMUNITY FORUM</h1>
                <p1>Connect, Share, and Explore: Where Every Journey Begins.</p1>
                <p>Explore the community for each destination. </p>
                <style>
                    .title p {
                        margin-bottom: 20px;
                        color: #fff;
                        /* Adjust the margin-bottom as per your requirement */
                    }
                </style>
                <!-- 
                <form action="/search" method="GET" class="search-form">
                    <input type="text" name="destination" placeholder="Search destination...">
                    <button type="submit" class="search-button">Search</button>
                </form> -->
                <style>
                    .search-form input[type="text"] {
                        width: 300px;
                        /* Adjust the width as per your requirement */
                        height: 30px;
                        /* Adjust the height as per your requirement */
                        font-size: 16px;
                        /* Adjust the font size as per your requirement */
                        padding: 5px;
                        /* Add padding for better spacing */
                    }

                    .search-form .search-button {
                        height: 40px;
                        /* Adjust the height to match the input field */
                        font-size: 16px;
                        /* Adjust the font size as per your requirement */
                        padding: 5px 10px;
                        /* Adjust the padding as per your requirement */
                    }
                </style>
                <style>
                    .search-form {
                        margin-bottom: 20px;
                        /* Adjust the margin-bottom as per your requirement */
                    }
                </style>
                <div class="blog-buttons">
                    <a href="#blog-locations" class="blog-button">View Blogs</a>
                    <a href="/syrus/guidepost.php" class="blog-button">Add a Blog</a>
                </div>
                <style>
                    .button {
                        display: inline-block;
                        margin-top: 5vh;
                        font-size: 25px;
                        padding: 10px 30px;
                        color: rgb(8, 61, 74);
                        /* background-color:rgb(164, 44, 44); */
                        background-color: white;
                        border-radius: 20px;
                        text-decoration: none;
                        transition: ease 0.30s;
                    }

                    .button:hover {
                        transform: scale(1.1);
                        color: white;
                        background-color: rgb(21, 74, 74);
                        /* border: 2px solid rgb(42, 37, 68); */
                        box-shadow: 5px 10px 30px rgba(0, 0, 0, 0.4);
                        padding: 10px 30px;
                    }

                    .blog-buttons {
                        margin-top: 10px;
                        /* Add space between the search bar and buttons */
                    }

                    .blog-button {
                        display: inline-block;
                        padding: 8px 16px;
                        background-color: rgb(8, 61,77);
                        /* Change to your desired button background color */
                        color: #fff;
                        /* Change to your desired button text color */
                        text-decoration: none;
                        border-radius: 8px;
                        margin-right: 10px;
                        /* Add space between buttons */
                    }

                    .blog-button:hover {
                        background-color: #0056b3;
                        /* Change to your desired button hover background color */
                    }
                </style>



            </div>
        </div>
    </div>

    <!-- BLOGS -->

    <!-- <section class="locations" id="locations">
        <div class="package-title">
            <h2>Locations</h2>
        </div>

        <div class="location-content">

            <a href="./locations.html#kashmir" target="_blank">
                <div class="col-content">
                    <img src="images/l1.jpg" alt="">
                    <h5>India</h5>
                    <p>Kashmir</p>
                </div>
            </a>



            <a href="./locations.html#istanbul" target="_blank">
                <div class="col-content">
                    <img src="images/l2.jpg" alt="">
                    <h5>Turkey</h5>
                    <p>Istanbul</p>
                </div>
            </a>

            <a href="./locations.html#paris" target="_blank">
                <div class="col-content">
                    <img src="images/l3.jpg" alt="">
                    <h5>France</h5>
                    <p>Paris</p>
                </div>
            </a>

            <a href="./locations.html#bali" target="_blank">
                <div class="col-content">
                    <img src="images/l4.jpg" alt="">
                    <h5>Indonesia</h5>
                    <p>Bali</p>
                </div>
            </a>

            <a href="./locations.html#dubai" target="_blank">
                <div class="col-content">
                    <img src="images/l5.jpg" alt="">
                    <h5>United Arab Emirates</h5>
                    <p>Dubai</p>
                </div>
            </a>

            <a href="./locations.html#geneva" target="_blank">
                <div class="col-content">
                    <img src="images/l6.jpg" alt="">
                    <h5>Switzerland</h5>
                    <p>Geneva</p>
                </div>
            </a>

            <a href="./locations.html#port-blair" target="_blank">
                <div class="col-content">
                    <img src="images/l7.jpg" alt="">
                    <h5>Andaman & Nicobar</h5>
                    <p>Port Blair</p>
                </div>
            </a>

            <a href="./locations.html#rome" target="_blank">
                <div class="col-content">
                    <img src="images/l8.jpg" alt="">
                    <h5>Italy</h5>
                    <p>Rome</p>
                </div>
            </a>

        </div>
    </section> -->



    <section class="blog-locations" id="blog-locations">


        <?php
        // Check if there are any guideposts
        if (mysqli_num_rows($result) > 0) {
            // Loop through each guidepost and display them
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="guidepost" style="margin:2%;border:solid black;border-width:1px;width:fit-content;padding:2%;border-radius:20px">
                    <h2>
                        <?php echo $row['title']; ?>
                    </h2>
                    <p><strong>Author:</strong>
                        <?php echo $row['author']; ?>
                    </p>
                    <p><strong>Location:</strong>
                        <?php echo $row['location']; ?>
                    </p>
                    <p><strong>Date Posted:</strong>
                        <?php echo $row['post_date']; ?>
                    </p>
                    <p>
                        <?php echo $row['content']; ?>
                    </p>
                </div>
                <?php
            }
        } else {
            // If no guideposts are found
            echo "<p>No guideposts found.</p>";
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
    </section>
    <h1 style="text-align: center; color: rgb(8, 61, 77);">Community Forum Discussion-Paris</h1>
    <div class="container" style="display:flex;align-items:center;justify-content:center;margin-top:0px;"
        id="add-a-blog">
        <div class="message-container" id="message-container" style="border-radius:20px;padding:2% 3%">
            <div class="message other">
                <span class="username">John</span>: Did you know that the Eiffel Tower was originally intended for
                Barcelona, Spain?
            </div>
            <div class="message other">
                <span class="username">Anna</span>: The Louvre Museum in Paris is the world's largest art museum and a
                historic monument in Paris.
            </div>
            <div class="message other">
                <span class="username">David</span>: Paris, often referred to as the "City of Light," is one of the most
                romantic cities in the world.
            </div>
        </div>
        <div class="input-container">
            <input type="text" id="username" placeholder="Your Name">
            <input type="text" id="message" placeholder="Type your message...">
            <button type="submit" onclick="sendMessage()">Send</button>
        </div>
    </div>

    <script>
        function sendMessage() {
            var username = document.getElementById('username').value;
            var message = document.getElementById('message').value;
            if (username === '' || message === '') {
                alert('Please enter both your name and a message.');
                return;
            }
            var messageContainer = document.getElementById('message-container');
            var newMessage = document.createElement('div');
            newMessage.className = 'message user';
            newMessage.innerHTML = '<span class="username">' + username + '</span>: <span class="content">' + message + '</span>';
            messageContainer.appendChild(newMessage);
            document.getElementById('message').value = '';
            // Scroll to bottom of message container
            messageContainer.scrollTop = messageContainer.scrollHeight;
        }
    </script>

</body>