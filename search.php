<?php
$connections = require 'database.php'; 
$conn = $connections['conn'];

if (isset($_GET['query'])) {
    $query = $_GET['query'];
    $query = $conn->real_escape_string($query); 

   
    $sql = "SELECT * FROM products WHERE name LIKE '%$query%' OR description LIKE '%$query%'";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            background-image: url('egPic.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; 
            margin: 0; 
        }
        .search-results-container {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px; 
            width: 80%; 
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="search-results-container">
        <?php
        if (isset($result) && $result->num_rows > 0) {
            
            echo "<h2>Search Results:</h2>";
            while ($row = $result->fetch_assoc()) {
                echo "<div>";
                echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['description']) . "</p>";
                echo "<p>Price: $" . htmlspecialchars($row['price']) . "</p>";
                echo "<p>Stock: " . htmlspecialchars($row['stock']) . "</p>";
                echo "</div><hr>";
            }
        } else {
            echo "<p>No matching item found</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
