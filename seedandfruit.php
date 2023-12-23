<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Seed and Planting Material Sales Centers</title>
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

        .sales-center {
            margin-bottom: 20px;
        }

        h2 {
            color: green;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
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
        <h2>Government Seed and Planting Material Sales Centers</h2>
        <p>(Opening Hours: Weekdays 8.30 am to 4.00 pm & Saturday 8.30 am to 12.00 pm)</p>

        <div class="sales-center">
            <h3>Vegetable Seeds Centre, Gannoruwa</h3>
            <table>
                <tr>
                    <th>Sales Center</th>
                    <th>Seeds and Planting Materials Marketing Officer In-charge</th>
                    <th>Mobile Telephone No.</th>
                    <th>Official Telephone No.</th>
                    <th>Email Address</th>
                </tr>
                <tr>
                    <td>All Vegetable Seeds (Wholesale only)</td>
                    <td>Mrs B. Nanditha Bandaranayaka (Agriculture Instructor)</td>
                    <td>+94 812 388221</td>
                    <td></td>
                    <td>vscagridept@gmail.com</td>
                </tr>
            </table>
        </div>

        <div class="sales-center">
            <h3>Alevi Piyasa, Gannoruwa</h3>
            <table>
                <tr>
                    <th>Sales Center</th>
                    <th>Seeds and Planting Materials Marketing Officer In-charge</th>
                    <th>Mobile Telephone No.</th>
                    <th>Official Telephone No.</th>
                    <th>Email Address</th>
                </tr>
                <tr>
                    <td>All Vegetable Seeds, Fruit Plants, Other Field Crop Seeds</td>
                    <td>Mr. W.M.T.V.P. Wijekoon (Technical Assistant)</td>
                    <td>+94 714 588093</td>
                    <td>+94 812 069339</td>
                    <td></td>
                </tr>
            </table>
        </div>

        

    </div>
</body>

</html>
