<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of the Registrar of Pesticides</title>
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


        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            background-color: green;
        }

        .content-container {
            margin: 20px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .content-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
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
        <h2>Office of the Registrar of Pesticides</h2>
        <p>
            The mandate of the Office of The Registrar of Pesticides is enforcement of the Control of Pesticides Act No. 33 of 1980 and regulations made thereunder. The Act provides provisions to control, import, packing, labeling, storage, formulation, transport, sale and use of pesticides through the registration of pesticides. The entire spectrum of pesticide products, such as those used in agriculture, public health, domestic, industrial, and veterinary, etc., are coming under the purview of the Act. The Office of the Registrar of Pesticides has the national responsibility to ensure that only the high-quality pesticides of those are least hazardous to human health and the environment enter the market in Sri Lanka.
        </p>

        <!-- Replace the src attribute with the actual image URL -->
        <img src="rop.jpg" alt="Office of the Registrar of Pesticides" />

    </div>

</body>

</html>
