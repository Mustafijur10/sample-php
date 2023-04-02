<?php

	$font = "Times new roman";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sample-PHP</title>
	<style>
		.phpcoding{width: 1000px; margin: 0 auto; background: #ddd;}
		.headeroption, .footeroption{background: #444;color: #fff; text-align: center; padding: 20px; font-family: <?php echo $font; ?>}

		.headeroption h2, .footeroption h2{margin: 0}
		.maincode{min-height: 400px;padding: 20px; color: #a83242; }
		.subcode{text-align: center;}
		body{}
	</style>

</head>
<br>

<body>
	
	<div class="phpcoding">
		<section class="headeroption">
			<h2>Header</h2>
		</section>
		
	<section class="maincode">
		<hr>
			Arrays
		<hr>
		<br>
		2. Integer
		3. Float
		4. Bolean
		5. Array
		6. Object
		7. Null
		8. Resource <br/><br/>
		
		<?php

			$cars = array(

						array("BMW", 20, 5),
						array("Volkswogen", 15, 4.5),
						array("Audi", 15, 10)
						);


			for($row =0; $row<3; $row++){

				echo "<p>Row number is $row</p>";

				echo "<ul>";

				for($col=0; $col<3; $col++){
					echo "<li>".$cars[$row][$col]."</li>";
				}

				echo "</ul>";
			}
		
		?>

	</section>
	
	<section class="footeroption">
			<h2>Footer</h2>
		</section>
	</div>
</body>
</html>