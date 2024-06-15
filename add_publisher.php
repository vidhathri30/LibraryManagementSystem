<html>
<div class = "col-lg-9 well" style = "margin-top:60px;">
				<img src = "images/back2.jpg" height = "400px" width = "100%" />
			</div>
            <div style="align:center; margin:auto">
<?php
// Ensure 'connect.php' includes database connection code
require_once 'connect.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $publisher_name = mysqli_real_escape_string($conn, $_POST['publisher_name']);
    $Year_of_Publication = $_POST['Year_of_Publication'];

    // Insert data into database
    $sql = "INSERT INTO publisher (publisher_name, Year_of_Publication) 
            VALUES ('$publisher_name', '$Year_of_Publication')";

    if (mysqli_query($conn, $sql)) {
        // Fetch the inserted data to display on frontend
        $last_insert_id = mysqli_insert_id($conn);
        $query = "SELECT * FROM publisher WHERE publisher_id = $last_insert_id";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $publisher_id = $row['publisher_id'];
            $publisher_name = $row['publisher_name'];
            $Year_of_Publication = $row['Year_of_Publication'];

            // Display the inserted data
            echo '<h2>New Publisher Added:</h2>';
            echo '<p><strong>Publisher Name:</strong> ' . $publisher_id . '</p>';
            echo '<p><strong>Publisher Name:</strong> ' . $publisher_name . '</p>';
            echo '<p><strong>Year of Publication:</strong> ' . $Year_of_Publication . '</p>';
        } else {
            echo "Error: Unable to fetch data from database";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }





    // Close database connection
    mysqli_close($conn);
}
?>
</div>
</html>
