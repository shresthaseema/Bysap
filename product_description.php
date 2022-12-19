<?php
session_start();

include 'connection.php';
if (isset($_GET['item'])) {
    $item = htmlentities($_GET['item']);

    $item_info_sql = "SELECT `product_id`, `product_name`,`description`,`price`,`stock`,`min_order`,`max_order`,`allergy_information`,`discount`,`category_name`, shop_name FROM `product` INNER JOIN shop on product.shop_no = shop.shop_no WHERE product_id=$item";

    $item_review_sql = "SELECT `review_id`,`message`,`rating`,`fullname` FROM ((`review` INNER JOIN users on review.user_id = users.user_id) INNER JOIN product ON product.product_id=review.product_id) WHERE product.product_id=$item AND rating>0";

    $img_sql = "SELECT `image_name` from `images` WHERE product_id=$item";

    $iteminfos = mysqli_query($connection, $item_info_sql);
    $itemratings = mysqli_query($connection, $item_review_sql);
    $images = mysqli_query($connection, $img_sql);
}

if (mysqli_num_rows($iteminfos) > 0) {
    $iteminfo = mysqli_fetch_assoc($iteminfos);
}

$itemcategory = $iteminfo['category_name'];
$currentitem = $iteminfo['product_id'];
$itemdiscount = $iteminfo['discount'];

$carousel_sql = "SELECT product.product_id,`product_name`,`price`,`rating`,AVG(rating), COUNT(rating) from product LEFT JOIN review ON product.product_id=review.product_id WHERE category_name='$itemcategory' AND product.product_id<>$currentitem AND rating>0 GROUP BY product.product_id";

$ratingno = mysqli_num_rows($itemratings);
$ratingsum = 0;


$rating_1 = 0;
$rating_2 = 0;
$rating_3 = 0;
$rating_4 = 0;
$rating_5 = 0;

if ($ratingno > 0) {
    while ($itemrating = mysqli_fetch_assoc($itemratings)) {
        $ratingsum += $itemrating['rating'];
        switch ($itemrating['rating']) {
            case 1:
                $rating_1++;
                break;
            case 2:
                $rating_2++;
                break;
            case 3:
                $rating_3++;
                break;
            case 4:
                $rating_4++;
                break;
            case 5:
                $rating_5++;
                break;
        }
    }

    $rating_1 = number_format((($rating_1 / $ratingno) * 100), 1);
    $rating_2 = number_format((($rating_2 / $ratingno) * 100), 1);
    $rating_3 = number_format((($rating_3 / $ratingno) * 100), 1);
    $rating_4 = number_format((($rating_4 / $ratingno) * 100), 1);
    $rating_5 = number_format((($rating_5 / $ratingno) * 100), 1);
}
if ($ratingno > 0) {
    $avgrating = number_format(($ratingsum / $ratingno), 1);
} else {
    $avgrating = 0;
}

include 'product_description/star-val.php';

$starval = starval($avgrating);
$fullstar = floor($starval);
$halfstar = ceil($starval - $fullstar);
$emptystar = 5 - ceil($starval);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'nav-bar.php' ?>
    <?php include 'secondary-nav.php' ?>
    <?php include 'sidebar.php' ?>
    <?php include 'product_description/starify.php' ?>
    <?php include 'product_description/starify_ratable.php'; ?>

    <div class="container">
        <div class="row py-3 pt-5 w-100 mx-auto main-row">
            <div class="col-xl-1 col-md-2 col-sm-12 p-0 me-3">
                <div class="d-flex flex-md-column flex-sm-row justify-content-between h-100">
                    <?php
                    $imgno = 0;
                    while ($image = mysqli_fetch_assoc($images)) {
                        $imgno++;
                        echo "<div>";
                        echo "<img class='resp-img border border-2 rounded shadow-sm mag disp-img-" . $imgno . " dimmed all-disp-img' src='" . $image['image_name'] . "'>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-9 col-sm-12 me-3 pt-md-0 pt-5 px-0">
                <img class="resp-img border border-2 rounded shadow-sm disp-main" src="" alt="">
            </div>

            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 mt-lg-0 mt-4 px-0">
                <div class="col h-100">
                    <p class="h4 fw-bold mb-2"><?php echo $iteminfo['product_name'] ?></p>
                    <p class="mb-2"><?php echo $iteminfo['shop_name'] ?></p>

                    <div class="bottom-border pb-2">

                        <?php
                        star($fullstar, $halfstar, $emptystar);
                        ?>
                        <span class="d-inline-block ps-3">
                            <?php if ($ratingno == 0) {
                                echo "Not rated";
                            } else {
                                echo "$ratingno ratings";
                            } ?>
                        </span>
                    </div>
                    <div class="pt-2">
                        Price: <span class="<?php
                                            if ($itemdiscount > 0) {
                                                echo 'text-decoration-line-through';
                                                $newprice = 1;
                                            } ?>"> &#163 <?php echo number_format($iteminfo['price'], 2) ?></span>
                        <?php
                        if (isset($newprice)) {
                            $newprice = $iteminfo['price'] - ($itemdiscount / 100) * $iteminfo['price'];
                            echo "<span class='ps-2'>&#163 " . $newprice . "</span>";
                            echo "<span class='text-success ps-3'>" . $itemdiscount . "% off</span>";
                        }
                        ?>
                    </div>
                    <form id="buy-form" class="position-relative pt-3" method="POST" action="buycart.php?item=<?php echo $_GET['item'] ?>">
                        <div class="col-sm-5 col-8">
                            <div class="input-group mb-4">
                                <button class="btn btn-outline-secondary quantity-sub" type="button" id="button-addon1">-</button>
                                <input type="text" class="form-control quantity text-center" placeholder="" aria-label="Product quantity" aria-describedby="button-addon1" value="<?php echo $iteminfo['min_order'] ?>" name="quantity">
                                <button class="btn btn-outline-secondary quantity-add" type="button" id="button-addon1">+</button>
                            </div>

                        </div>
                        <span class="err-box text-danger"></span>

                        <div class="<?php
                                    if ($iteminfo['stock'] > 0) {
                                        echo "text-success";
                                    } else {
                                        echo "text-danger";
                                    } ?>">
                            <?php
                            if ($iteminfo['stock'] > 0) {
                                echo $iteminfo['stock'] . " in stock.";
                            } else {
                                echo "Out of Stock.";
                            }
                            ?>
                        </div>
                        <div class="text-danger">
                            (<?php echo $iteminfo['max_order'] ?> limit per customer)
                        </div>
                        <div class="pt-3">
                            <input class="px-2 py-1 me-3 cart-btn" type="submit" value="Add to Cart" name="Cart">
                            <input class="px-2 py-1 buy-btn" type="submit" value="Buy Now" name="Buy">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5">
                <h5 class="fw-bold pb-4">Product Description</h5>
                <p>Greetings from <?php echo $iteminfo['shop_name'] ?>,</p>
                <p><?php echo $iteminfo['description'] ?></p>
                <h5 class="fw-bold py-4">Allergy Information</h4>
                    <p><?php echo $iteminfo['allergy_information'] ?></p>
            </div>
            <div class="col-xl-5 col-md-6 col-sm-8 offset-xl-2 offset-md-1">
                <h5 class="fw-bold pb-4 pt-md-0 pt-sm-5">Product Details</h5>
                <div class="row">
                    <div class="col-xl-7 col-sm-9">
                        <div class="mb-1 d-flex justify-content-between">
                            <div>Category:</div>
                            <div><?php echo ucfirst($iteminfo['category_name']) ?></div>
                        </div>
                        <div class="mb-1 d-flex justify-content-between">
                            <div>Shop Name:</div>
                            <div><?php echo $iteminfo['shop_name'] ?></div>
                        </div>
                        <div class="mb-1 d-flex justify-content-between">
                            <div>Available Stock:</div>
                            <div><?php echo $iteminfo['stock'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pb-4 bottom-border">
            <div class="col-xl-3 col-md-5 col-sm-7">
                <h5 class="fw-bold pb-4">Cutomer Reviews</h5>
                <div>
                    <?php
                    star($fullstar, $halfstar, $emptystar);
                    ?>
                    <span class="d-inline-block ps-2"><?php echo $avgrating ?> out of 5 stars</span>
                </div>
                <div class="pb-3 mt-1">
                    <?php if ($ratingno == 0) {
                        echo "Not rated";
                    } else {
                        echo "$ratingno ratings";
                    } ?>
                </div>
                <div class="position-relative d-flex">
                    <div class="d-inline-block fit-width">5 star</div>
                    <div class="d-inline-block star">
                        <div class="star-indicator-1"></div>
                    </div>
                    <span class="d-inline-block ps-4"><?php echo $rating_5 ?>%</span>
                </div>
                <div class="position-relative d-flex">
                    <div class="d-inline-block fit-width">4 star</div>
                    <div class="d-inline-block star">
                        <div class="star-indicator-2"></div>
                    </div>
                    <span class="d-inline-block ps-4"><?php echo $rating_4 ?>%</span>
                </div>
                <div class="position-relative d-flex">
                    <div class="d-inline-block fit-width">3 star</div>
                    <div class="d-inline-block star">
                        <div class="star-indicator-3"></div>
                    </div>
                    <span class="d-inline-block ps-4"><?php echo $rating_3 ?>%</span>
                </div>
                <div class="position-relative d-flex">
                    <div class="d-inline-block fit-width">2 star</div>
                    <div class="d-inline-block star">
                        <div class="star-indicator-4"></div>
                    </div>
                    <span class="d-inline-block ps-4"><?php echo $rating_2 ?>%</span>
                </div>
                <div class="position-relative d-flex">
                    <div class="d-inline-block fit-width">1 star</div>
                    <div class="d-inline-block star">
                        <div class="star-indicator-5"></div>
                    </div>
                    <span class="d-inline-block ps-4"><?php echo $rating_1 ?>%</span>
                </div>
            </div>
        </div>
        <div class="row mt-5 pb-5 bottom-border">
            <h5 class="fw-bold pb-4 m-0">Frequently bought with this item</h5>
            <div class="col">
                <div class="carousel-row">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $carousel_items = mysqli_query($connection, $carousel_sql);
                        $totalitems = 5;
                        while (($carousel_item = mysqli_fetch_assoc($carousel_items)) && $totalitems > 0) {
                            echo "<div class='item'>";
                            include 'product_description/slider_products.php';
                            echo "</div>";
                            $totalitems--;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 pb-4">
            <div class="col">
                <h5 class="fw-bold pb-4">Top reviews</h5>
                <?php
                $itemratings = mysqli_query($connection, $item_review_sql);

                while ($itemrating = mysqli_fetch_assoc($itemratings)) {
                    echo "<div>";
                    echo "<h6 class='fw-bold'>" . $itemrating['fullname'] . "</h4>";
                    echo "<p>" . $itemrating['message'] . "</p>";
                    echo "</div>";
                }

                ?>
            </div>
        </div>
        <div class="row mt-5 pb-4">
            <div class="col-lg-5 col-md-7 col-sm-8">
                <h5 class="fw-bold pb-4">Review this product</h5>
                <p class="<?php
                            if (!isset($_SESSION['name']) and !isset($_SESSION['cookies'])) {
                                echo "text-danger";
                            } else {
                                echo "text-success";
                            }
                            ?>"><?php
                                if (!isset($_SESSION['name']) and !isset($_SESSION['cookies'])) {
                                    echo "You can't give reviews or ratings without signing in";
                                } else {
                                    echo "Give your review";
                                }
                                ?></p>
                <p class="mb-2">Give/Update the product rating</p>
                <div class="pb-4">
                    <?php
                    if (!isset($_SESSION['id']) and !isset($_COOKIE['id'])) {
                        star(0, 0, 5);
                    } elseif (isset($_SESSION['id'])) {
                        $ratingsql = "SELECT * FROM review WHERE user_id=" . $_SESSION['id'] . " AND product_id=" . $_GET['item'];
                        $ratings = mysqli_query($connection, $ratingsql);
                        if (mysqli_num_rows($ratings) < 1) {
                            star_rate(0, 0, 5);
                        } else {
                            $rating = mysqli_fetch_assoc($ratings);
                            if ($rating['rating'] < 1) {
                                star_rate(0, 0, 5);
                            } else {
                                $userfullstars = $rating['rating'];
                                $userhalfstars = 0;
                                $useremptystars = 5 - $userfullstars;
                                star_rate($userfullstars, $userhalfstars, $useremptystars);
                            }
                        }
                        // star_rate($fullstar, $halfstar, $emptystar);
                    } else {
                        $fullname = $_COOKIE['name'];
                    }
                    ?>
                    <span></span>
                </div>
                <p>Share your thoughts with other customers</p>
                <form method="POST" action="comments.php?item=<?php echo "$currentitem" ?>">
                    <textarea class="form-control" placeholder="Write a new or update an existing review" id="floatingTextarea2" name="comment" required></textarea>
                    <input class="px-3 mt-2 float-end" type="submit" value="Send" name="comment_sub" <?php if (!isset($_SESSION['name']) && !isset($_COOKIE['name'])) {
                                                                                                            echo "disabled";
                                                                                                        } ?>>
                </form>
                <p><?php
                    if (isset($_SESSION['c_message'])) {
                        echo $_SESSION['c_message'];
                        $_SESSION['c_message'] = '';
                    }
                    ?></p>
            </div>
        </div>

    </div>


    <?php include 'footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/owl.js" type="text/javascript"></script>

    <script src="js/superslider.js" type="text/javascript"> </script>

    <?php include 'product_description/star-bar.php' ?>

    <?php include 'product_description/rater.php' ?>

    <?php include 'product_description/quantity.php' ?>
</body>

</html>