
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


        .mainimage-container {
            position: relative;
            height: 500px;
            overflow: hidden;
        }

        .mainimage-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
            font-size: 36px;
            font-weight: bold;
            z-index: 1;
        }

        .mainimage-btn {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px 30px;
            background-color: green;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1;
        }

        .mainimage {
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }
        .card {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin: 20px;
        }

        .carditem {
            width: 100%;
            height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
        }

        .carditem h3 {
            color: black;
            text-align: center;
        }

        .carditem p {
            color: blue;
            text-align: center;
            font-size: 18px;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
            bottom: 0;
        }
        .carditem a {
            text-decoration: none; 
        }
        .nav_list a {
            text-decoration: none;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="css/swiper.css" />
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
           
        </div>
        <div class="mainimage-container">
        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" navigation="true" space-between="30"
    centered-slides="true" autoplay-delay="2500" autoplay-disable-on-interaction="false">
    <swiper-slide><img src="1.jpg" alt="Slide 1"></swiper-slide>
    <swiper-slide><img src="2.jpeg" alt="Slide 2"></swiper-slide>
    <swiper-slide><img src="3.jpeg" alt="Slide 3"></swiper-slide>
    
  </swiper-container>
            <div class="mainimage-text">Discover Agriculture World</div>
            <button class="mainimage-btn" onclick="window.location.href='ecological_farming.php'">Discover</button>
        </div>
        <div class="card">
            <div class="carditem">
                <div>
                <div><img src="1c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>Ecological Farming</div>
                 <div><a href="ecological_farming.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="2c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>Seed Certification Services</div>
                <div><a href="seed.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="3c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>Import & Export Services</div>
                <div><a href="import.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="4c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>ROP</div>
                <div><a href="rop.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="5c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>Laboratory Services</div>
                <div><a href="laborotary.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="6c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>Seeds and Fruit Plants</div>
                <div><a href="seedandfruit.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="7c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>Education and Training</div>
                <div><a href="education.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
            <div class="carditem">
                <div>
                <div><img src="8c.jpg" alt=""  width="100%" height="200px"></div>
                <div><h3>GAP Certification Service</div>
                <div><a href="gap.php"><p>READ MORE >></p></a></div>
                </div>
            </div>
        </div>
      

<div style="background-color: #333; color: white; padding: 20px; text-align: center;">
    <div style="display: flex; justify-content: space-between; max-width: 1200px; margin: 0 auto;">
        <div style="flex: 1;">
            <h4>Contact Us</h4>
            <p>Department of Agriculture, P.O.Box. 1, Peradeniya, Sri Lanka</p>
            <p>Email: info@doa.gov.lk</p>
            <p>Agri field problems: 1920</p>
            <p>Phone: +94 812 388331/32/34</p>
            <p>Fax: +94 812 388333</p>
            <p>Mon to Fri - 8.30am to 4.15pm (Closed on weekends and public holidays)</p>
        </div>

        <div style="flex: 1;">
            <h4>Useful Links</h4>
            <ul style="list-style: none; padding: 0;">
                <li><a href="#">Krushi Lanka Gateway</a></li>
                <li><a href="#">Ministry of Agriculture</a></li>
                <li><a href="#">Department of Meteorology</a></li>
                <li><a href="#">Hadabima Authority of Sri Lanka</a></li>
                <li><a href="#">Rice Knowledge Bank</a></li>
            </ul>
        </div>
    </div>
</div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.getElementById('loginBtn').addEventListener('click', function () {
            // Open the login form in a new window or modal
            window.open('login.php', '_blank');
        });

        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>
</html>
