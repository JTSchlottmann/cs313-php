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
      <script>
         function removeCart(book) {
	 $.ajax({type: "POST", url: "./remove.php", data: { book: book}})
         }
      </script>
   </head>
   <body>
      <form action="browser.php">
         <header>Cart</header>
         <hr></br>
         <table>
            <tr>
               <th>Books</th>
               <th>Cost</th>
	    </tr>
<?php
            if ($_SESSION["odyssey"] == true) {
		    echo '<tr>
			  <td>The Odyssey</td>
                          <td>$18.75</td>
                          <td><input type="button" value="Add to Cart" onclick="removeCart(\'odyssey\')" class="button"></td>
			  </tr>'
	    }
            
            if ($_SESSION["war"] == true) {
	    echo '<tr>
	       <td>War and Peace</td>
	       <td>$20.40</td>
	       <td><input type="button" value="Add to Cart" onclick="removeCart(\'war\')" class="button"></td>
	       </tr>'
	    }

	    if ($_SESSION["monte"] == true) {
	    echo '<tr>
	       <td>The Count of Monte Cristo</td>
      	       <td>$20.16</td>
	       <td><input type="button" value="Add to Cart" onclick="removeCart(\'monte\')" class="button"></td>
	       </tr>'
	    }

	    if ($_SESSION["sea"] == true) {
	    echo '<tr>
               <td>Twenty Thousand Leagues Under the Sea</td>
	       <td>$16.32</td>
	       <td><input type="button" value="Add to Cart" onclick="removeCart(\'sea\')" class="button"></td>
	       </tr>'
	    }
             ?>
         </table>
	 <br/>
	 <input type="submit" value="View Cart" id="view" class="button">
      </form>
   </body>
</html>
