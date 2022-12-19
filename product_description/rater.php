<script>
    var ratable_stars = document.getElementsByClassName('ratable-star');
    var ratable_stars = Array.from(ratable_stars);

    ratable_stars.forEach((ratable_star) => {
        ratable_star.addEventListener('click', e => {
            star_click(e)
        })
    })

    function star_click(e) {
        var class_name = e.target.classList[3];
        class_name = class_name.split("-")
        window.location = `rating.php?rating=${class_name[1]}&item=<?php echo $_GET['item'] ?>`;
    }
</script>