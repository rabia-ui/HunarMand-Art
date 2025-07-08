<?php
$servername = "localhost";
$username = "root";
$password = ""; // your DB password
$dbname = "ecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$description = $_POST['description'];

// Image upload
$target_dir = "Pics/";
$image_name = basename($_FILES["image"]["name"]);
$target_file = $target_dir . time() . "_" . $image_name;
$image_url = $target_file;

if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
  // Escape data to prevent SQL injection
  $name = mysqli_real_escape_string($conn, $name);
  $category = mysqli_real_escape_string($conn, $category);
  $image_url = mysqli_real_escape_string($conn, $image_url);
  $price = floatval($price); // Ensures numeric
  $description = mysqli_real_escape_string($conn, $description);

  // Insert query
  $sql = "INSERT INTO products (name, category, image_url, price, description) 
          VALUES ('$name', '$category', '$image_url', $price, '$description')";

  if (mysqli_query($conn, $sql)) {
    echo "Product uploaded successfully!";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
} else {
  echo "Sorry, there was an error uploading the image.";
}

mysqli_close($conn);
?>
