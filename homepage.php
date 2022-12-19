<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BYSAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- primary-navigation-bar -->
    <?php
    include 'nav-bar.php'
    ?>

    <!-- slider-integrated-with-secondary-navigation -->
    <div class="slide-row">
        <div id="carouselExampleControls" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">

                    <img src="images/banner/a1.svg" class="slide-image" alt="...">
                </div>
                <div class="carousel-item h-100">
                    <img src="images/banner/a2.svg" class="slide-image" alt="...">
                </div>
                <div class="carousel-item h-100">
                    <img src="images/banner/a3.svg" class="slide-image" alt="...">
                </div>
                <!-- secondary-menu -->
                <div class="container-fluid menu-container">
                    <ul class="nav py-1 px-4">
                        <!-- side-bar-toggler -->
                        <li class="nav-item">
                            <a class="custom-font nav-link position-relative mag text-dark" data-bs-toggle="offcanvas" href="#sideBar" role="button" aria-controls="offcanvasExample">
                                <i class="fas fa-bars pe-3 fa-1x"></i><span class="thislink">All</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="custom-font nav-link text-dark underline" href="#">Today's deals</a>
                        </li>
                        <li class="nav-item">
                            <a class="custom-font nav-link text-dark underline" href="#">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a class="custom-font nav-link text-dark underline" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="custom-font nav-link text-dark underline" href="#">Contact</a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a class="custom-font nav-link text-dark underline" href="#">BYSAP's View on COVID-19</a>
                        </li>
                    </ul>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- side-bar-components -->
    <?php include 'sidebar.php' ?>

    <div class="container py-4 mt-4">
        <div class="row g-3">
            <!-- left-hand column -->
            <div class="col-9">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="card h-100 p-0">
                            <a href="shop.php?cat=bakery" class="d-inline-block h-100 w-100 img-link position-relative overflow-hidden dec-none">
                                <div class="image-overlay position-absolute rounded"></div>
                                <img class=" resp-img" src="images/bakery/bakeryb.jpg" alt="bakery">
                                <p class="h4 position-absolute dark-text">Bakery</p>
                                <div class="d-block btn btn-light rounded-pill position-relative w-50 mx-auto">Shop Now</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card h-100 p-0">
                            <a href="shop.php?cat=butchers" class="d-inline-block h-100 w-100 img-link position-relative overflow-hidden dec-none">
                                <div class="image-overlay position-absolute rounded"></div>
                                <img class=" resp-img" src="images/meat/butcherb.jpg" alt="bakery">
                                <p class="h4 position-absolute dark-text">Butchers</p>
                                <div class="d-block btn btn-light rounded-pill position-relative w-50 mx-auto">Shop Now</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card h-100 p-0">
                            <a href="shop.php?cat=greens" class="d-inline-block h-100 w-100 img-link position-relative overflow-hidden dec-none">
                                <div class="image-overlay position-absolute rounded"></div>
                                <img class=" resp-img" src="images/greens/greensg.jpg" alt="bakery">
                                <p class="h4 position-absolute dark-text">Greens</p>
                                <div class="d-block btn btn-light rounded-pill position-relative w-50 mx-auto">Shop Now</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card h-100 p-0">
                            <a href="shop.php?cat=Fish" class="d-inline-block h-100 w-100 img-link position-relative overflow-hidden dec-none">
                                <div class="image-overlay position-absolute rounded"></div>
                                <img class=" resp-img" src="images/fish/fishf.jpg" alt="bakery">
                                <p class="h4 position-absolute dark-text">Fish</p>
                                <div class="d-block btn btn-light rounded-pill position-relative w-50 mx-auto">Shop Now</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card h-100 p-0">
                            <a href="shop.php?cat=delicacy" class="d-inline-block h-100 w-100 img-link position-relative overflow-hidden dec-none">
                                <div class="image-overlay position-absolute rounded"></div>
                                <img class=" resp-img" src="images/delicacy/delicacyd.jpg" alt="bakery">
                                <p class="h4 position-absolute dark-text">Delicacy</p>
                                <div class="d-block btn btn-light rounded-pill position-relative w-50 mx-auto">Shop Now</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card h-100 p-0">
                            <a href="#" class="d-inline-block h-100 w-100 img-link position-relative overflow-hidden dec-none">
                                <div class="image-overlay position-absolute rounded"></div>
                                <img class=" resp-img" src="images/banner/banner2.svg" alt="bakery">
                                <div class="d-block btn btn-light rounded-pill position-relative w-50 mx-auto">Shop Now</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- right hand column -->
            <div class="col-3 d-flex flex-column">
                <!-- button-container -->
                <div>
                    <div class="card d-flex flex-column p-3 text-center p-0">
                        <p class="h3">Sign In for best experience</p>
                        <div class="btn btn-dark w-75 d-inline-box mx-auto mag"> <a class="text-light dec-none" href = "signin.php">Sign In</a></div>
                    </div>
                </div>
                <!-- ad-container -->
                <div class="flex-grow-1 mt-3">
                    <div class="card p-0 h-100">
                        <img class="resp-img" src="images/banner/banner.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- trending-section -->
    <div class="container my-4 pb-4">
        <h2>Trending Products</h2>
        <hr class="border border-1 border-dark mb-4">
        <div class="row g-4">
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/fish/fish.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-1 heart click-jump" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Add to wishlist"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/greens/mustard.png" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-2 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/greens/parsnips.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-3 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/bakery/bakery.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-4 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/greens/spotato.jpeg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-5 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/meat/chicken.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-6 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/bakery/tart.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-7 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/delicacy/ribeye.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-8 heart click-jump"></i>
                        </div>
                        <p class="mb-1">Price</p>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- today's-deals-section -->
    <div class="container my-4">
        <h2>Today's Deals</h2>
        <hr class="border border-1 border-dark mb-4">
        <div class="row g-4">
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/delicacy/gfrice.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-9 heart click-jump"></i>
                        </div>
                        <span class="d-inline-block mb-1">Price</span>
                        <span class="d-inline-block mb-1 text-decoration-line-through text-danger">Price</span>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/bakery/khari.png" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-10 heart click-jump"></i>
                        </div>
                        <span class="d-inline-block mb-1">Price</span>
                        <span class="d-inline-block mb-1 text-decoration-line-through text-danger">Price</span>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/delicacy/b.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-11 heart click-jump"></i>
                        </div>
                        <span class="d-inline-block mb-1">Price</span>
                        <span class="d-inline-block mb-1 text-decoration-line-through text-danger">Price</span>

                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card jump">
                    <img class="card-img-top" src="images/meat/pork.jpg" alt="">
                    <div class="card-body p-4">
                        <div class="d-flex mb-3">
                            <h5 class="card-title">Item Name</h5>
                            <i class = "far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-12 heart click-jump"></i>
                        </div>
                        <span class="d-inline-block mb-1">Price</span>
                        <span class="d-inline-block mb-1 text-decoration-line-through text-danger">Price</span>
                        <p>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "fas fa-star"></i>
                        <i class = "far fa-star"></i>
                        <i class = "far fa-star"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include 'footer.php';
    ?>

<?php

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
    echo '<a href="signout.php">Sign Out</a>';   
}
else{

    if(isset($_SESSION['name'])){
        echo $_SESSION['name'];
        echo '<a href="signout.php">Sign Out</a>';
    }

    else{
        echo '<a href="signin.php">Sign In</a>';
      }
}

?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="js/heart.js"></script>

    <script src="js/tooltip.js"></script>

</body>

</html>