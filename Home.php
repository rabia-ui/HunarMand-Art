<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HunarGhar - Handmade Marketplace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    

    <style>
        @media screen and (max-width: 768px) {
    header, .icon-box, .sidebar ul {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
}

        @media screen and (max-width: 768px) {
    header, .icon-box, .sidebar ul {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .sidebar ul {
        flex-wrap: wrap;
    }

    .box {
        width: 90%;
        margin: auto;
    }

    .pic-of-the-product {
        width: 100%;
        height: auto;
    }
}

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            padding: 0.3rem;
            /* color: #26ad46; */
        }

        body {
            font-family: Arial, sans-serif;
            
        }

        /* Header Styling */
        header{
            /* border: 2px solid red; */
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 2rem;
            /* background: #f8f9fa; */
            background-color: white;
            /* border: 2px solid yellow; */
        }
        
        .icon-box{
            width:30%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 2rem;
            background:white;
            
            /* border: 2px solid yellow; */
        }
        .icons {
    font-size: 1.3rem;
    color:black;
    margin: 0 5px;
    /* background: #019b7a; */
    border-radius: 50%;
    /* transition: transform 0.3s ease; */
}
.icons:hover {
    /* background-color: #333;
    color: white; */
    color: #4d4c4c;
    transition-duration: 0.4s;
}
.cart-count {
    
    background-color: #7B2D26;
    color: white;
    border-radius: 50%;
    padding: 2px 6px;
    font-size: 0.8rem;
    margin-left: 4px;
}
#logo img{
    /* border:2px solid red; */
    width:10rem;
}


        h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        header nav ul {
            display: flex;
            list-style: none;
        }

        header nav ul li {
            margin: 0 1rem;
        }

        header nav ul li a {
            text-decoration: none;
            font-size: 1rem;
            color:black;
            
            /* color: #26ad46; */
        }
        #Welcome-container{
            /* border:2px solid red; */
            border-bottom: 1px solid rgba(37, 36, 36, 0.774);
            width:100%;
            margin: auto;
            height:23rem;
            display: flex;
            justify-content: center;  /* Centers horizontally */
            align-items: center;      /* Centers vertically */
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
            url('background.jpg');
            background-repeat: no-repeat;
            background-position: center;
           z-index: -5;
           opacity: +10;
        }
       #Welcome-container h1{
            width:auto;
            text-align: center;
            /* color: #26ad46; */
            color: white;
            font-family: 'Courier New', Courier, monospace;
            height: auto;
            font-size:3.5rem;
            /* border: 2px solid green; */
        }
        #Welcome-container img{
            width:25rem;
        }
       

        /* Main Layout */
        .main-container {
            /* display: flex; */
        }

        /* Sidebar Navigation */
        .sidebar {
            width:100%;
            padding: 1rem;
            display: flex;
            /* background: #f1f1f1; */
            /* border:2px solid red; */
            height:4rem;
            /* height: 100vh; */
            /* border: 2px solid red; */
        }

        .sidebar h2 {
            font-size: 1rem;
            /* margin-bottom: 1rem; */
        }

        .sidebar ul {
            list-style: none;
            display: flex;
        }

        .sidebar ul li {
            margin: 0.5rem 0;
        }

        .sidebar ul li a {
            text-decoration: none;
            font-size: 1rem;
            color:black;
            border-right: 1px solid grey;
             padding: 0.5rem;
            display: block;
            border-radius: 5px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            /* background-color: #28a745; */
        }
        .sidebar ul li a:hover{
            /* color: #28a745; */
            transform: scale(1.03);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        

        /* Product Container */
        #container {
            /* border: 2px solid black; */
            height: auto;
            display: flex;
            flex-wrap: wrap;
            row-gap: 1rem;
            padding: 1rem;
            flex-grow: 1; /* Makes it take remaining space */
        }
        .box{
            /* background-color: #edf1f59c; */
            /* border:2px solid red; */
            margin-inline: 0.3rem;
            /* border-radius: 10%; */
            height:auto;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
}
        
        
    

.box:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
}

        .name-of-the-product,.price-of-product{
            padding-left: 0.2rem;
            margin: 0rem;
            font-size: 0.9rem;
            /* border:2px solid green; */
            background-color: white;
            height:2rem;

        }
       
      
       .pic-of-the-product {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
        opacity: 1; /* 1 = fully visible */

        background-size: cover;  /* Ensures the image covers the entire screen */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents image repetition */
            /* border: 2px solid gold; */
            width: 14.9rem;
            height: 14.9rem;
            /* margin: 0.5rem; */
            border-radius: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: white;
            padding: 0rem;
           
        }
        .add-to-cart-btn {
    margin: 0.5rem 0rem;
    padding: 0.2rem 0.4rem;
    background-color: #333;
    color:white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 0.8rem;
    transition: background-color 0.3s ease;
    /* border: 2px solid rgb(65, 65, 3); */
}

.add-to-cart-btn:hover {
    
    background: #8f3c34;
}


        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            background: #333;
            color: white;
            margin-top: 1rem;
        }

    </style>
</head>
<body>
   
    <header>
        
        <div class="icon-box">
            <a class="icons" href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a class="icons" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
            <a class="icons" href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="icons" href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <!-- <div id="logo">
            <img  src="logo.jpg"/>
          </div> -->
          
        <nav>
            <ul> 
                <li><a href="about.html">About</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="signup.html">SignUp</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="Addproduct.html">Add product</a></li>
                <li><a href="Shoping Cart.html"><i class="fas fa-shopping-cart"></i> <span class="cart-count">0</span></a></li>
                
            </ul>
        </nav>
    </header>
    <section id="Welcome-container">
        
  <!-- <h1>Welcome to Takhleeq</h1> -->
  <img src="T-removebg-preview.png"/>
    </section>

    <div class="main-container">
        
        <!-- Sidebar Navigation -->
       <aside class="sidebar">
    <ul>
        <li><a href="?category=Pottery%20%26%20Ceramics">Pottery & Ceramics</a></li>
        <li><a href="?category=Handwoven Rugs">Handwoven Rugs</a></li>
        <li><a href="?category=Peshawari Chappal">Peshawari Chappal</a></li>
        <li><a href="?category=Ajrak%20%26%20Block Printing">Ajrak & Block Printing</a></li>
        <li><a href="?category=Handmade Jewelry">Handmade Jewelry</a></li>
        <li><a href="?category=Truck Art Items">Truck Art Items</a></li>
        <li><a href="?category=Leather Goods">Leather Goods</a></li>
        <li><a href="?category=Calligraphy Art">Calligraphy Art</a></li>
    </ul>
</aside>



        <div id="container">
<?php
// <!-- Check if category is set in URL, else default to one category (e.g. first) -->


include 'display-products.php';
?>
</div>

        

    </div>

    <footer>
        <p>&copy; 2025 HunarGhar. All rights reserved.</p>
    </footer>
    
      <div id="product-container"></div>

<script>
function loadCategory(category) {
    fetch("display-products.php?category=" + encodeURIComponent(category))
        .then(res => res.text())
        .then(data => {
            document.getElementById("product-container").innerHTML = data;
        });
}
</script>





   
</body>
</html>
