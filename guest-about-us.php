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
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                    <a class="nav-link active" href="index.php#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About Us</a>
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

    <div id="about" class="about-us-section">
    <div class="about-us-content">
        <div class="about-us-title">
            <h2>About Us</h2>
        </div>
        <div class="section">
            <img src="aboutus-images/1st.png" alt="Section 1" class="section-image">
        </div>
        <div class="section">
            <img src="aboutus-images/2nd.png" alt="Section 2" class="section-image">
        </div>
        <div class="section">
            <img src="aboutus-images/3rd.png" alt="Section 3" class="section-image">
        </div>
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
        font-family: 'DM Sans', Poppins;
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

    .about-us-section {
    color: #BE9355; /* Put white text on the colored background */
    padding: 20px 0; /* Adjust padding as needed */
    text-align: center;
}

.about-us-content {
    display: flex;
    flex-direction: column; /* Lay out sections vertically */
    align-items: center;
}

.about-us-title {
    margin-bottom: 20px; /* Add space between "About Us" and sections */
}

.section {
    margin-bottom: 20px; /* Add space between sections */
}

.section-image {
    max-width: 100%;
    height: auto;
}
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

    @media (min-width: 320px) {
        .about-us-content {
        padding: 0 10px; /* Pag-ayos ng padding para sa mas maliit na screen */
    }

    .section {
        margin-bottom: 10px;
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
        .about-us-title {
        font-size: 20px;
        }
        #emailInput {
        width: 100%; /* Make the input full-width */
        margin-bottom: 10px;
        padding: 10px;
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

        .about-us-title {
        font-size: 18px;
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

        .footer-container {
            text-align: center;
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