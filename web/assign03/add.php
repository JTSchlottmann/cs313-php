<?php
   session_start();

   if (isset($_POST['book']))
   {
	   $book = $_POST['book'];

	   if ($book === "odyssey") {
		   $_SESSION["odyssey"] = true;
	   }

	   if($book === "sea") {
		   $_SESSION["sea"] = true;
	   }

	   if ($book === "war") {
		   $_SESSION["war"] = true;
	   }

	   if ($book === "monte") {
		   $_SESSION["monte"] = true;
	   }

   }
?>
