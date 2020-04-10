<!DOCTYPE html>
<html>
<head>
	<title>Operatiors</title>
	<style>
		h1{
			text-align: <?php echo "center"; ?>
		}
		.Operators_Detailes{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="Operatiors">
	<h1><?php echo "Php Operators";?></h1><hr>

	<div class = "Operators_Detailes">
		<?php
		print "<h2>Arithmetic </h2>";
			//Variales
			$a = 11;
			$b = 6;
			$c = 11;
			$x = 90;
			$y = "90";
			//$spaceship = 10;
			//$spaceshipp = 10;

			echo $a * $b;
			echo " Multiplication ( * )<br/>";

			echo $a / $b;
			echo " Division ( / )<br/>";

			echo $a + $b; 
			echo " Addition ( + ): <br/>";

			echo $a - $b;
			echo " Subtraction ( - )<br/>";

			echo $a % $b;
			echo " Modulus ( % )<br/>";

			echo $a ** $b;
			echo " Addition ( ** )<br/>";

		print "<h2>Assignment </h2>";
			// Variables
			$aa = 30;
			$aa += 600;

			$bb = 30;
			$bb -= 600;

			$cc = 30;
			$cc *= 600;

			$dd = 500;
			$dd /= 6;

			$ee = 50;
			$ee %= 25;

			$fe = 50;
			$fe **= 26;
			//Echo	
			echo $aa; echo "<br/>"; echo $bb; echo "<br/>"; echo $cc; echo "<br/>"; echo $dd;  echo "<br/>";echo $ee; echo "<br>";
			echo $fe;
			
		print "<h2>Comaparison</h2>";
			var_dump($a == $c);
			echo " - Equal ( == ) <br/>"; 

			var_dump($a != $b);
			echo " - Not Equal ( != ) <br/>";

			var_dump($a <> $b);
			echo " - Not Equal ( <> ) <br/>";

			var_dump($x === $y);
			echo " - Identical ( === )<br/>"; // Eual & Type Nirdesh Kore

			var_dump($x !== $y);
			echo " - Not Identical ( !== )<br/>"; // Eual & Type Nirdesh Kore
			
			var_dump($a > $b);
			echo " - Geter Than ( > )<br/>"; 

			var_dump($b < $a);
			echo " - Less Than ( < ) <br/>"; 

			var_dump($b <= $a);
			echo " - Less Than or Equal ( <= ) <br/>"; // Hoi Boro Choto Tik Hobe Or Equal hobe 

			var_dump($b >= $a);
			echo " - Less Than or Equal ( >= ) <br/>"; // Hoi Boro Choto Tik Hobe Or Equal hobe 

			//echo ($spaceship <=> $spaceshipp); //Php 7 
			//echo " - Sapceship <br/>"; 

		print "<h2>Increment/Decrement </h2>";

			echo ++$a; echo "<br/>"; // agee increment by one & Return $a 
			echo $a++; echo "<br/>"; //Return $a & increment by one
			echo --$b; echo "<br/>";
			echo $b--; echo "<br/>";

		print "<h2>Logical </h2>";
			//Variables
			$l = 50;
			$ll = 30;

			if ($l == 50 &&  $ll == 30) {
					echo 17;
				}
			echo "<br/>";// &&, and -used

			if ($l == 50 ||  $ll == 20) {
				echo 19;
			}	
			echo "<br/>"; // or, ||, xor -used
			
			if ($l !== 90) {
				echo 5;
			}	
			echo "<br/>"; // !==, !=, <> -used	

		print "<h2>String </h2>";
			$st = "I am Learning";
			$stt = " PHP ";
			$st .= $stt;
			echo  $st;
			echo "<br/>"; // . ,  .= , -used	

		print "<h2>Array </h2>";
			//Variable
			$x = array("a" => "red", "b" => "green");  
			$y = array("c" => "blue", "d" => "yellow");
			
			print_r($x + $y);
			echo "<br/>";

			var_dump($x == $y);
			echo "<br/>";

			var_dump($x === $y);
			echo "<br/>";

			var_dump($x != $y);
			echo "<br/>";

			var_dump($x <> $y);
			echo "<br/>";

			var_dump($x !== $y);
			echo "<br/>";

		print "<h2>Conditional Statement </h2>";
			$g = 50;
			$h = 50;

			if ($g == $h) {
			 		echo "a bigger than g";
			 	}
			echo "<br/>";
 	
			if ($g == "700") {
			 		echo "a bigger than g";
			 	}else{
			 		echo "BOOOOOOOM";
			 	}
			echo "<br/>";

			if ($g == "700") {
			 		echo "a bigger than g";
			 	}elseif($g < "40") {
			 		echo "BOOOOOOOM";
			 	}else{
			 		echo "I am Perfect";
			 	}
			


	?>	
	</div>
</body>
</html>