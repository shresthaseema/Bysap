<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Cart</title>

<body>

    <?php include 'nav-bar.php' ?>
    <?php include 'secondary-nav.php' ?>
    <?php include 'sidebar.php' ?>

    <div class="container-fluid">
        <div class="card card-container mt-5 ext-rounded">
            <div class="header-card">
                <h3>Shopping Cart</h3>
            </div>
            <div class="row">
                <div class="col-md-8 cart px-5">
                    <div class="title">
                        <div class="row">
                            <div class="col">
                                <h4><b>Product</b></h4>
                            </div>
                            <div class="col"></div>
                            <div class="col align-self-center text-right text-muted">Quantity</div>
                            <div class="col align-self-center text-right text-muted">Price</div>
                            <div class="col align-self-center text-right text-muted">Total</div>
                            <div class="col align-self-center text-right text-muted"></div>

                        </div>

                    </div>
                    <div class="row border-top border-bottom">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="prod-img img-fluid" src="images/img.png"></div>
                            <div class="col">
                                <div class="row text-muted">Product Name</div>
                                <div class="row">Category</div>
                                <div class="row">By:Shop Name</div>
                            </div>

                            <div class="col"> <a href="#" class="border incdec-link">-</a><a href="#" class="border incdec-link">1</a><a href="#" class="border incdec-link">+</a> </div>
                            <div class="col">&pound; 4.5 </div>
                            <div class="col">&pound; 4.5</div>
                            <div class="col"><input type="submit" value="Remove" name="remove" class="btn btn-outline-dark ext-m-rounded"></div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="row main align-items-center">
                            <div class="col-2"><img class="prod-img img-fluid" src="images/img.png"></div>
                            <div class="col">
                                <div class="row text-muted">Product Name</div>
                                <div class="row">Category</div>
                                <div class="row">By:Shop Name</div>
                            </div>
                            <div class="col"> <a href="#" class="border incdec-link">-</a><a href="#" class="border incdec-link">1</a><a href="#" class="border incdec-link">+</a> </div>
                            <div class="col">&pound; 12</div>
                            <div class="col">&pound; 24 </div>
                            <div class="col"><input type="submit" value="Remove" name="remove" class="btn btn-outline-dark ext-m-rounded"></div>
                            
                        </div>
                    </div>

                    <div class="row border-top">
                        <div class="row main align-items-center">
                            <div class="col"><button class="btn btn-outline-dark ext-m-rounded" type="submit">Remove all items</button></div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 summary px-5">
                    <div>
                        <h5><b>Order Summary</b></h5>
                    </div>
                    <hr>
                    <div class="order-row d-flex">
                        <div class="col">Total items: </div>
                        <div class="col text-right">2</div>
                    </div>

                    <div class="order-row d-flex">
                        <div class="col">Sub Total: </div>
                        <div class="col text-right"> &pound;28.5</div>
                    </div>
                    <div class="order-row d-flex">
                        <div class="col">Coupon Code: </div>
                        <div class="col text-right"><input class="cart-input px-2"id="code" placeholder="Enter your code"></div>
                    </div>
                    <div class="order-row d-flex">
                        <div class="col">Discount: </div>
                        <div class="col text-right"> &pound;1.5</div>
                    </div>

                    <div class="order-row d-flex totals">
                        <div class="col">TOTAL:</div>
                        <div class="col text-right">&pound;27.5</div>
                    </div>
                    <input type="submit" name="checkout" value="PROCEED TO CHEKCOUT" class="btn btn-outline-dark ext-m-rounded">

                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/04614f4329.js" crossorigin="anonymous"></script>

</html>