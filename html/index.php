<?php

    require_once 'header.php';

    $stmt = $conn->prepare("SELECT shipperName FROM shipper where shipperID = 1");
    $stmt->execute();
    $stmt->bind_result($test);
    $stmt->fetch();
    $stmt->close();

    //echo $test;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CargoHaul</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
        <link rel="stylesheet" href="../css/custom-bootstrap.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
        div.shadowed {
          filter: drop-shadow: 4px 0 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        
        </style>
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href=""><img src="../images/logo.jpg" alt="CargoHaul"></a>
                </div>
                
                 <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicNav"
                    aria-controls="basicNav" aria-expanded="false" aria-label="Toggle-navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="basicNav">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shipperHome.php">Shipper</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carrierHome.php">Carrier</a>
                        </li>
                    </ul>
                </div>
            
            </div>
        </nav>

        <div class="jumbotron text-center bg-white">

                <h3>Shipping...but Better</h3>
                <br>
                <h1>Cargohaul streamlines less-than-truckload shipping for both carriers and shippers </h1>
                <br>
                <video class="w-100 h-100" autoplay loop>
                    <source src="../images/cargo truck driving.mp4" type="video/mp4" />
                </video>
        </div>
            

        </body>
        <footer>
        <!-- Copyright -->
        <div class="footer-copyright bg-secondary text-center py-3">© 2020 Copyright: CargoHaul Inc.
            </div>
        </footer>
            
</html>