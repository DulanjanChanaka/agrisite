<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        header {
            text-align: center;
            padding: 20px;
            background-color: #2E8B57;
            color: #fff;
        }

        .content-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: justify;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        h2 {
            color: #2E8B57;
            text-align: center;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        h3 {
            margin-top: 20px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #2E8B57;
            color: #fff;
        }
        .nav_list a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
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

<header>
    <h1>Sri Lanka's Organic Farming</h1>
</header>

<div class="content-container">
    <img src="of.jpg" alt="Organic Farming in Sri Lanka">
    <p>Sri Lanka's Organic Farming is a testament to the island nation's commitment to sustainable and eco-friendly agricultural practices. Nestled in the heart of the Indian Ocean, Sri Lanka embraces a rich tapestry of landscapes, from verdant hills to fertile plains, providing an ideal backdrop for the cultivation of organic crops.

At the core of Sri Lanka's Organic Farming is a dedication to purity and environmental stewardship. Farmers eschew synthetic chemicals, pesticides, and genetically modified organisms, choosing instead to rely on natural methods to nurture the soil and crops. This commitment not only ensures the production of wholesome, chemical-free food but also contributes to the long-term health of the land.

Farmers in Sri Lanka practice crop rotation, companion planting, and organic fertilization to enhance soil fertility and maintain a balanced ecosystem. This holistic approach not only minimizes the environmental impact but also fosters resilience against pests and diseases. The lush fields of organic farms in Sri Lanka showcase a harmonious coexistence between nature and agriculture.

The island's diverse climate allows for the cultivation of a wide variety of organic crops, ranging from traditional staples like rice and tea to exotic fruits and spices. This diversity not only enriches the agricultural landscape but also provides consumers with a bountiful array of nutritious and flavorsome produce.

Sri Lanka's Organic Farming extends beyond the fields to include ethical and fair trade practices. Many farmers engage in direct relationships with local communities and consumers, fostering a sense of community and ensuring that the benefits of organic farming reach everyone involved in the process.

Visitors to Sri Lanka have the opportunity to experience the beauty of organic farms firsthand. The air is filled with the natural scents of herbs and flowers as vibrant fields showcase the thriving biodiversity. These farms often serve as educational hubs, welcoming curious minds to learn about sustainable agriculture, witness traditional farming techniques, and savor the purity of organically grown produce.

In conclusion, Sri Lanka's Organic Farming is a celebration of the island's natural bounty and a commitment to a sustainable, healthy future. It reflects a harmonious balance between tradition and innovation, showcasing the beauty of agriculture in sync with nature.</p>

    <!-- Add your provided paragraph here -->

</div>

<footer>
    <p>In conclusion, Sri Lanka's Organic Farming is a celebration of the island's natural bounty and a commitment to a sustainable, healthy future. It reflects a harmonious balance between tradition and innovation, showcasing the beauty of agriculture in sync with nature.</p>
</footer>

</body>
</html>
