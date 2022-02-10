<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <br/>
  <center>
  
    <h1>
			<?php
				echo "hello world!<br>";
				$first_name = "Jo-Lynn<br>";
				$favourite_number = 41;
				$last_name = "Jardine";
				echo $first_name;
				
			//math operators
				//+ - * / **
				$num_1 = 40;
				echo $num_1++;
				echo "<br/>";
				$num_2 = 4;
				echo $num_1 + $num_2;
				echo "<br/>";
				
			// Concantenation
				echo $first_name . " " . $last_name
				
			// Comparison Operators 
			/* == equal to
			   != not equal to
			   >  Greater than
			   <  Less than 
			   >= greater than or equal
			   <= less than or equal to
			   */
			   
			  /* $num_3 = 41;
			   $num_4 = 41;
			   $first_name2 = "pete";
			   
			   var_dump($first_name2 == "Pete");
			   */
			   ?>
			   
			 <?php  
			   echo "<br/>";
			// Escape Characters \
				echo "and then she said : \"You're pretty!\"";
			
				 ?>
				 
			 <?php  
			  echo "<br/>";
			 // If Else Statments
			 $first_name3 = "Pete";
			 //if(something is true) { do something; }
			 if ($first_name3 == "John") {
			 echo "Hello John! How are you?";
			 } else {
				 echo "You're not John! Who are you?";
			 }
			 
			 
		
				
			
			?>

			
	
	
  
    	
	</h1>
			
				

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>





