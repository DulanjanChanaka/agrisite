<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        .content-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .mission {
            font-size: 18px;
            line-height: 1.6;
            margin-top: 20px;
        }

        .functions-container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .card {
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 10px;
        }

        .institute-card {
            margin: 20px 0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
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
        <div class="content-container">
            <h2>About Us</h2>
            <p>The Department of Agriculture (DOA) functions under the Ministry of Agriculture and is one of the largest government departments with a high-profile community of agricultural scientists and a network of institutions covering different agro-ecological regions island-wide.</p>
            <h3>Mission</h3>
            <p class="mission">“Achieve an equitable and sustainable agriculture development, ensuring the nation's food and nutrition security through the development and dissemination of improved agriculture technology and providing relevant services to all stakeholders with more emphasis on the farmers”</p>
            <h3>Main Functions</h3>
            <div class="functions-container">
                <div class="card" style="background-color: #3498db; color: white;">
                    <h4>Agricultural Research</h4>
                    <p>Conducting research to enhance agricultural practices and productivity.</p>
                </div>
                <div class="card" style="background-color: #2ecc71; color: white;">
                    <h4>Technology Dissemination</h4>
                    <p>Disseminating improved agricultural technologies to farmers.</p>
                </div>
                <div class="card" style="background-color: #e74c3c; color: white;">
                    <h4>Seed and Planting Material</h4>
                    <p>Production and distribution of quality seeds and planting materials.</p>
                </div>
            </div>
            <h3>Objectives</h3>
            <p>Maintaining and increasing productivity and production of the food crop sector for the purpose of enhancing the income and living conditions of the farmer and making food available at affordable prices to the consumer.</p>

            <h3>Institutes & Centres</h3>
            <div class="institute-card" style="background-color: #3498db; color: white;">
                <h4>Rice Research and Development Institute</h4>
                <p>Conducting research and development activities related to rice cultivation.</p>
            </div>

            <div class="institute-card" style="background-color: #2ecc71; color: white;">
                <h4>Field Crops Research and Development Institute</h4>
                <p>Research and development focused on field crops for improved agricultural practices.</p>
            </div>

            <!-- Add similar cards for other institutes/centres -->

        </div>
        <div class="footer">
            &copy; 2023 Your Company Name. All rights reserved.
        </div>
    </div>
    <script>
        document.getElementById('loginBtn').addEventListener('click', function () {
            // Open the login form in a new window or modal
            window.open('login.php', '_blank');
        });
    </script>
</body>

</html>
