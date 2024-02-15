<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/connect.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                    <img src="images/LOGO.png" alt="Derma101" height="30">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <span class="nav-item">
                <a href="login.php" style="color: #BE9355; text-decoration: none;"><i class="fa fa-user fa-lg" aria-hidden="true"></i>&nbsp;&nbsp;Login</a>
            </span>
        </div>
    </nav>

<div class="bottom-section">
    <div class="photo-container">
        <img src="index-images/image 41.png" alt="Enhancing Beauty" class="photo">
        <div class="text-overlay">
            <h2>ENHANCING THE BEAUTY IN YOU</h2>
            <p>Only the experts, Trust DERMA 101</p>
            <button class="btn consult-button">Consult Now</button>
            <button class="btn services-button">See Services</button>
        </div>
    </div>
</div>

<div id="services" class="services-section">
    <h3>Most Popular</h3>
    <p>Our Exclusive Services</p>
</div>

<div class="services-photos">
    <div class="service-photo">
        <img src="index-images/laser.png" alt="Laser">
        <button class="btn view-button" style="background-color: #E1AC41;">View</button>
    </div>
    <div class="service-photo">
        <img src="index-images/facial.png" alt="Facial">
        <button class="btn view-button" style="background-color: #E1AC41;">View</button>
    </div>
    <div class="service-photo">
        <img src="index-images/waxing.png" alt="Waxing">
        <button class="btn view-button" style="background-color: #E1AC41;">View</button>
    </div>
</div>

<div class="services-photos">
    <div class="service-photo">
        <img src="index-images/hair.png" alt="Hair Removal">
        <button class="btn view-button" style="background-color: #E1AC41;">View</button>
    </div>
    <div class="service-photo">
        <img src="index-images/body.png" alt="Body Treatments">
        <button class="btn view-button" style="background-color: #E1AC41;">View</button>
    </div>
</div>

<div id="about" class="about-us-section">
    <div class="about-us-content">
        <div class="about-us-content-left">
            <img src="index-images/emplo.png" alt="Employee" class="employee-pic">
        </div>
        <div class="about-us-content-right">
            <p><strong>About Us</strong></p>
            <p>For 15 years now, DERMA 101 has been true to its mission of providing professional excellent dermatological</p>
            <p>services upholding the highest ethical standard and quality care. We continue to grow…</p>
            <a href="guest-about-us.php" class="btn read-more-button">Read More</a>
        </div>
    </div>
</div>


<div id="reasons-section">
    <h3 id="reasons-title">The reasons<br>Why Choose Us?</h3>
    <div id="frame-photo">
        <img src="index-images/Big.png" alt="Frame Photo" id="inner-photo">
    </div>
</div>
<div id="ourClients" class="testimonials-section">
<div id="testimonials-section">
    <h3 id="testimonials-title">Testimonials<br>What’s our customer says?</h3>

    <div id="testimonials-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque posuere
                                vivamus egestas porttitor. Hendrerit vitae at nulla varius proin ipsum. Purus augue in
                                morbi."</p>
                            <div class="customer-info">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <span class="customer-name">John Doe</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque posuere
                                vivamus egestas porttitor. Hendrerit vitae at nulla varius proin ipsum. Purus augue in
                                morbi."</p>
                            <div class="customer-info">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <span class="customer-name">Jane Smith</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque posuere
                                vivamus egestas porttitor. Hendrerit vitae at nulla varius proin ipsum. Purus augue in
                                morbi."</p>
                            <div class="customer-info">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <span class="customer-name">Alice Johnson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque posuere
                                vivamus egestas porttitor. Hendrerit vitae at nulla varius proin ipsum. Purus augue in
                                morbi."</p>
                            <div class="customer-info">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <span class="customer-name">Bob Anderson</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque posuere
                                vivamus egestas porttitor. Hendrerit vitae at nulla varius proin ipsum. Purus augue in
                                morbi."</p>
                            <div class="customer-info">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <span class="customer-name">Eva Davis</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam scelerisque posuere
                                vivamus egestas porttitor. Hendrerit vitae at nulla varius proin ipsum. Purus augue in
                                morbi."</p>
                            <div class="customer-info">
                                <i class="fas fa-user-circle fa-3x"></i>
                                <span class="customer-name">Mark Taylor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- Carousel control arrows -->
         <button class="carousel-control-prev" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonials-carousel" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div id="getInTouch" class="get-in-touch-section">
        <div id="get-in-touch-section">
            <div class="container">
                <div class="col-md-6">
                    <h3 class="get-in-touch">Get in Touch</h3>
                    <p class="appointment-heading">Book an appointment now</p>
                    <p class="lorem-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mattis nisl, elementum elit arcu amet nec non eget felis. Eu ut cursus luctus nunc.</p>
                </div>
                <div class="col-md-6">
                    <form action="#" method="post" class="contact-form">
                        <div class="mb-3 d-flex align-items-center">
                            <input type="email" class="form-control" id="emailInput" placeholder="Your email">
                            <button type="submit" class="btn btn-primary btn-book-now">BOOK NOW</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="picture-container">
                <div class="picture-section">
                    <img src="index-images/Component 1.png" alt="Image 1" class="picture">
                    <img src="index-images/Component 2.png" alt="Image 2" class="picture">
                    <img src="index-images/Component 3.png" alt="Image 3" class="picture">
                    <img src="index-images/Component 4.png" alt="Image 4" class="picture">
                </div>
            </div>
        </div>
    </div>

<!-- FOOTER -->
<footer>
    <div class="footer-container">
        <div id="contact" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-8">
                        <br> <br>
                        <p class="footer-title">Contact Us</p>
                        <p class="footer-address" style="font-size: 18px;">2/F 1 Cirq Building, Sen. Lorenzo Sumulong Avenue, Brgy. San Roque, Antipolo, Philippines</p>
                        <br><br>
                    </div>
                    <div class="col-6 col-md-4">
                        <p>
                            <div class="icons">
                                <br><br>
                                <a href="https://www.facebook.com/Derma101" style="color: #BE9355;"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                <a href="derma101ph@yahoo.com" style="color: #BE9355;"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                <a href="derma101ph.com" style="color: #BE9355;"><i class="fa fa-link fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </p> <br><br><br><br>
                        <p class="footer-copyright" style="text-align: right; color: #C0C0C0;">Copyright © 2024. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<style>
    body {
        font-family: DM Sans, Poppins;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .nav-item{
            font-family: DM Sans;
            font-weight: bold;
            font-size: 16px;
            margin-left: 10px;
            margin-right: 10px;
        }

    .container-fluid {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .navbar-brand img {
        max-height: 50px;
    }

    .navbar-toggler {
        border: none;
        cursor: pointer;
    }

    .navbar-toggler-icon {
        background-color: #333;
        height: 2px;
        width: 20px;
    }

    .collapse {
        flex-grow: 1;
        text-align: center;
    }

    .navbar-nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    .nav-item {
        list-style: none;
        margin: 0 15px;
    }

    .nav-link {
        text-decoration: none;
        color: #333;
        font-weight: bold;
        transition: color 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #E1AC41;
    }

    #user-login {
        display: flex;
        align-items: center;
    }

    #login-link {
        text-decoration: none;
        color: #333;
        display: flex;
        align-items: center;
    }

    #user-icon {
        margin-right: 5px;
    }

    .bottom-section {
    position: relative;
    overflow: hidden;
}

.photo-container {
    position: relative;
    overflow: hidden;
    margin: 30px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Dark shadow */
}

.photo {
    width: 100%;
    height: auto;
    display: block;
    filter: brightness(65%); /* Dim the image */
}

.text-overlay {
    position: absolute;
    margin-top: 10px;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: #fff;
    padding: 20px;
    width: 100%;
    max-width: 600px;
    box-sizing: border-box;
}

.text-overlay h2,
.text-overlay p {
    margin: 0;
}

.consult-button,
.services-button {
    background-color: #BE9355;
    color: #fff;
    border: 2px solid #BE9355; /* Border color */
    padding: 10px 10px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.consult-button:hover,
.services-button:hover {
    background-color: #BE9355; /* Lighter color on hover */
}

    .services-section {
        text-align: center;
        padding: 20px 0;
        color: #BE9355;
    }

    .services-photos {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.service-photo {
    position: relative;
    margin: 10px; /* Adjust the margin as needed to create space between the service photos */
}

.service-photo img {
    width: 100%;
    height: auto;
}

    .view-button {
        position: absolute;
        bottom: 10px; /* Adjust the distance from the bottom as needed */
        left: 10px; /* Adjust the distance from the left as needed */
        background-color: #E1AC41;
        color: #fff; /* Set a light text color for dark background */
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .about-us-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px 0;
    }
    .about-us-content {
        flex: 1;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 0 20px;
    }

    .about-us-content-left,
    .about-us-content-right {
        flex: 1;
    }

    .employee-pic {
        max-width: 600px;
        max-height: 430px;
        width: 100%;
        height: auto;
    }

    .read-more-button {
        background-color: #E1AC41;
        color: #fff;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    .read-more-button:hover {
        background-color: #333;
    }

    #reasons-section,
    #testimonials-section,
    #get-in-touch-section {
        text-align: center;
        padding: 50px 0;

    }
    #testimonials-title {
        color: #BE9355;
    }

    #reasons-title {
        color: #BE9355;
    }
    #frame-photo img {
        width: 100%;
        height: auto;
    }

    #testimonials-carousel {
        max-width: 800px;
        margin: 0 auto;
    }

    .testimonial {
        text-align: center;
        padding: 20px;
    }

    .customer-info {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
    }

    .customer-name {
        margin-left: 10px;
    }

    #get-in-touch-section {
        background-color: white;
        color: #BE9355;
    }

    .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .get-in-touch,
    .appointment-heading {
        margin-bottom: 20px;
    }
    .lorem-text {
        font-size: 16px;
        color: #333;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
    }
    #emailInput {
        width: 100%; /* Make the input full-width */
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 10px;
    }

    .btn-book-now {
        width: 100%; /* Make the button full-width */
        border-radius: 10px;
        max-width: 133px; /* Set a maximum width for the button */
        background-color: #E1AC41;
        margin-bottom:10px;
    }

    .btn-book-now:hover {
        background-color: #E1AC41;
    }

    .picture-container {
        margin-top: 20px;
        text-align: center;
    }

    .picture-section {
        display: flex;
        justify-content: space-around;
    }

    .picture {
        width: 100%;
        height: auto;
        margin: 10px;
    }

    .footer-container {
        color: #BE9355;
        padding: 20px 0;
        text-align: center;
    }

    .left-section,
    .right-section {
        flex: 1;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 10px;
    }

    .social-icons a {
        text-decoration: none;
        color: #BE9355 ;
        margin: 0 10px;
        font-size: 20px;
    }

    .social-icons a:hover {
        color: #E1AC41;
    }
    .footer {
            background-color: #f4f5f6;
            font-family: DM Sans;
        }
        .footer-title {
            font-family: Poppins;
            font-weight: bold;
            color: #BE9355;
            font-size: 20px;
        }
        .icons {
            float: right;
        }

@media (min-width: 320px) {
        .about-us-section {
            text-align: center;
        }

        .about-us-content {
            flex-direction: column;
            align-items: center;
        }

        .about-us-content-left,
        .about-us-content-right {
            flex: none;
            margin-bottom: 20px;
        }

        .employee-pic {
            max-width: 100%; /* Panatilihing responsive sa maliit na screen */
            height: auto;
        }
        #emailInput {
        width: 100%; /* Make the input full-width */
        margin-bottom: 10px;
        padding: 10px;
    }

    .btn-book-now {
        width: 100%; /* Make the button full-width */
        max-width: 133px; /* Set a maximum width for the button */
        border-radius: 10px;
        margin-bottom:10px;
    }
    .footer {
            background-color: #f4f5f6;
            font-family: DM Sans;
        }
        .footer-title {
            font-family: Poppins;
            font-weight: bold;
            color: #BE9355;
            font-size: 20px;
        }
        .icons {
            float: right;
        }
}


    @media only screen and (max-width: 768px) {
        .navbar-nav {
            flex-direction: column;
            text-align: center;
        }

        .nav-item {
            margin: 10px 0;
        }
        .about-us-section {
            text-align: center;
        }

        .about-us-content {
            flex-direction: column;
            align-items: center;
        }

        .about-us-content-left,
        .about-us-content-right {
            flex: none;
            margin-bottom: 20px;
        }
        #emailInput {
        width: 100%; /* Make the input full-width */
        margin-bottom: 10px;
        padding: 10px;
    }

    .btn-book-now {
        width: 100%; /* Make the button full-width */
        max-width: 133px; /* Set a maximum width for the button */
        border-radius: 10px;
        margin-bottom:10px;
    }
    .footer {
            background-color: #f4f5f6;
            font-family: DM Sans;
        }
        .footer-title {
            font-family: Poppins;
            font-weight: bold;
            color: #BE9355;
            font-size: 20px;
        }
        .icons {
            float: right;
        }
}


    @media only screen and (max-width: 600px) {
        .text-overlay {
            padding: 0 10px;
        }

        .services-photos {
            flex-direction: column;
            align-items: center;
        }

        .service-photo {
            margin: 10px 0;
        }

        .about-us-section {
            flex-direction: column;
        }

        .about-us-content {
            flex-direction: column;
            text-align: center;
        }

        .about-us-content-left,
        .about-us-content-right {
            width: 100%;
            margin-bottom: 20px;
        }

        #reasons-section,
        #testimonials-section,
        #get-in-touch-section {
            padding: 30px 0;
        }

        #frame-photo {
            margin-top: 20px;
        }

        .container {
            flex-direction: column;
        }

        .btn-book-now {
            width: 90%;
        }

        .picture-section {
            flex-direction: column;
        }

        .picture {
            width: 100%;
        }

        .footer {
            background-color: #f4f5f6;
            font-family: DM Sans;
        }
        .footer-title {
            font-family: Poppins;
            font-weight: bold;
            color: #BE9355;
            font-size: 20px;
        }
        .icons {
            float: right;
        }

    #emailInput {
        width: 100%; /* Make the input full-width */
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 10px;
    }

    .btn-book-now {
        width: 100%; /* Make the button full-width */
        max-width: 133px; /* Set a maximum width for the button */
        border-radius: 10px;
        margin-bottom:10px;
    }
    .text-overlay {
        padding: 10px; /* Bawasan ang padding para maging mas maliit ang text-overlay */
    }

    .consult-button,
    .services-button {
        padding: 8px 16px; /* Baguhin ang laki ng padding para mas maliit ang buttons */
        margin-top: 10px; /* Dagdagan ang margin sa taas para malayo ang buttons sa text */
    }
}
</style>