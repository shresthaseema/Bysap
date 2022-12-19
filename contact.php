<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
  <!-- primary-navigation-bar -->
  <?php
  include 'nav-bar.php';
  ?>
  <?php include 'secondary-nav.php'; ?>
  <?php include 'sidebar.php' ?>


  <div class="container">
    <div class="contact-container my-3">
      <div class="left-col">
        <h1 class="mb-5">How to Find us?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
          . </p>
        <i class='fas fa-map-marker-alt fa-2x pe-4'></i>Cleckhuddersfax<br></br>
        <i class='fas fa-phone fa-2x pe-3'></i>+44 7911 2536<br></br>
        <i class="fa fa-envelope fa-2x pe-3"></i>mail@gmail.com<br></br>
      </div>

      <div class="left-col">
        <h1>Get In Touch</h1>
        <form class="contact-form" id="contact-form" method="post">

          <input class="contact-input" type="text" id="name" name="name" placeholder="Your Full Name" required>
          <hr>

          <input class="contact-input" type="email" id="email" name="email" placeholder="Your Email Address" required>
          <hr>
          <textarea class="contact-textarea" rows="6" placeholder="Your Message" id="message" name="message" required></textarea>
          <hr>
          I accept all the Terms of Service
          <br>
          <button class="contact-button mt-4" type="submit" id="submit" name="submit">Send</button>
        </form>
      </div>
    </div>
    <h1> Meet Us</h1>
    <div class="w-100 mt-2">
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319" width="100%" height="200" frameborder="0"></iframe>
    </div>
  </div>
  <?php
  include 'footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

  <script src="js/tooltip.js"></script>
</body>

</html>