

/* ITO YUNG LALAGAY MO SA LOCALHOST */

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    user_id INT NOT NULL,
    rating INT NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

/* ITO YUNG CODE PAG DISPLAY NG MGA COMMENTS */

<?php
$productId = $_GET['product_id'];
$conn = new mysqli('localhost', 'username', 'password', 'your_database');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM comments WHERE product_id = $productId");

while ($row = $result->fetch_assoc()) {
    echo "<div class='comment'>";
    echo "<p><strong>Rating: {$row['rating']} stars</strong></p>";
    echo "<p>{$row['comment']}</p>";
    echo "</div>";
}

$conn->close();
?>

/* WAG MO KALIMUTAN I SAVE YUNG FILE SA " .php " */


