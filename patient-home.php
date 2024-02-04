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
        .footer-container {
            background: url('bg.png') center/cover no-repeat;
            padding: 20px;
            color: black;
            text-align: center;
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
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Appointments</a>
                </li>
            </ul>
            <span class="navbar-text">
                Hi, Juan!
            </span>
            </div>
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
                $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.serviceID='5-02' OR tblservice.serviceID='3-07' OR tblservice.serviceID='3-08' OR tblservice.serviceID='5-05';";
                $result = $conn->query($sql);
                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
            ?> 
            <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                while($row = $result->fetch_assoc()) {
                    echo '
                        <div class="col">
                            <div class="card h-100">
                                <img src="images/placeholder.png" class="card-img-top">
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
                    $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="images/placeholder.png" class="card-img-top">
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
                    $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=1;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="images/placeholder.png" class="card-img-top">
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
                    $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=2;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="images/placeholder.png" class="card-img-top">
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
                    $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=3;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="images/placeholder.png" class="card-img-top">
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
                    $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=4;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="images/placeholder.png" class="card-img-top">
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
                    $sql = "SELECT tblservice.serviceName, tblcategory.categName, tblservice.serviceFee FROM tblservice INNER JOIN tblcategory ON tblservice.categID=tblcategory.categID WHERE tblservice.categID=5;";
                    $result = $conn->query($sql);

                if (!$result) { die("Invalid Query: " . $conn->connect_error);}
                ?> 
                <div class="row row-cols-1 row-cols-md-4 g-4"> <?php
                    while($row = $result->fetch_assoc()) {
                        echo '
                            <div class="col">
                                <div class="card h-100">
                                    <img src="images/placeholder.png" class="card-img-top">
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
    <!-- <div class="footer-container">
        <div class="bg" style="background: url('bg.png') center/cover no-repeat;">
            <div class="Tagline">
            <h2>Trust only the experts, Trust DERMA 101</h2>
            </div>
            <div class="contact-info">
            <p>MONDAY to SUNDAY 10am - 8pm</p>
            <p>US AT 2nd Floor (Unit 201-203) 1 CIRQ Building, Sen. Lorenzo Sumulong Avenue, Brgy. San Roque, Antipolo City</p>
            <p>(In front of Unciano Hospital, Above Converge and Beside McDonalds)</p>
            </div>

            Icons with links
            <div class="social-icons">
            <a href="https://www.facebook.com/Derma101" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="mailto:derma101ph@yahoo.com" target="_blank">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="http://www.derma101ph.com/" target="_blank">
                <i class="fas fa-globe"></i>
            </a>
        </div> -->
    </div>



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