<div class="col-12">
    <div class="card">
        <img class="card-img-top" src="images/fish/fish.jpg" alt="">
        <div class="card-body p-4">
            <div class="d-flex mb-3">
                <h5 class="card-title"><?php echo $carousel_item['product_name']?></h5>
                <i class="far fa-heart fill d-inline-block ms-auto mag cursor-pointer name-1 heart click-jump" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Add to wishlist"></i>
            </div>
            <p class="mb-1">&#163 <?php echo number_format($carousel_item['price'],2) ?></p>
            
            <p>
            <?php 
                $avgrate=number_format($carousel_item['AVG(rating)'],1);
                $starvalue = starval($avgrate);
                $fullstarval = floor($starvalue);
                $halfstarval = ceil($starvalue-$fullstarval);
                $nostarval = 5 - ceil($fullstarval);

                star($fullstarval,$halfstarval,$nostarval);
            ?>
            </p>
        </div>
    </div>
</div>