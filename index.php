<?php
$category = isset($_GET['category']) ? $_GET['category'] : 'All';

// you can replace with actual DB queries
$products = [
    "Pottery & Ceramics" => ["Clay Pot", "Decor Bowl"],
    "Handwoven Rugs" => ["Rug A", "Rug B"],
    "Handmade Jewelry" => ["Necklace", "Earrings"]
];

if (isset($products[$category])) {
    foreach ($products[$category] as $product) {
        echo "<div class='box'>
                <div class='pic-of-the-product'>$product</div>
                <p class='name-of-the-product'>$product</p>
                <p class='price-of-product'>PKR 1000</p>
                <button class='add-to-cart-btn'>Add to Cart</button>
              </div>";
    }
} else {
    echo "<p>No products found for this category.</p>";
}
?>
