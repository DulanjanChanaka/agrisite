<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL-GAP Certification Portal</title>
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
   .nav_list a {
            text-decoration: none;
            color: white;
        }


        .content-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h2 {
            color: green;
        }

        p {
            margin-bottom: 20px;
        }

        .contact-info,
        .downloads {
            margin-top: 20px;
        }

        .contact-info h3,
        .downloads h3 {
            color: green;
            margin-bottom: 10px;
        }

        .contact-info p,
        .downloads p {
            margin-bottom: 10px;
        }

        .image-container {
            text-align: center;
            margin-top: 20px;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
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
           
        </div>
    <div class="content-container">
        <h2>SL-GAP Certification Portal</h2>

        <div class="contact-info">
            <h3>Contact Info</h3>
            <p>
                SL - GAP Certification Division<br>
                Seed Certification Service<br>
                Department of Agriculture<br>
                Gannoruwa<br>
                Sri Lanka<br>
                +94-81-2388414
            </p>

            <p>
                Agri Business Counseling Unit<br>
                Extension & Training Centre<br>
                Department of Agriculture<br>
                Old Galaha Road<br>
                Peradeniya<br>
                Sri Lanka<br>
                +94-81-2388098
            </p>
        </div>

        <div class="downloads">
            <h3>Downloads</h3>
            <ul>
                <li><a href="#">SL-GAP Certified Farmer List</a></li>
                <li><a href="#">SL-GAP (Fruit & Vegetable)</a></li>
                <li><a href="#">SL-GAP (Rice)</a></li>
                <li><a href="#">SL-GAP Product Handlers List</a></li>
                <li><a href="#">SL-GAP B</a></li>
            </ul>
        </div>

        <div class="image-container">
            <img src="gap.jpg" alt="SL-GAP Image">
        </div>
    </div>
</body>

</html>
