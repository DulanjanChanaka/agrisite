<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education & Training</title>
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

        .program-section,
        .training-section {
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
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
        <h2>Education</h2>
        <p>
            In Sri Lanka, agricultural education is a long-standing and well-established field of study. The Sri Lanka School of Agriculture, one of the first organizations established to deal with agricultural education, was founded in 1916 as the School of Tropical Agriculture, Royal Botanical Gardens, Peradeniya.
        </p>

        <p>
            Agricultural education is primarily undertaken to prepare students for employment in the agricultural sector with a National Vocational Qualification. Agricultural education curriculum may include Crop Production, Horticulture, Soil Science, Agricultural Mechanization, Food technology, Livestock Management, Plant Protection, Agricultural Economics & Extension as technical subjects. Further, Employability modules are included to develop the soft skills of the trainees.
        </p>

        <p>As a vocational education program, agricultural education focuses on three major components:</p>
        <ol>
            <li>Formal classroom instruction</li>
            <li>Field practical programs</li>
            <li>Career experience programs as on-the-job / Industrial training</li>
        </ol>

        <div class="program-section">
            <h3>Education division of the Department of Agriculture offers two Diploma Programs:</h3>

            <h4>1. Higher National Diploma in Agricultural Production Technology (NVQ Level 6/L6)</h4>
            <p>Overview:</p>
            <ul>
                <li>Program is a diploma program of two and a half year duration.</li>
                <li>It consists of 2 years of Institutional training and 6 months of industrial training (On the job training).</li>
                <li>The institutional training conducts at schools of Agriculture as a residential course and comprises 4 semesters, each of 20 weeks.</li>
                <li>The total program consists of 120 credits, and one credit is equal to 25 hours.</li>
            </ul>
            <p>Entry Requirements:</p>
            <ul>
                <li>Applicants should have one of the followings:</li>
                <ul>
                    <li>Should have obtained 03 passes at the G.C.E (A/L) Examination (New syllabus) in Bio Science stream at one sitting, two of which should be out of the following subjects: Chemistry, Agricultural Science, Biology, and Physics.</li>
                    <li>OR G.C.E (A/L) with three passes in one sitting (New syllabus) in Bio Science stream two of which should be out of the following subjects: Chemistry, Agricultural Science, Biology, and Physics.</li>
                    <li>AND An ordinary pass for English and Mathematics at G.C.E. (O/L) Examination.</li>
                </ul>
            </ul>

            <h4>2. National Diploma in Agricultural Production Technology (NVQ Level 5/L5)</h4>
        </div>

        <div class="training-section">
            <h2>Training</h2>
            <p>
                Agricultural training division of the Department of Agriculture is a well-established system bridging the technology gap between researchers and the end users of the outcomes.
            </p>

            <p>
                The main objectives of the trainings are empowerment of the participants with knowledge, skills and attitudes on the identified training need. The categories of the training programs are:
            </p>

            <ol>
                <li>Capacity building programs for government officials or private sector organizations (CB)</li>
                <li>National vocational Qualification (NVQ) training programs</li>
                <li>Technology transfer programs for farmers & Entrepreneurs.</li>
            </ol>

            <p>Training division of the Department of Agriculture offers following categories of Trainings under 12 institutions:</p>

            <table>
                <tr>
                    <th>Program</th>
                    <th>Institutes</th>
                </tr>
                <tr>
                    <td>Fruit Production Technology</td>
                    <td>Vegetable Production Technology</td>
                </tr>
                <tr>
                    <td>Other field crop production technology</td>
                    <td>Micro irrigation and protected Agriculture</td>
                </tr>
                <tr>
                    <td>Bee keeping</td>
                    <td>Mushroom Cultivation</td>
                </tr>
                <tr>
                    <td>Food technology</td>
                    <td>Post- harvest technology</td>
                </tr>
               
            </table>

            <p>In-service Training Institute, Gannoruwa:</p>
            <table>
                <tr>
                    <th>Program</th>
                    <th>Institutes</th>
                </tr>
                <tr>
                    <td>Fruit Production Technology</td>
                    <td>Other field crop production technology</td>
                </tr>
                <tr>
                    <td>Food technology</td>
                    <td>Post- harvest technology</td>
                </tr>
                
            </table>

            <p>In-service Training Institute, Angunukolapellessa:</p>
            <table>
                <tr>
                    <th>Program</th>
                    <th>Institutes</th>
                </tr>
                <tr>
                    <td>Paddy Production Technology</td>
                    
                </tr>
            </table>
          
        </div>

    </div>
</body>

</html>
