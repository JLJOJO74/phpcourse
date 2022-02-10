<?php include("variables.php"); ?>

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
  <?php include("navbar.php"); ?>
  <br/>
  <div class="container">
 <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Welcome to Guitar World!</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
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
			 $fav_number = 3;
			 //if(something is true) { do something; }
			 if ($fav_number > 10) {
			 echo $fav_number . " is greater than 10";
			 } else {
				 echo $fav_number . " is less than 10";
			 }
			 ?>
			 
			  <?php  
			   echo "<br/>";
			  $first_name3 = "Pete";
			 //if(something is true) { do something; }
			 if ($first_name3 == "John") {
			 echo "Hello John! How are you?";
			 } else {
				 echo "You're not John! Who are you?";
			 }
			?>
			
			<?php  
			  echo "<br/>";
			 // If Else Statments
			$num_1 = 40;
			$num_2 = 5;
			
			 //if(something is true) { do something; } if -> do then stop if not ->elseif -> do the stops -> if none of the above continues and does. 
			 
			 if ($num_1 > 100) {
				echo $num_1 . " is greater than 10";
			 } elseif ($num_2 == 5){
				 echo $num_2 . " equals 5";
			 }else {
				 echo $num_1 . " is less than 10";
			 }
			 ?>
			 
			<?php  
			  echo "<br/>";
			 // Arrays - Numeric start count at 0...1...2 Elder = 0, Smith = 1, Poppins = 2
			$last_names2 = array ("Elder", "Smith", "Poppins");
			$first_names = array ("John", "Steve", $last_names2);
			
						echo $first_names[2][1]; 
					
			 			 	
			?>
			
			<?php  
			  echo "<br/>";
			 // Arrays - 
			 $last_names2 = array ("Elder", "Smith", "Poppins");
			$first_names = array ("John", "Steve", $last_names2);
			
						echo $first_names[2][2]; 
			?>
			
			<?php  
			  echo "<br/>";
			 // Arrays - Associative array
			 $fav_pizza = array(
			 "John"=>"Pepperoni",
			 "Steve"=>"Cheese",
			 "Mary"=>"Mushroom"
			 );
			 
			 echo $fav_pizza['Mary'];
			 
			 ?>
			
			<?php  
			  echo "<br/>";
			 // Arrays - Associative array count
			 $fav_pizza = array(
			 "John"=>"Pepperoni",
			 "Steve"=>"Cheese",
			 "Mary"=>"Mushroom"
			 );
			 
			 echo count($fav_pizza);
			 ?>
			
			<?php  
			  echo "<br/>";
			 // Arrays - Numeric
			 $names = array("John", "Steve", "Mary");
			 //john = 0, steve = 1, Mary = 2
			 
			 echo $names[count($names) -1];
			 
			 ?>
			
			<?php  
			  echo "<br/>";
			 // Loops -- while
			 //while (condition is true) {do something;}
			 $counter = 0;
			 while ($counter <= 10) {
				 echo "The count is: $counter<br/>";
				 $counter++;
			 }
			 //////////////////////////////////////////
			 do {
				 echo "The count is: $counter<br/>";
				 $counter++;
			 } while ($counter <= 10);
			 
			  ?>
			
			<?php  
			  echo "<br/>";
			 // Loops -- Foreach
			
			 $names = array("John", "Steve", "Mary");
			 foreach ($names as $value) {
				 echo "$value<br/>";
			 }
			?>
			
			<?php  
			  echo "<br/>";
			
			// Loops -- Foreach

			 $count = 0;
			 $names = array("John", "Steve", "Mary");
			 
			 while ($count < count($names)){
					 echo "Name: $names[$count]<br/>";
					 $count++;
			 }	

			 ?>
			
			<?php  
			  echo "<br/>";
			
			// Functions
			function helloThere($name) {
				echo "Hello There $name!";
			}
			helloThere("John");
			
			 ?>
			
			<?php  
			  echo "<br/>";
			
			// Functions
			function helloThere2($first_name, $last_name) {
				echo "Hello There $first_name $last_name!";
			}
			helloThere2("John", "Elder");
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// Functions
			function helloThere3($num_1, $num_2) {
				echo $num_1 + $num_2;
			}
			helloThere3(41, 4);
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// Functions
			function helloThere4($num_1, $num_2) {
				return $num_1 + $num_2;
			}
			//add 10% to a variable
			$answer = helloThere4(49, 1);
			echo $answer * 1.1;
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// Random Functions - random number between 0-100
			echo rand(0,100);
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// Random Functions
			//echo mt_rand(0,10);
			$names = array("John", "Steve", "Mary");
			$rando = mt_rand(0,2);
			echo $names[$rando];
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// Random Functions
			//echo mt_rand(0,10);
			echo "Guess a number!<br/>";
			$num2 = 4;
			$rando = mt_rand(0,10);
			if ($num2 == $rando) {
			 echo "YOU WIN $num2 = $rando";
			} else {
				echo "YOU LOSSE! $num2 doesn't equal $rando";
			}
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// Date Functions
			// capital Y = YYYY lower case y = YY
			echo date('Y');
			echo "<br/>";
			echo date('l jS \of F, Y');
			echo "<br/>";
			$todays_day = date('l');
			echo "today is $todays_day";
			echo "<br/>";
			//copyright date automatically changes example webpage dates changes each year
			$todays_day = date('Y');
			echo "Copyright (c) $todays_day - All Rights Reserved";
			echo "<br/>";
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// String Manipulation
			$stuff = "john elder is a PHP coding monster";
			$monster = "monster";
			$dork = "Weirdo";
			echo str_replace($monster, $dork, $stuff);
			 echo "<br/>";
			 //all upper case - all lower strtolower 
			echo strtoupper($stuff);
			echo "<br/>";
			//first letter (or all words) start with upper case - lcwords = lower
			echo ucwords($stuff);
			echo "<br/>";
			//first letter of first word upper case - lcfirst first letter of first word lower
			echo ucfirst($stuff);
			echo "<br/>";
			//how many characters in a string
			echo strlen($stuff);
			echo "<br/>";
			
			?>
			
			<?php  
			  echo "<br/>";
			
			// include function - see top of this file include variables.php file 
			//echo "Copyright (c) " . $company_name. " " . date("Y") . " - All Rights Reserved";
			
			
			  echo "<br/>";
			
				include("footer.php");
			
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





