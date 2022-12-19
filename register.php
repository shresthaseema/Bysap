<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register</title>
</head>

<body>
    <?php include 'nav-bar.php' ?>
    <?php include 'secondary-nav.php' ?>
    <?php include 'sidebar.php' ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h3 class="text-center pb-4">Create an Account</h3>
                <div class="card position-relative form-box mx-auto w-50 ext-ext-rounded">

                    <div class="d-flex pt-5 px-5 justify-content-between">
                        <div class="d-inline-block toggle-customer cursor-pointer selected">Sign Up for Customer</div>
                        <div class="d-inline-block toggle-trader cursor-pointer">Sign Up for Trader</div>

                    </div>
                    <form action="insert.php" method="post" id="customer" class="inputs">
                        <div class="mb-3">
                            <input type="text" name="firstname" class="form-control ext-rounded" placeholder="Firstname" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="lastname" class="form-control ext-rounded" placeholder="Lastname" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control ext-rounded" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control ext-rounded" placeholder="Password" required>
                        </div>
                        <?php
                        if (isset($_SESSION['error']) && isset($_SESSION['Customer'])) {
                            echo $_SESSION['error'];
                        }

                        ?>

                        <div class="mb-3">
                            <input type="password" name="confirmpassword" class="form-control ext-rounded" placeholder="Confirm Password" required>
                        </div>

                        <?php
                        if (isset($_SESSION['mismatch'])  && isset($_SESSION['Customer'])) {
                            echo $_SESSION['mismatch'];
                        }
                        ?>
                        <div class="mb-3 d-flex align-items-center">
                            <label for="dob" class="d-inline-block w-50">Date of Birth:</label>

                            <?php
                            $year = date('Y') - 16;
                            $month = date('m');
                            $day = date('d');
                            ?>

                            <input type="date" class="form-control ext-rounded" name="dob" id="dob" max='<?php echo "$year-$month-$day"  ?>' required>
                        </div>




                        <div class="mb-3 d-flex align-items-center">
                            <label for="gender" class="d-inline-block w-50">Gender:</label>

                            <select name="gender" id="gender" required class="form-select ext-rounded">
                                <option value="default" selected disabled>Select your gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="address" class="form-control ext-rounded" placeholder="Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="tel" name="contact" class="form-control ext-rounded" placeholder="Contact No" required>
                        </div>

                        <p class="text-center">By clicking Create Account, you agree to our <a class="skyblue-txt dec-none" href="#">Terms of Services</a> and <a href="#" class="skyblue-txt dec-none">Privacy Policy</a></p>
                        <input type="submit" name="customersubmit" value="Create Account" class="btn btnregister btn-info text-light d-block mx-auto">

                        <div>
                            <p class="text-center pt-3">Already have an account?
                                <a href="signin.php" class="skyblue dec-none" name="signin-customer">Sign In</a>
                            </p>
                        </div>
                    </form>

                    <form action="insert.php" method="post" id="trader" class="inputs">
                        <div class="mb-3">
                            <input type="text" name="firstname" class="form-control ext-rounded" placeholder="Firstname" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="lastname" class="form-control ext-rounded" placeholder="Lastname" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control ext-rounded" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control ext-rounded" placeholder="Password" required>
                        </div>

                        <?php
                        if (isset($_SESSION['error'])  && isset($_SESSION['Trader'])) {
                            echo $_SESSION['error'];
                        }

                        ?>

                        <div class="mb-3">
                            <input type="password" name="confirmpassword" class="form-control ext-rounded" placeholder="Confirm Password" required>
                        </div>
                        <?php
                        if (isset($_SESSION['mismatch'])  && isset($_SESSION['Trader'])) {
                            echo $_SESSION['mismatch'];
                        }

                        ?>
                        <div class="mb-3">
                            <input type="tel" name="contact" class="form-control ext-rounded" placeholder="Contact No." required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="address" class="form-control ext-rounded" placeholder="Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="shopname" class="form-control ext-rounded" placeholder="Shop Name">
                        </div>

                        <div class="mb-3 d-flex align-items-center">
                            <label for="dob" class="d-inline-block w-50">Reg. Date:</label>
                            <input type="date" class="form-control ext-rounded" name="dob" id="dob" required>
                        </div>


                        <p class="text-center">By clicking Create Account, you agree to our <a  class="dec-none skyblue-txt" href="#">Terms of Services</a> and <a href="#" class="dec-none skyblue-txt" >Privacy Policy</a></p>
                        <input type="submit" name="customersubmit" value="Create Account" class="btn btnregister  btn-info text-light d-block mx-auto">

                        <div>
                            <p class="text-center pt-3">Already have an account?
                                <a href="signin.php" class="skyblue-txt dec-none" name="signin-customer">Sign In</a>
                            </p>
                        </div>
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

    <script src="js/registration.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>



</body>

</html>