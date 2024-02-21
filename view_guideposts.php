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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Guideposts</title>
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

        .guidepost {
            background-color: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-bottom: 10px;
        }

        p {
            margin-bottom: 10px;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>View Guideposts</h1>
    <?php
    // Check if there are any guideposts
    if (mysqli_num_rows($result) > 0) {
        // Loop through each guidepost and display them
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="guidepost">
                <h2><?php echo $row['title']; ?></h2>
                <p><strong>Author:</strong> <?php echo $row['author']; ?></p>
                <p><strong>Location:</strong> <?php echo $row['location']; ?></p>
                <p><strong>Date Posted:</strong> <?php echo $row['post_date']; ?></p>
                <p><?php echo $row['content']; ?></p>
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
</body>
</html>