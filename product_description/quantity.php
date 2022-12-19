<script>
    var add = document.querySelector(".quantity-add");
    var sub = document.querySelector(".quantity-sub");
    var quantity = document.querySelector(".quantity");

    var basenum = <?php echo $iteminfo['min_order']?>;

    add.addEventListener('click', function(e) {
        addnumber();
    })

    sub.addEventListener('click', function(e) {
        subnumber();
    })

    var qn_num=0;

    function addnumber() {
        if (qn_num < <?php echo $iteminfo['max_order'] ?>) {
            qn_num=quantity.value;
            qn_num++;
            quantity.value=qn_num;
        }
    }

    function subnumber() {
        if (qn_num > <?php echo $iteminfo['min_order'] ?>) {
            qn_num=quantity.value;
            qn_num--;
            quantity.value = qn_num;
            if(quantity.value<0){
                console.log("negartive");
            }
        }
    }

    var errbox = document.querySelector(".err-box");
    var errormsg=0;
    var form = document.querySelector("#buy-form").addEventListener('submit',(e)=>{
        if(quantity.value><?php echo $iteminfo['stock']?>||quantity.value><?php echo $iteminfo['max_order']?>||quantity.value< <?php echo $iteminfo['min_order']?>){
            errbox.textContent="Invalid Quantity";
            errormsg++;
        }
        if(quantity.value<=<?php echo $iteminfo['stock']?> && quantity.value<= <?php echo $iteminfo['max_order']?>&& quantity.value><?php echo $iteminfo['min_order']?>){
            errbox.textContent="";
            errormsg=0;
        }
        if(errormsg>0){
            e.preventDefault();
        }
    });
</script>