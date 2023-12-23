<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <style>
         body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            width: 100%;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center; /* Center items vertically */
            padding: 10px 15px;
            background-color: green;
            height: 60px; /* Set fixed height */
        }

        .logo img {
            max-height: 50px; /* Ensure the logo does not exceed the height of the navbar */
        }

        .nav_list ul {
            display: flex;
            flex-direction: row;
            list-style: none;
            gap: 30px;
            color: white;
            
        }

        li:hover {
            background-color: #111;
            cursor: pointer;
            padding: 5px;
            border-radius: 10px;
        }
        .product-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 20px;
        }

        .product-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .see-more-btn {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .see-more-btn:hover {
            background-color: #45a049;
        }

        .nav_list a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div>
    <div class="navbar">
        <div class="logo">
            <img src="LOGO.png" alt="Logo">
        </div>
        <div class="nav_list">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="loginBtn"><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>
        </div>
        <div class="product-container">
        <div class="product-card">
            <img src="1c.jpg" alt="Product 1" class="product-image">
            <h3>Crops</h3>
            <p>Description of Crops category.</p>
            <a href="" class="see-more-btn">See More</a>
        </div>
        <div class="product-card">
            <img src="2c.jpg" alt="Product 2" class="product-image">
            <h3>Farm Mechanization</h3>
            <p>Description of Farm Mechanization category.</p>
            <a href="" class="see-more-btn">See More</a>
        </div>
        <div class="product-card">
            <img src="3c.jpg" alt="Product 3" class="product-image">
            <h3>Post-Harvest & Value Addition</h3>
            <p>Description of Post-Harvest & Value Addition category.</p>
            <a href="" class="see-more-btn">See More</a>
        </div>
        <div class="product-card">
            <img src="4c.jpg" alt="Product 4" class="product-image">
            <h3>Special Technology</h3>
            <p>Description of Special Technology category.</p>
            <a href="" class="see-more-btn">See More</a>
        </div>
        <div class="product-card">
            <img src="5c.jpg" alt="Product 5" class="product-image">
            <h3>Soil and Water Management</h3>
            <p>Description of Soil and Water Management category.</p>
            <a href="" class="see-more-btn">See More</a>
        </div>
        <div class="product-card">
            <img src="6c.jpg" alt="Product 6" class="product-image">
            <h3>Ecological Farming</h3>
            <p>Description of Ecological Farming category.</p>
            <a href="ecological_farming.php" class="see-more-btn">See More</a>
        </div>
    </div>
        <div class="footer">
            &copy; 2023 Your Company Name. All rights reserved.
        </div>
    </div>
</body>

</html>
