<?php
session_start();
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
</head>

<body>
    <?php include 'nav-bar.php' ?>
    <?php include 'secondary-nav.php' ?>
    <?php include 'sidebar.php' ?>

    <div class="container w-50 login-container">
        <div class="row">
            <div class="col">
                <div class="card ext-ext-rounded mt-5 border border-3">
                    <form class="login-form" action="validate.php" method="POST">
                        <h3 class="text-center pb-5">SIGN IN</h3>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control ext-rounded" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control ext-rounded" id="exampleInputPassword1" placeholder="Password" required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" value="remember" class="form-check-input" id="form-remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>

                            <?php
                            if (isset($_SESSION['InvalidLogin'])) {
                                echo $_SESSION['InvalidLogin'];
                            }
                            ?>

                            <div>
                                <a href="#" class="dec-none">Forgot Password?</a>
                            </div>

                        </div>
                        <input type="submit" name="submit" class="d-block mx-auto btn btn-success px-4 mt-2" value="Sign In">
                        <p class="text-center h6 pt-5">New to BYSAP? <a class="dec-none" href="register.php">Sign Up for free</a></p>
                    </form>
                    <?php

                    session_unset();
                    session_destroy();
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