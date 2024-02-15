<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=DM Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- STYLESHEET -->
    <style>
        .carousel-caption{
            font-family: DM Sans;
            color: white;
            font-weight: bold;
            font-size: 55px;
            line-height: normal;
            text-align: left;
            margin-left: 700px;
            margin-bottom: 200px;
            text-shadow: 4px 5px 4px rgb(0, 0, 0, 0.25);
        }
        .nav-item{
            font-family: DM Sans;
            font-weight: bold;
            font-size: 16px;
            margin-left: 10px;
            margin-right: 10px;
        }

        [data-tab-content] {
            display: none;
        }

        .active[data-tab-content] {
            display: block;
        }
        body {
            padding: 0;
            margin: 0;
        }
        .tabs {
            font-family: DM Sans;
            font-size: 20px;
            display: flex;
            list-style-type: none;
            margin: 0;
            padding: 0;
            border-bottom: 3px solid burlywood;
        }
        .tab {
            cursor: pointer;
            padding: 10px;
        }
        .tab.active {
            color: white;
            background-color: #BE9355;
        }
        .tab:hover {
            background-color: #f2e9d2;
        }
        .tab-content {
            margin-left: 20px;
            margin-right: 20px;
        }
        .button {
            border-radius: 30px;
            padding: 10px;
            color: white;
            background-color: #BE9355;
            border-color: transparent;
        }
        .card-title {
            font-family: DM Sans;
            font-weight: bold;
            font-size: 24px;
        }
        .card-fee {
            font-family: DM Sans;
            font-weight: normal;
            font-size: 18px;
        }
        .card-sub {
            font-family: DM Sans;
            font-weight: normal;
            font-size: 16px;
            color: rgb(0, 0, 0, 0.6);
        }
        .footer {
            background-color: #f4f5f6;
            font-family: DM Sans;
        }
        .footer-title {
            font-family: Poppins;
            font-weight: bold;
            color: #BE9355;
        }
        .icons {
            float: right;
        }

    </style>
    <title>Derma 101</title>
</head>
<body>
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
                    <a class="nav-link active" href="guest-services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="guest-aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link smooth-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a href="login.php">Login</a>
            </span>
        </div>
    </nav>

    <!-- HEADER --> 
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/header_1.png" class="d-block w-100">
                <div class="carousel-caption">
                    Healthy skin allows you to face the world with confidence.  
                </div>
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <br><br>

    <!-- RECOMMENDED -->       
    <div class="container">
        <h2>Recommended</h2>
        <br> 
        <div>
            <?php
                $sql = "SELECT  tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee, tblservice.serviceID FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.serviceID='5-WX02' OR tblservice.serviceID='3-FC07' OR tblservice.serviceID='3-FC08' OR tblservice.serviceID='5-WX05';";
                $result = $conn->query($sql);
                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
            ?> 
            <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                while($row = $result->fetch_assoc()) {
                    echo '
                        <div class="col">
                            <div class="card">
                                <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                    <div class="row justify-content-between">
                                        <div class="col-7">
                                            <p class="card-fee">' . $row["serviceFee"] . ' <p>
                                            <p class="card-sub"> ' . $row["categName"] . ' <p> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                } ?>
            </div>
        </div>
    </div>

    <br><br>

    <!-- SERVICES -->
    <div class="container">
        <ul class="tabs">
            <li data-tab-target="#all" class="active tab">All Services</li>
            <li data-tab-target="#laser" class="tab">Laser</li>
            <li data-tab-target="#hair" class="tab">Hair Removal</li>
            <li data-tab-target="#facial" class="tab">Facial Treatments</li>
            <li data-tab-target="#body" class="tab">Body Treatments</li>
            <li data-tab-target="#wax" class="tab">Waxing Treatments</li>
        </ul>

        <div class="tab-content">
            <div id="all" data-tab-content class="active">
                <br>     
                <?php
                    $sql = "SELECT tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="card-text">' . $row["categName"] . '<p>
                                                <p>' . $row["serviceFee"] . '</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } ?>
                </div>
            </div> <!-- end of all services -->
            <div id="laser" data-tab-content>
                <br>     
                <?php
                    $sql = "SELECT tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=1;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">   
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="card-text">' . $row["categName"] . '<p>
                                                <p>' . $row["serviceFee"] . '</p>
                                            </div>                    
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } ?>
                </div>
            </div> <!-- end of laser -->
            <div id="hair" data-tab-content>
                <br>     
                <?php
                    $sql = "SELECT tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=2;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="card-text">' . $row["categName"] . '<p>
                                                <p>' . $row["serviceFee"] . '</p>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } ?>
                </div>
            </div> <!-- end of hair -->
            <div id="facial" data-tab-content>
                <br>     
                <?php
                    $sql = "SELECT tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=3;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="card-text">' . $row["categName"] . '<p>
                                                <p>' . $row["serviceFee"] . '</p>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } ?>
                </div>
            </div> <!-- end of facial -->
            <div id="body" data-tab-content>
                <br>     
                <?php
                    $sql = "SELECT tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=4;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="card-text">' . $row["categName"] . '<p>
                                                <p>' . $row["serviceFee"] . '</p>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } ?>
                </div>
            </div> <!-- end of body -->
            <div id="wax" data-tab-content>
                <br>     
                <?php
                    $sql = "SELECT tblservice.image, tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=5;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"/ class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $row["serviceName"] . '</h5>
                                        <div class="row justify-content-between">
                                            <div class="col-4">
                                                <p class="card-text">' . $row["categName"] . '<p>
                                                <p>' . $row["serviceFee"] . '</p>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    } ?>
                </div>
            </div> <!-- end of wax -->
        </div>
    </div>

    <br><br><br>

    <!-- FOOTER -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-8">
                        <br> <br> 
                        <p class="footer-title">Contact Us</p>
                        <p class="footer-address">2/F 1 Cirq Building, Sen. Lorenzo Sumulong Avenue, Brgy. San Roque, Antipolo, Philippines</p>
                        <br><br>
                    </div>
                    <div class="col-6 col-md-4">
                        <p>
                            <div class="icons">
                                <br><br>
                                <a href="https://www.facebook.com/Derma101" style="color: #BE9355;"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                <a href="derma101ph@yahoo.com" style="color: #BE9355;"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>&nbsp;&nbsp;
                                <a href="derma101ph.com" style="color: #BE9355;"><i class="fa fa-link fa-lg" aria-hidden="true"></i></a>                  
                            </div>
                        </p> <br><br><br>
                        <p class="footer-copyright" style="text-align: right; color: #C0C0C0;">Copyright © 2024. All rights reserved.</p>
                    </div>
                </div>           
            </div>     
        </div>           
    </footer>
   
    <script>
        const tabs = document.querySelectorAll('[data-tab-target]')
        const tabContents = document.querySelectorAll('[data-tab-content]')

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = document.querySelector(tab.dataset.tabTarget)
                tabContents.forEach(tabContent => {
                    tabContent.classList.remove('active') })
                tabs.forEach(tab => {
                    tab.classList.remove('active') })
                tab.classList.add('active')
                target.classList.add('active')
            })
        })
    </script>
</body>
</html>