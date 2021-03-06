<!DOCTYPE html>

<?php
session_start(); 
?>

<html lang="en">
   <head>
      <title>Classic Books</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="shop.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
      <script>
         function addToCart(book) {
	 $.ajax({type: "POST", url: "./add.php", data: { book: book}})
         }
      </script>
   </head>
   <body>
      <div>
         <header>Classic Books on Sale</header>
         <hr></br>
         <table>
            <tr>
               <th>Books</th>
	       <th>Cost</th>
               <th></th>
            </tr>
	    <tr>
	       <td>The Odyssey</td>
	       <td>$18.75</td>
	       <td><input type="button" value="Add to Cart" onclick="addToCart('odyssey')" class="button"></td>
	    </tr>
	    <tr>
	       <td>War and Peace</td>
	       <td>$20.40</td>
	       <td><input type="button" value="Add to Cart" onclick="addToCart('war')" class="button"></td>
	    </tr>
	    <tr>
	       <td>The Count of Monte Cristo</td>
      	       <td>$20.16</td>
	       <td><input type="button" value="Add to Cart" onclick="addToCart('monte')" class="button"></td>
	    </tr>
	    <tr>
               <td>Twenty Thousand Leagues Under the Sea</td>
	       <td>$16.32</td>
	       <td><input type="button" value="Add to Cart" onclick="addToCart('sea')" class="button"></td>
	    </tr>
         </table>
	 <br/>
         <a href="./cart.php" class="button">View Cart</a>
      </div>
   </body>
</html>
