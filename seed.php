<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seed Certification Service</title>
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

.programs-services ul {
    list-style: none;
    color: white;
    padding: 0;
    margin: 0;
}

.programs-services li:hover {
    background-color: #111;
    cursor: pointer;
    padding: 5px;
    border-radius: 10px;
    color:white;
}

.content-container {
    display: flex;
    flex-wrap: wrap;
    margin: 20px;
    padding: 20px;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.organogram,
.mission,
.programs,
.services {
    flex: 1;
    margin-top: 20px;
}

.footer {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
    margin-top: 20px;
}

.programs-services {
    display: flex;
    justify-content: space-around;
    margin-top: 20px;
    width: 100%;
}

.programs,
.services {
    flex: 1;
    background-color: #f9f9f9; /* Added background color */
    padding: 10px; /* Added padding */
}

.programs-services ul {
    padding-left: 20px;
    color:black;
}

.programs-services h3 {
    margin-bottom: 10px;
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
           
        </div>
    <div>
        <div class="content-container">
            <h2>Seed Certification Service</h2>
            <p>
                The Seed Certification Service of the Department of Agriculture was formally established in 1979 with the assistance of the Netherlands Government Aid program. However, the DOA has provided the service of seed testing since 1958, during which 1758 samples of paddy were tested. A seed testing laboratory with an annual capacity of 5000 samples was established at Peradeniya in 1970.
            </p>

            <!-- Other content here -->

         

            <div class="mission">
                <h3>Mission</h3>
                <p>Making seed and planting material available in plenty for safeguarding, maintenance of high standards, and protection of genetic and physical purity of the seed and planting material.</p>
            </div>

            <div class="programs-services">
                <div class="programs">
                    <h3>Programmes</h3>
                    <ul>
                        <li>Certification of seed paddy.</li>
                        <li>Certification of vegetable seeds.</li>
                        <li>Certification of Other field crops.</li>
                        <li>Certification of seed potato.</li>
                        <li>Certification of fruit plant nurseries.</li>
                        <li>Registration of fruit plant nurseries and mother plants of fruits.</li>
                        <li>Certification of breeder seeds.</li>
                        <li>DUS (Distinctness, Uniformity, Stability) Testing.</li>
                    </ul>
                </div>

                <div class="services">
                    <h3>Services</h3>
                    <ul>
                        <li>Implementation of Seed Act 2003 no 22.</li>
                        <li>Certification of the quality of basic seeds of rice, vegetable, OFC, potato and planting materials before multiplication.</li>
                        <li>Certification of the quality commercial seeds and planting materials of Rice, Vegetables, Other Field Crops (OFC).</li>
                    </ul>
                </div>
            </div>
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
