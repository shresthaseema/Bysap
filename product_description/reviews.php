<?php     
    while($reviews=mysqli_fetch_assoc($itemratings)){
        echo "<div>";
        echo "<h6 class='cust-name'>".$reviews['fullname']."</h6>";
        echo "<p>".$reviews['message']."</p>";
        echo "</div>";
    }
?>