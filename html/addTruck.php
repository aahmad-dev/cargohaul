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

        <div class="text-center">
            <hr class="text-center">
                <h4>Match Loads</h4>
            <hr>
        </div>
        
        <div class="card-body" id="loadTable">
                                        <!------------------------------------------DISPLAY TABLE----------------------------------------->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="card mt-3">
                                    <div class="card-title ml-5 my-2 mr-5">

                                        <button type="button" class="btn btn-info" onclick="document.location='carrierhome.php'">Back</button>
                                        <button type="button" class="btn btn-primary" onclick="document.location='carrierhome.php'">Show all loads</button>
                                        <!--Add Truck modal-->
                                    </div>
                    
                                <div class="modal-header">
                                    <h3 class="text-primary">Add New Truck</h3>
                                </div>
                                <div class="card-body " id="truckform">
                                    <form action="" method="">
                                        <label>Truck Type: <select id="TruckType">
                                            <option disabled selected value>-- Select Type --</option>
                                            <option value="1">40ft</option>
                                            <option value="2">35ft</option>
                                            <option value="3">20ft</option>
                                            <option value="4">Other</option>
                                        </select>
                                        </label>
                                        <br>
                                        <label>Truck Size (Pallet Accomodation): <input type="text" class="form-control my-2" id="merchant"></label>
                                        <br>
                                        <label>Truck Location: <input type="text" class="form-control my-2" size="150" id="expenseDetails"></label>
                                    </form>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success">Add</button>
                                <div>

                            </div>
                        </div>
                    </div>

        </body>
        <footer>
        <!-- Copyright -->
        <div class="footer-copyright bg-secondary text-center py-3">© 2020 Copyright: CargoHaul Inc.
            </div>
        </footer>
            
</html>