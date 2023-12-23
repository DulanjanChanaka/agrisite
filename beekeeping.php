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
    <h1>Sri Lanka's Bee Keeping</h1>
</header>

<div class="content-container">
    <img src="bk.jpg" alt="Organic Farming in Sri Lanka">
    <p>Sri Lanka's Beekeeping industry is a vibrant and essential component of the island's agricultural landscape, contributing to biodiversity, crop pollination, and the production of high-quality honey. Nestled in the heart of the Indian Ocean, Sri Lanka provides an ideal environment for the practice of beekeeping, with diverse flora and ecosystems that support a thriving bee population.

At the core of Sri Lanka's Beekeeping is a recognition of the crucial role that bees play in maintaining ecological balance. Beekeepers in Sri Lanka work in harmony with nature, strategically placing hives in diverse environments ranging from lush rainforests to expansive tea plantations. This strategic placement enhances the pollination of crops, ensuring robust yields for a variety of agricultural products.

The buzzing hives not only contribute to increased crop yields but also play a pivotal role in preserving the island's rich biodiversity. Bees, in their pollination activities, facilitate the reproduction of flowering plants, contributing to the overall health of ecosystems. This interconnected relationship between bees and the environment underscores the importance of sustainable and responsible beekeeping practices.

Sri Lanka's Beekeeping industry places a strong emphasis on the production of high-quality honey. Beekeepers employ ethical and natural methods, avoiding the use of harmful pesticides and chemicals that could compromise the purity of the honey. The result is a diverse range of honey varieties, each reflecting the unique floral sources found across the island.

The beekeeping community in Sri Lanka actively engages in sustainable practices, ensuring the well-being of the bees and the preservation of their natural habitats. Education and awareness programs are often implemented to promote responsible beekeeping methods and highlight the critical role of bees in maintaining the balance of the ecosystem.

Visitors to Sri Lanka have the opportunity to explore the world of beekeeping through educational tours and visits to apiaries. These experiences provide insights into the intricate and fascinating lives of bees, the art of honey production, and the environmental significance of responsible beekeeping.

In conclusion, Sri Lanka's Beekeeping industry not only contributes to the economy but also plays a pivotal role in environmental conservation. It is a celebration of the symbiotic relationship between humans and bees, emphasizing the importance of sustainable practices to ensure the well-being of both the beekeeping community and the ecosystems they inhabit.</p>

    <!-- Add your provided paragraph here -->

</div>

<footer>
    <p>In conclusion, Sri Lanka's Organic Farming is a celebration of the island's natural bounty and a commitment to a sustainable, healthy future. It reflects a harmonious balance between tradition and innovation, showcasing the beauty of agriculture in sync with nature.</p>
</footer>

</body>
</html>