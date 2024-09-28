<!DOCTYPE html>
<?php
include 'header.php';

?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>May Salon</title>
        <link rel="stylesheet" href="home_style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
        <link href="https://fonts.google.com/icons?icon.query=arrow+up" rel="stylesheet"> 
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
       

        <link href="resolution.css" rel="stylesheet">

    </head>
    <div id="resolution">
    <body>
        <section class="home home-container" id="home">
            <div class="home-text">
                <h1>Discover a world of beauty and relaxation at our salon</h1>
                <p>
                    Experience the beloved offerings at May Salon, an ideal starting point for newcomers. Awaken your senses with the exquisite services at May Salon.
            </div>
            <img src="icon.png" alt="" class="home-img">
        </section>
        <section class="service service-container" id="service">
            <div class="heading">
                <h2>Delivering warm comfort with excellent <br>
                services</h2>
            </div>
            <div class="service-content">
                <div class="ser-box">
                    <img src="Dye.png" alt="">
                    <p>Hair Colouring</p>
                </div>
                <div class="ser-box">
                    <img src="Styling.png" alt="">
                    <p>Hair Styling</p>
                </div>
                <div class="ser-box">
                    <img src="Rebonding.png" alt="">
                    <p>Rebonding</p>
                </div>
                <div class="ser-box">
                    <img src="Treatment.png" alt="">
                    <p>Treatment</p>
                </div>
                <div class="ser-box">
                    <img src="Manicure.png" alt="">
                    <p>Nails</p>
                </div>
            </div>
        </section>
        <section class="menu menu-container" id="menu">
            <div class="heading">
                <h2>Revive your style, refresh your soul.</h2>
                <p>
                From the moment you walk in, it's all about you. Discover personalized beauty in every detail.
                </p>
            </div>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Location</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .location-box {
            background-color: #f4f4f4;
            display: flex;
            align-items: flex-start;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin: 20px auto;
            max-width: 800px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-image: url('locationbackground.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }


        .location-box .map {
            flex: 1;
            margin-right: 20px;
        }

        .location-box .map iframe {
            border-radius: 4px;
            width: 100%;
            height: 300px;
            border: 0;
        }

        .location-box .details {
            flex: 2;
        }

        .location-box .details h2 {
            margin-top: 0;
            color: #FEFAE0;
        }

        .location-box .details p {
            margin: 10px 0;
            color: #FEFAE0;
        }

        .location-box .details a {
            color: #007bff;
            text-decoration: none;
        }

        .location-box .details a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .location-box {
                flex-direction: column;
            }

            .location-box .map {
                margin-right: 0;
                margin-bottom: 20px;
            }

            .location-box .details {
                flex: 1;
            }
        }
    </style>
</head>
<body>
    <section class="location-box">
        
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=YOUR_EMBED_URL" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="details">
            <h2>Visit Us</h2>
            <p><strong>Address:</strong> 123 Main Street, Cityville, ST 12345</p>
            <p><strong>Phone:</strong> (123) 456-7890</p>
            <p><strong>Email:</strong> <a href="mailto:info@example.com">info@example.com</a></p>
            <p><a href="https://www.google.com/maps/search/?api=1&query=123+Main+Street,+Cityville,+ST+12345" target="_blank">View on Google Maps</a></p>
        </div>
    </section>

        
        <br><br><hr>
        <section class="book book-container" id="book">
            <img src="Background4.jpg" alt="" class="book-img">
            <div class="book-overlay"></div>
            <div class="book-data">
                <h2>Contact Us</h2><br>
                <p>Book your reservation over the form.</p>
                <p>Our guest service specialists will assist you in scheduling a convenient day for you—directions via the link below.<br></p>
                
                <div class="contact-buttons">
                    <a href="contact us">
                        <button style="font-size: 14px; background-color: blanchedalmond; padding: 8px; text-align: center; border-radius: 10px;">Contact Us</button>
                    </a>
                </div>  
            </div>
        </section>
        
        <section class="footer footer-container">
            <div class="footer-box">
                <a href="#" class="logo">MaY SaLoN</a>
                <div class="social">
                    <a href="https://www.facebook.com/profile.php?id=61562373323389&is_tour_completed"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/maysalonkk?igsh=eHk3bjA0ODNtN3Bw"><i class='bx bxl-instagram' ></i></a>
                </div>
           
            
            <div class="footer-box">
                
                <p class="footer-links">
                <a href="index.php">Home</a> | 
                <a href="aboutus.php">About Us</a> | 
                <a href="services.php">Service</a> | 
                <a href="review.php">Review</a> | 
                <a href="products.php">Product</a>
                
            </p>
            </div>
             </div>
            
            <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Address: Kota Kinabalu,Sabah,Malaysia</p> 
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>Phone: +011-1272 9290</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:maysalonkk@yahoo.com">maysalonkk@yahoo.com</a></p>
            </div>
        </div>
            
            <div class="footer-box">
                <h3>About MaY SaLoN</h3>
                <span class="line-break"> May Salon is a modern beauty salon offering</span> a range of hair and beauty services. 
               Skilled <span class="line-break">stylists  provide personalized treatments focused </span> on customer satisfaction.
            </p>
            </div>
            
        </section>
        <p class="copyright">&copy; 2024 May Salon. All rights reserved.</p>
        
         <!-- Back to Top Button-->
        <a href="#" class="back-to-top">
            <span class="material-symbols-outlined">arrow_upward</span>
        </a> 
        
 
    </body>
    </div>
</html>

