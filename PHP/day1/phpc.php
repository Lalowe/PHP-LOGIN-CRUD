<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://www.logopik.com/wp-content/uploads/edd/2018/06/Car-Rental-Logo.png" type="image/x-icon">
    <title>Car Rental</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Car Rental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="p-5 text-center bg-image" style="background-image: url('https://cdn.pixabay.com/photo/2013/07/12/12/45/car-146185_1280.png'); height: 85vh; background-size: cover;">
        <div class="mask rounded" style="background-color: rgba(0, 0, 0, 0.4); height: 80vh;">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">Car Rental</h1>
                    <h4 class="mb-3">We are helping people to find a dream-car!</h4>
                    <a class="btn btn-outline-light btn-lg" href="#!" role="button">More info</a>
                </div>
            </div>
        </div>
    </div>

    <!-- PHP Code  -->
    <?php

    $cars = array (
    "Ford" => array(
        "pic" => "https://cdn.pixabay.com/photo/2012/11/02/13/02/car-63930__480.jpg",
        "name" => "Ford Mustang",
        "availability" => "Available",
        "price" => "50$/day",
        "location" => "Office: Teststreet 1, City"
    ),
    "Tesla" => array(
        "pic" => "https://images.pexels.com/photos/7985573/pexels-photo-7985573.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        "name" => "Tesla Model X",
        "availability" => "Available",
        "price" => "80$/day",
        "location" => "Office: Street 5, City"
    ),
    "Fiat" => array(
        "pic" => "https://images.pexels.com/photos/7459480/pexels-photo-7459480.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        "name" => "Fiat Punto",
        "availability" => "Not available",
        "price" => "30$/day",
        "location" => "Office: Central Street 10, City"
    ),
    "Seat" => array(
        "pic" => "https://cdn.pixabay.com/photo/2021/08/16/16/19/car-6550633__340.jpg",
        "name" => "Seat Leon",
        "availability" => "Available",
        "price" => "40$/day",
        "location" => "Office: Teststreet 1, City"
    ),
    "Hyundai" => array(
        "pic" => "https://images.pexels.com/photos/11194510/pexels-photo-11194510.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        "name" => "Hyundai Santa Fe",
        "availability" => "Not available",
        "price" => "35$/day",
        "location" => "Office: Street 5, City"
    ),
    "Kia" => array(
        "pic" => "https://images.pexels.com/photos/9714429/pexels-photo-9714429.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        "name" => "Kia Sorento",
        "availability" => "Available",
        "price" => "35$/day",
        "location" => "Office: Central Street 10, City"
    )
    );

    ?>

    <!-- Card Row -->

    <div class="container mt-5 mb-5">

        <div class="row row-cols-xl-3 row-cols-lg-4 row-cols-md-6 row-cols-sm-6 mt-3 justify-content-center">
            <div class="card mt-3 me-3" style="width: 18rem;">
                <img src="<?php echo $cars["Ford"]["pic"] ?>" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cars["Ford"]["name"] ?></h5>
                    <hr style="width: 70%">
                    <p class="card-text text-success"><?php echo $cars["Ford"]["availability"] ?></p>
                    <p class="card-text"><?php echo $cars["Ford"]["price"] ?></p>
                    <p class="card-text"><?php echo $cars["Ford"]["location"] ?></p>
                </div>
            </div>

            <div class="card mt-3 me-3" style="width: 18rem;">
                <img src="<?php echo $cars["Tesla"]["pic"] ?>" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cars["Tesla"]["name"] ?></h5>
                    <hr style="width: 70%">
                    <p class="card-text text-success"><?php echo $cars["Tesla"]["availability"] ?></p>
                    <p class="card-text"><?php echo $cars["Tesla"]["price"] ?></p>
                    <p class="card-text"><?php echo $cars["Tesla"]["location"] ?></p>
                </div>
            </div>

            <div class="card mt-3 me-3" style="width: 18rem;">
            <img src="<?php echo $cars["Fiat"]["pic"] ?>" class="card-img-top" alt="...">
            <hr>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cars["Fiat"]["name"] ?></h5>
                    <hr style="width: 70%">
                    <p class="card-text text-danger"><?php echo $cars["Fiat"]["availability"] ?></p>
                    <p class="card-text"><?php echo $cars["Fiat"]["price"] ?></p>
                    <p class="card-text"><?php echo $cars["Fiat"]["location"] ?></p>
                </div>
            </div>
        </div>

        <div class="row row-cols-xl-3 row-cols-lg-4 row-cols-md-6 row-cols-sm-6 mt-3 justify-content-center">
            <div class="card mt-3 me-3" style="width: 18rem;">
                <img src="<?php echo $cars["Seat"]["pic"] ?>" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cars["Seat"]["name"] ?></h5>
                    <hr style="width: 70%">
                    <p class="card-text text-success"><?php echo $cars["Seat"]["availability"] ?></p>
                    <p class="card-text"><?php echo $cars["Seat"]["price"] ?></p>
                    <p class="card-text"><?php echo $cars["Seat"]["location"] ?></p>
                </div>
            </div>

            <div class="card mt-3 me-3" style="width: 18rem;">
            <img src="<?php echo $cars["Hyundai"]["pic"] ?>" class="card-img-top" alt="...">
            <hr>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cars["Hyundai"]["name"] ?></h5>
                    <hr style="width: 70%">
                    <p class="card-text text-danger"><?php echo $cars["Hyundai"]["availability"] ?></p>
                    <p class="card-text"><?php echo $cars["Hyundai"]["price"] ?></p>
                    <p class="card-text"><?php echo $cars["Hyundai"]["location"] ?></p>
                </div>
            </div>

            <div class="card mt-3 me-3" style="width: 18rem;">
            <img src="<?php echo $cars["Kia"]["pic"] ?>" class="card-img-top" alt="...">
            <hr>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $cars["Kia"]["name"] ?></h5>
                    <hr style="width: 70%">
                    <p class="card-text text-success"><?php echo $cars["Kia"]["availability"] ?></p>
                    <p class="card-text"><?php echo $cars["Kia"]["price"] ?></p>
                    <p class="card-text"><?php echo $cars["Kia"]["location"] ?></p>
                </div>
            </div>
        </div>
    </div> 

   
    <!-- Footer -->
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Cars</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Offer</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Reviews</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
        </ul>
        <p class="text-center text-muted">© 2022 Car Rental</p>
    </footer>

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>