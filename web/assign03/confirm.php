<!DOCTYPE html>

<?php session_start(); ?>

<html lang="en">
   <head>
      <title>Purchase Confirmation</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <link rel="stylesheet" href="shop.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
   </head>
   <body>
      <div>
         <header>Purchase Confirmation</header>
	 <hr></br>
         <table>
            <tr>
            <th>Books</th>
            </tr>
       <?php
             if ($_SESSION["odyssey"] == true) {
             echo '<tr id="odyssey">
                   <td>The Odyssey</td>
                   </tr>';
            }

            if ($_SESSION["war"] == true) {
            echo '<tr id="war">
               <td>War and Peace</td>
               </tr>';
            }

            if ($_SESSION["monte"] == true) {
            echo '<tr id="monte">
               <td>The Count of Monte Cristo</td>
               </tr>';
            }

            if ($_SESSION["sea"] == true) {
            echo '<tr id="sea">
               <td>Twenty Thousand Leagues Under the Sea</td>
               <td>$16.32</td>
               </tr>';
            }

?> 
          </table>
	  </br>
          Address: </br>
<?php
	     $address = $_POST['street'] . ' ' . $_POST['city'] . ', ' . $_POST['state'] . ' ' . $_POST['zip'];

	     echo $address;
           ?>
      </div>
   </body>
</html>
