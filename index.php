<?php
/*
 * Created on Jun 15, 2012
 *
 * Author: chens
 * File Name: index.php
 *
 */
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="GENERATOR" content="PHPEclipse 1.2.0" />
	<title>All Random</title>
	<link type="text/css" rel="stylesheet" href="common.css" />
</head>
<body>
	<h1>It&acute;s All Random</h1>
	<p>Numbers and operators will be all randomly generated and calculated at the end.</p>

	<?php
		function giveMeANumber (){
			return rand(1, 100);
		}
		function giveMeAnOperator(){
			$operator = rand(1,4);
			switch ($operator){
				case 1:
					return "+";
					exit;
				case 2:
					return "-";
					exit;
				case 3:
					return "*";
					exit;
				case 4:
					return "/";
					exit;
			}

		}

		function letsCalculate($numbers) {
			for ($i=0; $i< $numbers; $i++) {

			}
		}
		
		function displayEquation(){
			$equation = array( giveMeANumber(), giveMeAnOperator(), giveMeANumber(), giveMeAnOperator(), giveMeANumber() );
			$result = 0;
			print_r( $equation );
			echo "<p>";
			foreach ( $equation as $element ){	
				echo $element . " ";
			}
			
			echo "</p>";
			$result = implode($equation);
			echo "<p>The equation: ".$result."</p>";
			eval('$result='.$result.';');
			echo "<p>Result: ".$result."</p>";
		}
		
		displayEquation();
	?>
	
</body>
</html>