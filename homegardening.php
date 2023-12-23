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
    <h1>Sri Lanka's Home Gardening</h1>
</header>

<div class="content-container">
    <img src="hg.jpg" alt="Organic Farming in Sri Lanka">
    <p>Sri Lanka's Home Gardening movement is a flourishing testament to the island nation's commitment to sustainable living, community engagement, and the cultivation of fresh, nutritious produce in the comfort of one's own home. In the midst of its diverse landscapes, from coastal plains to verdant hills, Sri Lanka embraces the concept of home gardening as a means to foster self-sufficiency, environmental consciousness, and a deep connection to the land.

At the heart of Sri Lanka's Home Gardening is a grassroots effort to encourage individuals and families to actively participate in cultivating their own organic produce. From bustling urban centers to serene rural communities, people across the island are transforming balconies, yards, and available spaces into vibrant green havens. This movement not only contributes to a healthier lifestyle but also promotes the sustainable use of land and resources.

Families engage in the cultivation of a diverse array of crops, from traditional staples like rice and vegetables to aromatic herbs and exotic fruits. The practice of home gardening extends beyond mere sustenance, becoming a source of pride and a means of preserving Sri Lanka's rich agricultural heritage. It is common to see traditional crops alongside innovative varieties, showcasing the versatility of home gardening practices.

Sri Lanka's diverse climate allows for year-round gardening, enabling enthusiasts to cultivate a wide range of crops based on seasonal variations. Home gardeners often exchange knowledge about optimal planting times, companion planting, and organic pest control, fostering a sense of community and shared expertise.

Home gardening in Sri Lanka is not merely a solitary pursuit; it is a community-building activity. Neighbors often exchange seeds, seedlings, and gardening tips, creating a network of support that transcends geographical boundaries. This communal approach contributes to the resilience of local communities and strengthens the social fabric.

Beyond the practical benefits, home gardening serves as a valuable educational tool. Schools and community organizations often incorporate gardening programs to teach children and adults about sustainable agriculture, environmental stewardship, and the importance of consuming locally grown, fresh produce.

Visitors to Sri Lanka can witness the beauty of home gardens firsthand, experiencing the aromas of herbs and flowers as they explore these vibrant, microcosmic ecosystems. Home gardens often become immersive educational spaces, welcoming curious minds to learn about sustainable practices, witness traditional farming techniques, and appreciate the intricate balance of nature.

In conclusion, Sri Lanka's Home Gardening movement represents a harmonious fusion of tradition and innovation, nurturing a sense of responsibility towards the environment and promoting a healthier way of life. It stands as a testament to the island's commitment to sustainable living and community well-being, showcasing the beauty of cultivating a piece of paradise at home.</p>

    <!-- Add your provided paragraph here -->

</div>

<footer>
    <p>In conclusion, Sri Lanka's Organic Farming is a celebration of the island's natural bounty and a commitment to a sustainable, healthy future. It reflects a harmonious balance between tradition and innovation, showcasing the beauty of agriculture in sync with nature.</p>
</footer>

</body>
</html>