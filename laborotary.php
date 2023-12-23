<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central Analytical Laboratory</title>
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
        <h2>Central Analytical Laboratory</h2>

        <h3>Soil and Fertilizer</h3>
        <p>
            Excessive use of fertilizer causes unnecessary nutrient retention in the soil, posing a major problem in future crops' production and developing nutrient imbalances in the soil. Therefore, the application of soil test-based fertilizer recommendations is a more sensible nutrient management plan for the application of the correct source and correct amount of fertilizer, reducing the indiscriminate use of fertilizer and environmental contamination. In addition, advice is given to correct the pH in the soil, increasing fertilizer use efficiency.
        </p>
        <p>In soil analysis, pH, Electrical conductivity, available phosphorous, exchangeable potassium, and organic matters are determined.</p>

        <h3>Compost Analysis</h3>
        <p>It is important to monitor the quality of agricultural input for quality control, making necessary recommendations, and ensuring environmental quality in the agriculture sector.</p>
        <p>In compost analysis, pH, electrical conductivity, moisture, organic carbon, total nitrogen, total phosphorous, total potassium, and sand are analyzed, and reports will be submitted.</p>

        <h3>Fertilizer Analysis</h3>
        <p>It is important to analyze chemical fertilizer for their quality to ensure the existence of environmental quality in the agriculture sector. Consequently, it has to assure food security of the Nation. Hence central soil and fertilizer testing laboratory carried out fertilizer analysis for moisture, total concentration of nitrogen, potassium, and phosphorous, water-soluble phosphorous, and heavy metal.</p>

        <h3>Plant Sample Analysis</h3>
        <p>To solve the field problem in the farmer's field, the central soil and fertilizer testing laboratory analyze their plant sample and advise them to correct fertilizer.</p>

        <h3>Water Sample Analysis</h3>
        <p>Generally, pH and Electrical conductivity are tested in given samples. Charges are not imposed yet.</p>

        <!-- Replace the src attribute with the actual image URLs -->
        <img src="image1.jpg" alt="Soil Analysis" />
        <img src="image2.jpg" alt="Compost Analysis" />
        <img src="image3.jpg" alt="Fertilizer Analysis" />

        <h3>Food Contaminant and Pesticide Analytical</h3>

        <h3>Pesticide Residue Analysis</h3>
        <p>Analyses and reports on pesticide residues in food and water. The laboratory is equipped with advanced technical equipment such as LC/MS/MS, GC/MS, and GC-ECD.</p>

        <!-- Add more content as needed -->

    </div>

    <div class="footer">
        &copy; 2023 Your Company Name. All rights reserved.
    </div>
</body>

</html>
