<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-<?php echo $_GET['cat']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <?php include 'nav-bar.php' ?>
    <?php include 'secondary-nav.php' ?>
    <?php include 'sidebar.php' ?>
    <?php
    include 'connection.php';
    if (isset($_GET['cat'])) {
        $cat = $_GET['cat'];
        $sql = "SELECT `product_id`,`product_name`,`price`,`stock`,`discount`,`shop_name` from `product` INNER JOIN shop on product.shop_no = shop.shop_no WHERE category_name='$cat'";
        $items = mysqli_query($connection, $sql);
    }
    ?>
    <div class="container-fluid">
        <div class="row  py-2 border-bottom shadow-sm">
            <div class="col-auto align-self-center">
                <p class="m-0">
                    <?php if (mysqli_num_rows($items) > 0) {
                        $results = mysqli_num_rows($items);
                        echo "showing $results result(s) for";
                    } else {
                        echo "no results found for";
                    }
                    ?>

                    <span class="skyblue-txt fw-bold">"<?php echo "$cat" ?>"<span>
                </p>
            </div>
            <div class="col-2 ms-auto">
                <select class="form-select form-select-sm search-select ext-rounded" aria-label=".form-select-lg">
                    <option value="1" selected>Price: High to Low</option>
                    <option value="2">Price: Low to High</option>
                    <option value="3">Name: Ascending</option>
                    <option value="3">Name: Descending</option>
                    <option value="4">Rating: High to Low</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-2 border-end border-2">
                <div class="search-options">

                    <p class="h5 pt-3 ps-4 fw-bold">Avg Rating</p>
                    <ul class="list-unstyled ps-4">
                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i> & up</li>
                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> & up</li>
                        <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> & up</li>
                        <li><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i> & up</li>
                    </ul>

                    <p class="h5 pt-3 ps-4 fw-bold">Price</p>
                    <ul class="list-unstyled ps-4">
                        <li>Under 2&#163</li>
                        <li>Under 5&#163</li>
                        <li>Under 10&#163</li>
                        <li>Under 20&#163</li>
                        <li>
                            <form action="" method="GET">
                                <div class="row align-items-center pt-2 px-2">
                                    <div class="col-4 p-0 pe-2 position-relative">
                                        <span class="pound-sign">&#163</span>
                                        <input class="form-control pe-0 ps-3" type="text" placeholder="Min">
                                    </div>
                                    <div class="col-4 p-0 pe-2 position-relative">
                                        <span class="pound-sign">&#163</span>
                                        <input class="form-control pe-0 ps-3" type="text" placeholder="Max">
                                    </div>
                                    <div class="col-2 p-0 ps-auto">
                                        <input class="btn btn-dark" type="submit" value="Go" name="price">
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <p class="h5 pt-3 ps-4 fw-bold">Availability</p>
                    <form action="" class="ps-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="stock">
                            Include out of stock
                        </label>
                    </form>
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <?php
                    if (mysqli_num_rows($items)) {
                        while ($item = mysqli_fetch_assoc($items)) {
                            include 'product_category/individual_products.php';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>

</html>