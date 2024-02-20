<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firstflight Travels</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>


<body>
    <div class="banner">
        <video src="images/bgvid.mp4" type="video/mp4" autoplay muted loop></video>

        <!-- Header -->

        <div class="content" id="home">
            <nav>
                <img src="images/logo.png" class="logo" alt="Logo" title="FirstFlight Travels">

                <ul class="navbar">
                    <li>
                        <a href="/syrus/index.php">Home</a>
                        <a href="/syrus/community.php">Community Forum</a>
                        <a href="/syrus/feedback.php">Feedback</a>
                        <a href="./about.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="/syrus/signup.php">Register Now</a>
                        <a href="/syrus/login.php">Login</a>
                    </li>
                </ul>
            </nav>

            <div class="title">
                <h1>WELCOME TO COMMUNITY FORUM</h1>
                <p1>Connect, Share, and Explore: Where Every Journey Begins.</p1>
                <p>Explore the community for each destination. </p>
                <style>
                    .title p {
                        margin-bottom: 20px;
                        /* Adjust the margin-bottom as per your requirement */
                    }
                </style>

                <form action="/search" method="GET" class="search-form">
                    <input type="text" name="destination" placeholder="Search destination...">
                    <button type="submit" class="search-button">Search</button>
                </form>
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
                    <a href="view_blogs.html" class="blog-button">View Blogs</a>
                    <a href="add_blogs.html" class="blog-button">Add a Blog</a>
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
                        background-color: rgb(14, 157, 201);
                        /* Change to your desired button background color */
                        color: #fff;
                        /* Change to your desired button text color */
                        text-decoration: none;
                        border-radius: 4px;
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

    <section class="locations" id="locations">
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
    </section>



    <section class="blog-locations" id="blog-locations">
        <div class="blog-package-title">
            <h1>Travel Blogs</h1>
        </div>

        <div class="blog-location-content">

            <div class="blog-col-content">
                <div class="author-info">
                    <img src="files/profile1.jpg" alt="Writer Image" class="author-image">
                    <span class="author-name">Sophie</span>
                </div>
                <h5>Embracing the Serene Majesty of Kashmir</h5>
                <p>Nestled in the heart of the Himalayas, enveloped by snow-capped peaks and verdant valleys, lies the
                    crown jewel of India – Kashmir. For centuries, this enchanting region has captivated the hearts and
                    minds of travelers with its breathtaking beauty...</p>
                <a href="full_blog_kashmir.html" target="_blank" class="read-more">Read More</a>
            </div>

            <div class="blog-col-content">
                <div class="author-info">
                    <img src="files/profile2.jpg" alt="Writer Image" class="author-image">
                    <span class="author-name">Anusha Sharma</span>
                </div>
                <h5>Exploring the Magical Tapestry of Istanbul</h5>
                <p> Istanbul, a city where East meets West, where ancient history intertwines with modernity, and where
                    the air is thick with the scent of spices and the echoes of a bygone era. Stepping foot into
                    Istanbul is like stepping into a living, breathing tapestry of culture...</p>
                <a href="full_blog_istanbul.html" target="_blank" class="read-more">Read More</a>
            </div>

            <div class="blog-col-content">
                <div class="author-info">
                    <img src="files/profile3.jpg" alt="Writer Image" class="author-image">
                    <span class="author-name">Joe Smith</span>
                </div>
                <h5>Paris: A Love Affair with History, Culture, and Romance</h5>
                <p>Paris – the City of Light, the epitome of romance, and a beacon of culture and sophistication. For
                    centuries, this iconic metropolis has lured travelers from around the globe with its timeless charm,
                    awe-inspiring architecture, and rich tapestry of art and history...</p>
                <a href="full_blog_istanbul.html" target="_blank" class="read-more">Read More</a>
            </div>


        </div>
    </section>

</body>