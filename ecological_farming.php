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

        .card-container {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 20px auto;
        }

        .card {
            width: 30%;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: scale(1.05);
        }

        img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .card-content {
            padding: 20px;
            flex-grow: 1;
        }

        h3 {
            color: #2E8B57;
            margin-bottom: 10px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .see-more-btn {
            display: block;
            width: 100%;
            padding: 10px;
            text-align: center;
            background-color: #2E8B57;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .see-more-btn:hover {
            background-color: #228B22;
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
    <h1>Ecological Farming</h1>
    <p>Sri Lanka's Ecological Farming is a harmonious and sustainable agricultural approach that embraces the island nation's rich biodiversity and traditional farming practices. Nestled in the heart of the Indian Ocean, Sri Lanka boasts a diverse range of ecosystems, from lush rainforests to expansive tea plantations, providing an ideal backdrop for ecological farming.</p>
</header>

<div class="card-container">
    <!-- Card 1: Organic Farming -->
    <div class="card">
        <img src="of.jpg" alt="Organic Farming">
        <div class="card-content">
            <h3>Organic Farming</h3>
            <p>Embracing purity and sustainability, organic farming in Sri Lanka avoids synthetic chemicals and prioritizes natural methods. This commitment ensures the production of wholesome, chemical-free crops.</p>
            <a href="organicfarming.php" class="see-more-btn">See More</a>
        </div>
    </div>

    <!-- Card 2: Bee Keeping -->
    <div class="card">
        <img src="bk.jpg" alt="Bee Keeping">
        <div class="card-content">
            <h3>Bee Keeping</h3>
            <p>Beekeeping takes center stage, recognizing the crucial role of bees in pollination and ecosystem balance. Sustainable practices ensure the well-being of these essential pollinators and high-quality honey production.</p>
            <a href="beekeeping.php" class="see-more-btn">See More</a>
        </div>
    </div>

    <!-- Card 3: Home Gardening -->
    <div class="card">
        <img src="hg.jpg" alt="Home Gardening">
        <div class="card-content">
            <h3>Home Gardening</h3>
            <p>Encouraging a green revolution at the grassroots level, home gardening in Sri Lanka fosters a connection with the land and promotes self-sufficiency. Families actively participate in cultivating their own organic produce.</p>
            <a href="homegardening.php" class="see-more-btn">See More</a>
        </div>
    </div>
</div>

</body>
</html>
