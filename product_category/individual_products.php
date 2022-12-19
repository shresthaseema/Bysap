<div class="col-3 mag-sm">
    <div class="col">
        <img class="resp-img" src="images/greens/greensg.jpg" alt="">
    </div>
    <div class="col p-1">
        <a href="<?php echo 'product_description.php?item=' . $item['product_id'] ?>">
            <p class="h5"><?php echo $item['product_name']; ?></p>
        </a>
        <p class="m-sm "><?php echo "&#163 " . $item['price']; ?></p>
        <p class="m-sm <?php if ($item['stock'] > 0) {
                            echo "text-success";
                        } else {
                            echo "text-danger";
                        } ?>"><?php echo $item['stock'] . " item(s) available in stock"; ?></p>
        <p class="m-sm"><?php if ($item['discount'] > 0) {
                            echo $item['discount'] . " percentage off";
                        } ?></p>
        <p class="m-sm"><?php echo "Buy From " . $item['shop_name']; ?></p>
    </div>
</div>