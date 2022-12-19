<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Checkout</title>
</head>
<body class="checkout-body">
    <h2>Checkout</h2>
    <hr>
<h4>Collection Slot</h4>
  <br>
  <div class="form">
  <form method="post" action="">
  <label>Pick your collection day</label><br></br>
  <input type="radio" name="day" checked>Wednesday </input><br></br>
  <input type="radio" name="day">Thursday</input><br></br>
  <input type="radio" name="day">Friday</input><br></br>

  <label >Pick your collection time</label><br></br>
  <input type="radio" name="time">10am-1pm</input><br></br>
  <input type="radio" name="time"checked>1pm-4pm</input><br></br>
  <input type="radio" name="time">4pm-7pm</input><br></br>
  </form>
  </div>

  <div class="ordersumm">
  <form method="post" action="">
  <label>Order Summary</label>
  <br></br>
  <label >Total items :</label> 
  <label>2</label> <br></br> 

  <label>Subtotal :</label>
  <label>  &pound;28.5 </label><br></br> 

  <label >Discount :</label>
     <label> &pound;1.5  </label><br></br>
  <hr></hr>
  <label > Total :</label>
  <label> &pound;27.5</label><br></br>
  <button type="submit" name="submit" class="checkout-btn">PayPal Payment</button>
</form>
  </div>
</body>
</html>   