<?php
   session_start();

   if (isset($_POST['book']))
   {
	   $book = $_POST['book'];

	   if ($book === "odyssey") {
	       $_SESSION["odyssey"] = false;
	   }

	   if($book === "sea") {
		   $_SESSION["sea"] = false;
	   }

	   if ($book === "war") {
		   $_SESSION["war"] = false;
	   }

	   if ($book === "monte") {
		   $_SESSION["monte"] = false;
	   }

   }
?>
