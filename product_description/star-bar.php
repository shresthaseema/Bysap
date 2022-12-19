<script type="text/javascript">
    var bar_indicator1 = document.querySelector('.star-indicator-1');
    var bar_indicator2 = document.querySelector('.star-indicator-2');
    var bar_indicator3 = document.querySelector('.star-indicator-3');
    var bar_indicator4 = document.querySelector('.star-indicator-4');
    var bar_indicator5 = document.querySelector('.star-indicator-5');

    bar_indicator1.style.width = "<?php echo $rating_5 . '%' ?>"
    bar_indicator2.style.width = "<?php echo $rating_4 . '%' ?>"
    bar_indicator3.style.width = "<?php echo $rating_3 . '%' ?>"
    bar_indicator4.style.width = "<?php echo $rating_2 . '%' ?>"
    bar_indicator5.style.width = "<?php echo $rating_1 . '%' ?>"
</script>