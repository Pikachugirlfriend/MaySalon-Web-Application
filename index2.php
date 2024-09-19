<!DOCTYPE html>
<?php
include 'header2.php';
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="resolution.css" rel="stylesheet">

    </head>
    
    <header>
        <div class="profile-container">
            <?php if (isset($_POST['ic']) && isset($_POST['cust_pwd'])): ?>
                <img src="<?php echo htmlspecialchars($profile_picture_url); ?>" alt="Profile Picture" class="profile-picture" onclick="window.location.href='profile.php';">
                
            <?php endif; ?>
        </div>
    </header>

    <div id="resolution">
    <body>
        <section class="home home-container" id="home">
            <div class="home-text">
                <h1>Discover a world of beauty and relaxation at our salon</h1>
                <p>
                    Experience the beloved offerings at May Salon, an ideal starting point for newcomers. Awaken your senses with the exquisite services at May Salon.
                </p>
                <a href="#" class="btn">
                    <span>Book Now</span>
                    <i class='bx bx-cut'></i>
                </a>
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
                    <img src="haircol.jpeg" alt="">
                    <p>Hair Colouring</p>
                </div>
                <div class="ser-box">
                    <img src="hairstyle.jpeg" alt="">
                    <p>Hair Styling</p>
                </div>
                <div class="ser-box">
                    <img src="rebonding.jpeg" alt="">
                    <p>Rebonding</p>
                </div>
                <div class="ser-box">
                    <img src="treatment.jpeg" alt="">
                    <p>Treatment</p>
                </div>
                <div class="ser-box">
                    <img src="nails.jpeg" alt="">
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

    <!--user book appointment-->

    <section class="book book-container" id="book">
    <img src="hairsalontools1.webp" alt="" class="book-img">
    <div class="book-overlay"></div>
    <div class="book-data">
        <h2>Book an Appointment</h2><br>
        <p>Select your preferred hairstylist and book your reservation.</p>
        
        <form action="booking_confirmation.php" method="POST">
            <div>
                <label for="hairstylist">Choose Your Hairstylist:</label><br>
                <select id="hairstylist" name="hairstylist" required>
                    <option value="" disabled selected>Select a stylist</option>
                    <option value="stylist1">Stylist 1</option>
                    <option value="stylist2">Stylist 2</option>
                    <option value="stylist3">Stylist 3</option>
                    <option value="stylist4">Stylist 4</option>
                </select>
            </div>
            <br>
            <div>
                <label for="date">Preferred Date:</label><br>
                <input type="date" id="date" name="date" required>
            </div>
            <br>
            <div>
                <label for="time">Preferred Time:</label><br>
                <input type="time" id="time" name="time" required>
            </div>
            <br>
            <div>
                <label for="contact">Your Contact Information:</label><br>
                <input type="text" id="contact" name="contact" placeholder="Phone or Email" required>
            </div>
            <br>
            <div class="contact-buttons">
                <button type="submit" style="font-size: 14px; background-color: blanchedalmond; padding: 8px; text-align: center; border-radius: 10px;">Submit</button>
            </div>
        </form>
    </div>
</section>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $hairstylist = $_POST['hairstylist'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $contact = $_POST['contact'];

    // Simple validation (you can replace this with your actual database processing or other logic)
    if (!empty($hairstylist) && !empty($date) && !empty($time) && !empty($contact)) {
        
        // Here you can insert data into the database or process the booking
        // Example of a successful booking process
        $booking_success = true; // Assume booking was successful

        if ($booking_success) {
            // Display success message
            echo "<h2>Thank you for your booking!</h2>";
            echo "<p>You've selected <strong>$hairstylist</strong> on <strong>$date</strong> at <strong>$time</strong>.</p>";
            echo "<p>We will contact you at <strong>$contact</strong> for further details.</p>";
        } else {
            // In case of any failure (e.g., database insertion fails)
            echo "<h2>Booking Failed</h2>";
            echo "<p>Sorry, there was an issue with your booking. Please try again later.</p>";
        }
    } else {
        // Validation failed (form fields missing or incorrect)
        echo "<h2>Booking Failed</h2>";
        echo "<p>Please make sure all fields are filled out correctly and try again.</p>";
    }
}
?>



<!--end of user book appointment-->


    

        <br><br><hr>
        <section class="book book-container" id="book">
        <img src="hairsalontools1.webp" alt="" class="book-img">
        <div class="book-overlay"></div>
            <div class="book-data">
                <h2>Contact Us</h2><br>
                <p>Book your reservation over the form.</p>
                <p>Our guest service specialists will assist you in scheduling a convenient day for you—directions via the link below.<br></p>
                
                <div class="contact-buttons">
                    <a href="c:\Users\User\OneDrive\Desktop\MiniProject\ContactUs.html">
                        <button style="font-size: 14px; background-color: blanchedalmond; padding: 8px; text-align: center; border-radius: 10px;">Contact Us</button>
                    </a>
                </div>  
            </div>
        </section>

        <section class="footer footer-container">
            <div class="footer-box">
                <a href="#" class="logo">Follow Us</a>
                <div class="social">
                    <a href=" https://www.facebook.com/profile.php?id=61562373323389&is_tour_completed"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="https://www.instagram.com/maysalonkk?igsh=eHk3bjA0ODNtN3Bw"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://mail.yahoo.com/d/folders/1?.intl=my&.lang=en-MY"> <i class="fa-brands fa-yahoo"></i></a>
                </div>
            </div>
        </section>

        <p class="copyright"> &copy; 2024 May Salon. All rights reserved. </p>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="index_js.js"></script>

    </body>
    </div>
</html>
