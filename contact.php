<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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

        .contact-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #2E8B57;
        }

        p {
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .contact-details {
            margin-top: 20px;
        }

        .contact-details p {
            margin-bottom: 5px;
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
        <h1>Contact Us</h1>
    </header>

    <div class="contact-container">
        <h2>Get in Touch</h2>
        <p>If you have any questions or inquiries, feel free to contact us using the details below:</p>

        <div class="contact-details">
            <p><strong>Telephone:</strong> +94 812 388331 / 32 / 34</p>
            <p><strong>Email Address:</strong> info@doa.gov.lk</p>
            <p><strong>Office Address:</strong> Department of Agriculture, P.O.Box. 01, Peradeniya</p>
        </div>
    </div>

   
</body>

</html>
