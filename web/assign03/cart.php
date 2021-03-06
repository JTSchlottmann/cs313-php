<!DOCTYPE html>

<?php 
session_start(); 
?>

<html lang="en">
   <head>
      <title>Cart</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="shop.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script>
         function removeCart(book) {
		 $.ajax({type: "POST", url: "./remove.php", data: { book: book}}) 
	$('#' + book).remove();
	 }
      </script>
   </head>
   <body>
      <div>
         <header>Cart</header>
         <hr></br>
         <table>
            <tr>
               <th>Books</th>
	       <th>Cost</th>
               <th></th>
	    </tr>
 <?php 
             if ($_SESSION["odyssey"] == true) {
		     echo '<tr id="odyssey">
			   <td>The Odyssey</td>
			   <td>$18.75</td>
			   <td><input type="button" value="Remove from Cart" onclick="removeCart(\'odyssey\')" class="button"></td>
                           </tr>';
	    }
            
            if ($_SESSION["war"] == true) {
	    echo '<tr id="war">
	       <td>War and Peace</td>
	       <td>$20.40</td>
	       <td><input type="button" value="Remove from Cart" onclick="removeCart(\'war\')" class="button"></td>
	       </tr>';
	    }

	    if ($_SESSION["monte"] == true) {
	    echo '<tr id="monte">
	       <td>The Count of Monte Cristo</td>
      	       <td>$20.16</td>
	       <td><input type="button" value="Remove from Cart" onclick="removeCart(\'monte\')" class="button"></td>
	       </tr>';
	    }

	    if ($_SESSION["sea"] == true) {
	    echo '<tr id="sea">
               <td>Twenty Thousand Leagues Under the Sea</td>
	       <td>$16.32</td>
	       <td><input type="button" value="Remove from Cart" onclick="removeCart(\'sea\')" class="button"></td>
	       </tr>';
	    }
             ?> 
         </table>
	 <br/>
	 <a href="./browse.php" class="button">Return to Shop</a>
         <a href="./checkout.php" class="button">Proceed to Checkout</a>
      </div>
   </body>
</html>
