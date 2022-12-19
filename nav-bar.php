<nav class="navbar black-bg navbar-expand px-4 flex-row-reverse">
    <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
            <?php
                if(isset($_COOKIE['name'])){
                    echo '<p class = "ps-4 link-white" >'.$_COOKIE['name'].'</p>';

                    echo '<a class="mag-2 nav-link ps-4 link-white" href="signout.php">Sign Out</a>';
                }
                else if(isset($_SESSION['name'])){
                    echo '<p class = "ps-4 link-white" >'.$_SESSION['name'].'</p>';
                    echo '<a class="mag-2 nav-link ps-4 link-white" href="signout.php">Sign Out</a>';
                }
                else{
                    echo '<a class="mag-2 nav-link ps-4 link-white" href="signin.php">Sign In</a>';
                }
            ?>   
        </li>
        <li class="nav-item">
            <a class="mag-2 nav-link ps-4" href="#" data-bs-placement="bottom" data-bs-toggle="tooltip" title="View the wishlist"><i class="fas fa-heart white-logo" ></i></a>
        </li>
        <li class="nav-item">
            <a class="mag-2 nav-link ps-4" href="cart.php" data-bs-placement="bottom" data-bs-toggle="tooltip" title="View your cart"><i class="fas fa-shopping-cart white-logo" ></i></a>
        </li>
    </ul>
    <form class="d-flex position-relative">
        <input class="form-control me-2 rounded-pill nav-input" type="search" placeholder="Search" aria-label="Search">
        <i class="search-icon d-block fas fa-search fab"></i>
    </form>
    <a class="navbar-brand me-auto" href="homepage.php">
        <img src="images/logo/logo-dark.svg" alt="logo" width="100" height="30" class="d-inline-block align-text-top overflow-visible">
    </a>
</nav>