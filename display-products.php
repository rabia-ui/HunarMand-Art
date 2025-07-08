<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ecommerce";

// Procedural MySQLi connection
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if category is provided in URL
if (isset($_GET['category']) && !empty($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM products WHERE category = '$category'";
} else {
    $sql = "SELECT * FROM products";
}

// Run the query
$result = mysqli_query($conn, $sql);


// Display products
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="box">
                <div class="pic-of-the-product" style="background-image: url(' . htmlspecialchars($row['image_url']) . ');"></div>
                <div class="name-of-the-product"><p>' . htmlspecialchars($row['name']) . '</p></div>
                <div class="price-of-product">' . htmlspecialchars($row['price']) . '$</div>
                <a href="Shoping Cart.html"<button class="add-to-cart-btn">Add to Cart</button></a>
            </div>';
    }
} else {
    echo "No products found.";
}

// Free result and close connection
if (isset($stmt)) mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
