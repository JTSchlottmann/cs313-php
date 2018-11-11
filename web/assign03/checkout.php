<!DOCTYPE html>

<?php session_start(); ?>

<html lang="en">
   <head>
      <title>Checkout</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <link rel="stylesheet" href="shop.css">
   </head>
   <body>
      <form method="POST" action="confirm.php">
         <header>Checkout</header>
         <hr></br>
           
	 Street Address: <input type="text" class="street" name="street" placeholder="Street Address">
         </br></br>

	 City: <input type="text" class="city" name="city" placeholder="City">

         </br></br>

	 State: <input type="text" class="state" name="state" placeholder="State">

         </br></br>

	 ZIP Code: <input type="text" class="zip" name="zip" placeholder="Zip Code">
         
	 </br></br>

	 <a href="./cart.php" class="button">Return to Cart</a>
         <input type="submit" value="Confirm" id="submit" class="button">
      </form>
   </body>
</html>
